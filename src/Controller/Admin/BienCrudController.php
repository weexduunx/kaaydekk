<?php

namespace App\Controller\Admin;

use App\Entity\Attachment;
use App\Entity\Bien;
use App\Form\AttachmentType;
use Doctrine\DBAL\Types\ArrayType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Vich\UploaderBundle\Entity\File;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\VichUploaderBundle;

class BienCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Bien::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('label')
            ->add('prix')
            // most of the times there is no need to define the
            // filter type because EasyAdmin can guess it automatically
            ->add(BooleanFilter::new('status'))
            ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('INFOS BIEN','fa fa-pencil'),
            TextField::new('label','Nature du Bien'),
            AssociationField::new('typeDeBien','Type de logement'),
            MoneyField::new('prix')
                ->setCurrency('XOF'),
            NumberField::new('superficie'),
            AssociationField::new('achat','Achat cumulé')
                ->hideOnIndex(),
            BooleanField::new('status'),
            DateField::new('createdAt'),
            DateField::new('updatedAt'),
            ImageField::new('thumbnailFile','image')
                ->setFormType(VichImageType::class)
                ->hideOnDetail()
                ->hideOnIndex()
                ->hideOnForm(),
            ImageField::new('thumbnail','Image')
                ->setBasePath('/images/bien')
                ->setUploadDir('public/images/bien/'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX,'detail');
    }

}

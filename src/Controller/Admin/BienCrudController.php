<?php

namespace App\Controller\Admin;

use App\Entity\Attachment;
use App\Entity\Bien;
use App\Form\AttachmentType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;

use Vich\UploaderBundle\Form\Type\VichImageType;

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
            FormField::addPanel('Infos de base','fa fa-plus')
            ->setCssClass('col-lg-12 '),
            ColorField::new('color','Couleur Statistique'),
            TextField::new('label','Nature du Bien'),
            AssociationField::new('typeDeBien','Type de logement'),
            AssociationField::new('projet'),
            IntegerField::new('price','Prix (CFA)'),
            NumberField::new('superficie'),
            AssociationField::new('mode_acquisition','Mode acquisition'),
            BooleanField::new('status'),
            AssociationField::new('projet'),
            IntegerField::new('rooms', 'Piéces'),
            IntegerField::new('bedrooms', 'Chambres'),
            AssociationField::new('city', 'Ville'),
            TextField::new('address','Adresse'),
            TextField::new('postal_code','Code Postal'),
            TextareaField::new('description','Description'),
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


        return $actions
            ->add(Crud::PAGE_INDEX,'detail');
    }

}

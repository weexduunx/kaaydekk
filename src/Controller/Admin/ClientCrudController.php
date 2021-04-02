<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use phpDocumentor\Reflection\Type;
use Symfony\Component\DomCrawler\Field\TextareaFormField;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('prenom')
            // most of the times there is no need to define the
            // filter type because EasyAdmin can guess it automatically
            ->add(BooleanFilter::new('status'))
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('INFORMATIONS DE BASE','fa fa-pencil'),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('adresse'),
            TelephoneField::new('tel'),
            TextField::new('numero_cin_ou_passeport'),
            AssociationField::new('achat'),
            BooleanField::new('status'),
            TextEditorField::new('commentaire', 'Commentaire'),
        ];
    }

}

<?php

namespace App\Controller\Admin;

use App\Entity\TypeDeBien;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypeDeBienCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeDeBien::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('label','Type de Bien'),
            AssociationField::new('inscriptions','Nombre d\'inscrits')->hideOnForm()

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->setPermission('delete','ROLE_SUPER_USER');
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index','Nombre d\'inscit(e)s par type de bien')
            ->setPageTitle('new','Créer un type de bien')
            ->setPageTitle('edit','Page d\'édition');
    }
}

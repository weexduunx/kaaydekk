<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('reference_projet'),
            TextField::new('nom_du_projet'),
            AssociationField::new('site'),
            DateTimeField::new('createdAt'),
            DateTimeField::new('updateAt'),
        ];
    }

}

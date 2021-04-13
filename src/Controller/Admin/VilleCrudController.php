<?php

namespace App\Controller\Admin;

use App\Entity\Ville;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VilleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ville::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('DETAILS SUR LES VILLES','fa fa-pencil'),
            TextField::new('label','Ville de'),
            AssociationField::new('region','Région de'),
        ];
    }

}

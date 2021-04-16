<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AchatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Achat::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('DETAILS DES ACQUISITIONS','fa fa-pencil'),
            TextField::new('label','Mode Acquisition'),
            AssociationField::new('biens','Bien Concerné'),
            AssociationField::new('client','Client Concerné'),
        ];
    }

}

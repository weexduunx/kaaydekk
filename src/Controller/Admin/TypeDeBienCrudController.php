<?php

namespace App\Controller\Admin;

use App\Entity\TypeDeBien;
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
            TextField::new('label','Type de logement'),
            IntegerField::new('prix','Prix (CFA)'), 
            AssociationField::new('detailsCandidatures','Nombre de Candidats')

        ];
    }
    
}

<?php

namespace App\Controller\Admin;

use App\Entity\TypeDeBien;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypeDeBienCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeDeBien::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}

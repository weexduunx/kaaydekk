<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class UserCrudController extends AbstractCrudController
{
    /**
     * @IsGranted("ROLE_SUPER_USER")
     *
     */
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityPermission('ROLE_ADMIN');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('email'),
            TextField::new('password')->hideOnIndex()->hideOnDetail()->setPermission('ROLE_SUPER_USER'),
            ArrayField::new('roles')->setPermission('ROLE_SUPER_USER'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::DELETE,'ROLE_SUPER_USER' );

    }

}

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
        return $crud
            ->setPageTitle('index','Compte utilisateur')
            ->setPageTitle('detail','utilisateur')
            ->setPageTitle('edit','Modifier le compte')
            ->setHelp('edit','cette page contient l\'information de l\'utilisateur')
            ->setEntityPermission('ROLE_ADMIN');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('firstname'),

            TextField::new('email'),
            TextField::new('password')->hideOnIndex()->hideOnDetail()->setPermission('ROLE_SUPER_USER'),
            ArrayField::new('roles')->setPermission('ROLE_SUPER_USER'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);

    }



}

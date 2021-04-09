<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use App\Entity\Bien;
use App\Entity\Client;
use App\Entity\DetailCandidature;
use App\Entity\DetailsCandidature;
use App\Entity\TypeDeBien;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/layout.html.twig');
       // return parent::index();
    }


    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            // use the given $user object to get the user name
            ->setName($user->getUsername())
            // use this method if you don't want to display the name of the user
            ->displayUserName(true)
            ->setGravatarEmail($user->getEmail());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Kaay Dëkk Immo')
             ->setTranslationDomain('/');
    }

    public function configureMenuItems(): iterable
    {
              return [
                  MenuItem::section('ACCUEIL','fa fa-home'),
                  MenuItem::linkToDashboard('Tableau de Bord','fa fa-home'),
                  MenuItem::section('GESTION','fa fa-folder'),
                  MenuItem::subMenu('Gestion des Achats')
                      ->setSubItems([
                      MenuItem::linkToCrud('Liste des Achats', 'fas fa-list', Achat::class),
                      MenuItem::linkToCrud('Ajouter un Achat','fas fa-plus', Achat::class)
                          ->setAction('new'),
                  ]),
                  MenuItem::subMenu('Gestion des Biens')->setSubItems([
                      MenuItem::linkToCrud('Liste des biens', 'fas fa-list', Bien::class),
                      MenuItem::linkToCrud('Ajouter un bien', 'fas fa-plus', Bien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Créer un type de bien', 'fas fa-plus', TypeDeBien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Liste des types de biens', 'fas fa-list', TypeDeBien::class),
                  ]),
                  MenuItem::subMenu('Gestion des Clients')->setSubItems([
                      MenuItem::linkToCrud('liste des clients', 'fas fa-list', Client::class),
                      MenuItem::linkToCrud('Ajouter un client', 'fas fa-plus', Client::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Détails canditdatures','fa fa-list',DetailsCandidature::class),
                      MenuItem::linkToCrud('Ajouter les détails', 'fas fa-plus', DetailsCandidature::class)
                          ->setAction('new'),
                  ]),

                  MenuItem::section('PARAMÈTRES','fa fa-cog'),
                  MenuItem::subMenu('Gestion des Utilisateurs', 'fas fa-user')->setSubItems([
                      MenuItem::linkToCrud('liste des utilisateurs', 'fas fa-list', User::class),
                      MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)
                          ->setAction('new'),
                  ]),

              ];
    }

}

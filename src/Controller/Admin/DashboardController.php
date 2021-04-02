<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use App\Entity\Bien;
use App\Entity\Client;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    public function configureAssets(): Assets
    {
        return Assets::new()
            // ...
            ->addHtmlContentToHead('<style>:root { --color-primary: #2B65EC; }</style>');
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Kaay Dëkk Immo');
    }

    public function configureMenuItems(): iterable
    {

        return [
             MenuItem::linktoDashboard('Tableau de bord', 'fa fa-home'),
             MenuItem::section('GESTION'),
             MenuItem::subMenu('Gestion des Achats')->setSubItems([
                 MenuItem::linkToCrud('Liste des Achats', 'fas fa-list', Achat::class),
                 MenuItem::linkToCrud('Ajouter un Achat','fas fa-plus', Achat::class)
                     ->setAction('new'),
            ]),
            MenuItem::subMenu('Gestion des Biens')->setSubItems([
                 MenuItem::linkToCrud('Liste des biens', 'fas fa-list', Bien::class),
                 MenuItem::linkToCrud('Ajouter un bien', 'fas fa-plus', Bien::class)
                ->setAction('new'),
            ]),
            MenuItem::subMenu('Gestion des Clients')->setSubItems([
                 MenuItem::linkToCrud('liste des clients', 'fas fa-list', Client::class),
                 MenuItem::linkToCrud('Ajouter un client', 'fas fa-plus', Client::class)
                ->setAction('new'),
            ]),
            MenuItem::section('Paramétres'),
            MenuItem::subMenu('Gestion des Utilisateurs', 'fas fa-user')->setSubItems([
                 MenuItem::linkToCrud('liste des utilisateurs', 'fas fa-list', User::class),
                 MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)
                ->setAction('new'),
            ]),

        ];

    }
}

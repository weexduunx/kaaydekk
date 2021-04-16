<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use App\Entity\Bien;
use App\Entity\Client;
use App\Entity\DetailCandidature;
use App\Entity\DetailsCandidature;
use App\Entity\Projet;
use App\Entity\Site;
use App\Entity\TypeDeBien;
use App\Entity\User;
use App\Entity\Ville;
use App\Repository\AchatRepository;
use App\Repository\BienRepository;
use App\Repository\ClientRepository;
use App\Repository\DetailsCandidatureRepository;
use App\Repository\ProjetRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Require ROLE_USER for *every* controller method in this class.
 *
 * @IsGranted("ROLE_USER")
 */
class DashboardController extends AbstractDashboardController
{
    protected $detailsCandidatureRepository;
    protected $clientRepository;
    protected $bienRepository;
    protected $projetRepository;

    public function __construct(
        DetailsCandidatureRepository $detailsCandidatureRepository,
        ClientRepository $clientRepository,
        BienRepository $bienRepository,
        ProjetRepository $projetRepository
    )
        {
           $this->detailsCandidatureRepository = $detailsCandidatureRepository;
            $this->clientRepository = $clientRepository;
            $this->bienRepository = $bienRepository;
            $this->projetRepository = $projetRepository;

        }

    /**
     *
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_USER")
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function index(): Response
    {
        //on va chercher les détails des candidatures clients
        $candidats = $this->detailsCandidatureRepository->findAll();

        $nom = [];
        $color = [];
        $count = [];
        $revenu = [];

        // J'ai démaonté les données pour les séparer tel qu'attendu par ChartJS
        foreach ($candidats as $candidat){
            $nom[] = $candidat->getNom();
            $color[] = $candidat->getColor();
            $revenu[] = $candidat->getRevenuMensuelle();
            $count[] = count($candidat->getNom());

            // Je cherche le nombre de client publié par date
            $clients = $this->clientRepository->countByDate();


        }



        return $this->render('bundles/EasyAdminBundle/welcome.html.twig',
            [
                'countAllClient' =>$this->clientRepository->countAllClient(),
                'countAllCandidature' =>$this->detailsCandidatureRepository->countAllCandidature(),
                'countAllBien' =>$this->bienRepository->countAllBien(),
                'price' =>$this->bienRepository->findAll(),
                'clients'=>$this->clientRepository->findAll(),
                'countAllProjet'=>$this->projetRepository->countAllProjet(),
                'nom' =>json_encode($nom),
                'color' =>json_encode($color),
                'count' =>json_encode($count),
                'revenu'=>json_encode($revenu),


            ]);
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
                  MenuItem::subMenu('Critére du logement')
                      ->setSubItems([
                      MenuItem::linkToCrud('Liste des Modes', 'fas fa-list', Achat::class),
                      MenuItem::linkToCrud('Ajouter un mode','fas fa-plus', Achat::class)
                          ->setAction('new'),
                  ])->setPermission('ROLE_ADMIN'),

                  MenuItem::subMenu('Gestion des Biens')->setSubItems([
                      MenuItem::linkToCrud('Liste des biens', 'fas fa-list', Bien::class),
                      MenuItem::linkToCrud('Ajouter un bien', 'fas fa-plus', Bien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Créer un type de bien', 'fas fa-plus', TypeDeBien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Liste des types de biens', 'fas fa-list', TypeDeBien::class),
                  ])->setPermission('ROLE_ADMIN'),

                  MenuItem::subMenu('Gestion des Clients')->setSubItems([
                      MenuItem::linkToCrud('liste des clients', 'fas fa-list', Client::class),
                      MenuItem::linkToCrud('Ajouter un client', 'fas fa-plus', Client::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Détails canditdatures','fa fa-list',DetailsCandidature::class),
                      MenuItem::linkToCrud('Ajouter les détails', 'fas fa-plus', DetailsCandidature::class)
                          ->setAction('new'),
                  ])->setPermission('ROLE_ADMIN'),

                  MenuItem::subMenu('Gestion des Projets')
                      ->setSubItems([
                          MenuItem::linkToCrud('Lister les projets', 'fas fa-list', Projet::class),
                          MenuItem::linkToCrud('Ajouter un projet','fas fa-plus', Projet::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_ADMIN'),

                  MenuItem::subMenu('Gestion des Sites')
                      ->setSubItems([
                          MenuItem::linkToCrud('Liste des sites', 'fas fa-list', Site::class),
                          MenuItem::linkToCrud('Ajouter un site','fas fa-plus', Site::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_ADMIN'),

                  MenuItem::subMenu('Gestion des Villes')
                      ->setSubItems([
                          MenuItem::linkToCrud('Liste des villes', 'fas fa-list', Ville::class),
                          MenuItem::linkToCrud('Ajouter un ville','fas fa-plus', Ville::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_SUPER_USER'),

                  MenuItem::section('PARAMÈTRES','fa fa-cog'),
                  MenuItem::subMenu('Gestion des Utilisateurs', 'fas fa-user')->setSubItems([
                      MenuItem::linkToCrud('liste des utilisateurs', 'fas fa-list', User::class),
                      MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)
                          ->setAction('new')->setPermission('ROLE_SUPER_USER'),
                  ]),

              ];
    }

}

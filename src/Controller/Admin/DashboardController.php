<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use App\Entity\Bien;
use App\Entity\Client;
use App\Entity\DetailsCandidature;
use App\Entity\Projet;
use App\Entity\Site;
use App\Entity\TypeDeBien;
use App\Entity\User;
use App\Entity\Ville;
use App\Repository\BienRepository;
use App\Repository\ClientRepository;
use App\Repository\DetailsCandidatureRepository;
use App\Repository\ProjetRepository;
use App\Repository\UserRepository;
use App\Repository\TypeDeBienRepository;
use Doctrine\ORM\NonUniqueResultException;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 * @IsGranted("ROLE_ADMIN")
 */
class DashboardController extends AbstractDashboardController
{
    protected $detailsCandidatureRepository;
    protected $clientRepository;
    protected $bienRepository;
    protected $projetRepository;
    protected $userRepository;
    protected $typeDeBienRepository;

    public function __construct(
        DetailsCandidatureRepository $detailsCandidatureRepository,
        ClientRepository $clientRepository,
        BienRepository $bienRepository,
        ProjetRepository $projetRepository,
        UserRepository $userRepository,
        TypeDeBienRepository $typeDeBienRepository
    )
        {
           $this->detailsCandidatureRepository = $detailsCandidatureRepository;
            $this->clientRepository = $clientRepository;
            $this->bienRepository = $bienRepository;
            $this->projetRepository = $projetRepository;
            $this->userRepository = $userRepository;
            $this->typeDeBienRepository = $typeDeBienRepository;

        }

    /**
     *
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_ADMIN")
     * @throws NonUniqueResultException
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
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

        }

         //on va chercher les détails des candidatures clients
         $candidatx = $this->detailsCandidatureRepository->findAll();

         $prenom = [];
         $color1 = [];
         $count1 = [];
         $salaire = [];
 
         // J'ai démaonté les données pour les séparer tel qu'attendu par ChartJS
         foreach ($candidatx as $salarie){
             $prenom[] = $salarie->getNom();
             $color1[] = $salarie->getColor();
             $salaire[] = $salarie->getSalaireMensuelle();
             $count1[] = count($salarie->getNom());
 
         }

        //couleur des client par date
        $colorClients = $this->clientRepository->findAll();

        $colorClient = [];
        foreach ($colorClients as $colorclient){
            $colorClient[] = $colorclient->getColor();
        }
        // Je cherche le nombre de client publié par date
        $clients = $this->clientRepository->countByDate();

        $dates = [];
        $compte = [];

        //J'ai démaonté les données pour les séparer tel qu'attendu par ChartJS
        foreach($clients as $client){
            $dates[] = $client['date'];
            $compte[] = $client ['count'];

        }

      

        //Je cherche les données des couleur de statistique et les démontés
        $colorStats = $this->bienRepository->findAll();

        $colorStat = [];
        foreach ($colorStats as $colorx){
            $colorStat[] = $colorx->getColor();
        }

        //je calcule par groupe les biens vendus
        $biens = $this->bienRepository->calculGroup();

        $prix_total = [];
        $label = [];


        foreach ($biens as  $bien) {
            $prix_total[] = $bien['prix_total'];
            $label[] = $bien['label'];

        }


        //je calcule le prix total des biens vendus
        $somme = $this->bienRepository->calculTotal();


        // je cherche les deux derniers utilisateurs ajoutés
        $latestClient = $this->clientRepository->findLatestClient();

        //F3 ou F4 par Agence

        //je cherche le dernier utilisateur connecté
        $user = $this->getUser();

        $repository = $this->getDoctrine()->getRepository(User::class);
        $data_users = $repository->findBy(['email' => $user->getUsername()]);

        //le dernier utilisateur créé et non vérifié
        $users = $this->userRepository->findLatestUserNonVerified();

        //le dernier utilisateur créé et vérifié
        $verified = $this->userRepository->findLatestUserVerified();


        return $this->render('bundles/EasyAdminBundle/welcome.html.twig',
            [

                'countAllClient' =>$this->clientRepository->countAllClient(),
                'countAllCandidature' =>$this->detailsCandidatureRepository->countAllCandidature(),
                'countAllBien' =>$this->bienRepository->countAllBien(),
                'price' =>$this->bienRepository->findAll(),
                'clients'=>$this->clientRepository->findAll(),
                'countAllProjet'=>$this->projetRepository->countAllProjet(),
                'logement'=>$this->typeDeBienRepository->findAll(),


                'nom' =>json_encode($nom),
                'color' =>json_encode($color),
                'count' =>json_encode($count),
                'revenu'=>json_encode($revenu),


                'prenom' =>json_encode($prenom),
                'color1' =>json_encode($color1),
                'count1' =>json_encode($count1),
                'salaire'=>json_encode($salaire),





                'dates'=>json_encode($dates),
                'compte'=>json_encode($compte),
                'prix_total'=>json_encode($prix_total),
                'group'=>json_encode($label),
                'somme' => $somme,


                'creation' => $latestClient,
                'users'=> $users,
                'userVerified'=>$verified,
                'data_users' => $data_users,
                'colorx' =>json_encode($colorStat),
                'colorClient' =>json_encode($colorClient),

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
                  MenuItem::linkToDashboard('Tableau de Bord','fa fa-dashboard'),

                  MenuItem::subMenu('Mode d\'acquisition', 'fa fa-money')
                      ->setSubItems([
                      MenuItem::linkToCrud('Liste des Modes', 'fas fa-list', Achat::class),
                      MenuItem::linkToCrud('Ajouter un mode','fas fa-plus', Achat::class)
                          ->setAction('new'),
                  ])->setPermission('ROLE_SUPER_USER'),

                  MenuItem::subMenu('Gestion des Biens', 'fa fa-building')->setSubItems([
                      MenuItem::linkToCrud('Liste des biens', 'fas fa-list', Bien::class),
                      MenuItem::linkToCrud('Ajouter un bien', 'fas fa-plus', Bien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Créer un type de bien', 'fas fa-plus', TypeDeBien::class)
                          ->setAction('new'),
                      MenuItem::linkToCrud('Liste des types de biens', 'fas fa-list', TypeDeBien::class),
                  ])->setPermission('ROLE_SUPER_USER'),

                  MenuItem::subMenu('Gestion des Clients', 'fa fa-user-circle-o')->setSubItems([
                      MenuItem::linkToCrud('liste des clients', 'fas fa-list', Client::class),
                      MenuItem::linkToCrud('Ajouter un client', 'fas fa-plus', Client::class)
                          ->setAction('new')->setPermission('ROLE_RESPONSABLE'),
                      MenuItem::linkToCrud('Liste des candidats','fa fa-list',DetailsCandidature::class),
                      MenuItem::linkToCrud('Ajouter les détails', 'fas fa-plus', DetailsCandidature::class)
                          ->setAction('new'),
                  ])->setPermission('ROLE_COMMERCIAL'),

                  MenuItem::subMenu('Gestion des Projets', 'fa fa-project-diagram')
                      ->setSubItems([
                          MenuItem::linkToCrud('Liste des projets', 'fas fa-list', Projet::class),
                          MenuItem::linkToCrud('Ajouter un projet','fas fa-plus', Projet::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_RESPONSABLE'),

                  MenuItem::subMenu('Gestion des Sites', 'fa fa-area-chart')
                      ->setSubItems([
                          MenuItem::linkToCrud('Liste des sites', 'fas fa-list', Site::class),
                          MenuItem::linkToCrud('Ajouter un site','fas fa-plus', Site::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_RESPONSABLE'),

                  MenuItem::subMenu('Gestion des Villes', 'fa fa-city')
                      ->setSubItems([
                          MenuItem::linkToCrud('Liste des villes', 'fas fa-list', Ville::class),
                          MenuItem::linkToCrud('Ajouter une ville','fas fa-plus', Ville::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_SUPER_USER'),

                  MenuItem::subMenu('Paramètres Utilisateur','fa fa-cog')->setSubItems([
                          MenuItem::linkToCrud('liste des utilisateurs', 'fas fa-list', User::class),
                          MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)
                              ->setAction('new'),
                      ])->setPermission('ROLE_SUPER_USER'),


              ];
    }

}

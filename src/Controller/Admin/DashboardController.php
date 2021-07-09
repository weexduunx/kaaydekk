<?php

namespace App\Controller\Admin;

use App\Entity\Achat;
use App\Entity\Bien;
use App\Entity\Client;
use App\Entity\DetailsCandidature;
use App\Entity\Inscription;
use App\Entity\Projet;
use App\Entity\Site;
use App\Entity\TypeDeBien;
use App\Entity\User;
use App\Entity\Ville;
use App\Repository\BienRepository;
use App\Repository\ClientRepository;
use App\Repository\DetailsCandidatureRepository;
use App\Repository\InscriptionRepository;
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
    protected $inscriptionRepository;

    public function __construct(
        DetailsCandidatureRepository $detailsCandidatureRepository,
        ClientRepository $clientRepository,
        BienRepository $bienRepository,
        ProjetRepository $projetRepository,
        UserRepository $userRepository,
        TypeDeBienRepository $typeDeBienRepository,
        InscriptionRepository $inscriptionRepository
    )
        {
           $this->detailsCandidatureRepository = $detailsCandidatureRepository;
            $this->clientRepository = $clientRepository;
            $this->bienRepository = $bienRepository;
            $this->projetRepository = $projetRepository;
            $this->userRepository = $userRepository;
            $this->typeDeBienRepository = $typeDeBienRepository;
            $this->inscriptionRepository = $inscriptionRepository;

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

        $prenom = [];
        $color1 = [];
        $count1 = [];
        $revenu = [];

        // J'ai démaonté les données pour les séparer tel qu'attendu par ChartJS
        foreach ($candidats as $candidat){
            $prenom[] = $candidat->getPrenomEtNom();
            $color1[] = $candidat->getColor();
            $revenu[] = $candidat->getRevenuMensuelle();
            $count1[] = count($candidat->getNom());

        }

         //on va chercher les détails des candidatures clients
         $candidatx = $this->detailsCandidatureRepository->findAll();

         $nom = [];
         $color = [];
         $count = [];
         $salaire = [];
 
         // J'ai démaonté les données pour les séparer tel qu'attendu par ChartJS
         foreach ($candidatx as $salarie){
             $nom[] = $salarie->getPrenomEtNom();
             $color[] = $salarie->getColor();
             $salaire[] = $salarie->getSalaireMensuelle();
             $count[] = count($salarie->getNom());
 
         }

        //couleur des client par date
        $colorClients = $this->inscriptionRepository->findAll();

        $colorClient = [];
        foreach ($colorClients as $colorclient){
            $colorClient[] = $colorclient->getColor();
        }
        // Je cherche le nombre de client publié par date
        $clients = $this->inscriptionRepository->countByDate();

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

        //je calcule par groupe les F4 et F3 demandés
        $inscrits = $this->inscriptionRepository->countByLogement();

        $i = [];
        $l = [];


        foreach ($inscrits as  $inscrit) {
            $i[] = $inscrit['inscrits'];
            $l[] = $inscrit['label'];

        }


        //je calcule le prix total des biens vendus
        $somme = $this->bienRepository->calculTotal();


        // je cherche les deux derniers utilisateurs ajoutés
        $latestClient = $this->inscriptionRepository->findLatestClient();

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

                'countAllClient' =>$this->inscriptionRepository->countAllClient(),
                'countAllCandidature' =>$this->detailsCandidatureRepository->countAllCandidature(),
                'countAllBien' =>$this->bienRepository->countAllBien(),
                'price' =>$this->bienRepository->findAll(),
                
                'clients'=>$this->clientRepository->findAll(),
                'countAllProjet'=>$this->projetRepository->countAllProjet(),
                'logement'=>$this->typeDeBienRepository->findAll(),

                'i' =>json_encode($i),
                'l'=>json_encode($l),
                'nom' =>json_encode($nom),
                'color' =>json_encode($color),
                'count' =>json_encode($count),
                'salaire'=>$salaire,


                'prenom' =>json_encode($prenom),
                'color1' =>json_encode($color1),
                'count1' =>json_encode($count1),
                'revenu'=>json_encode($revenu),

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
            ->setName($user->getEmail())
            // use this method if you don't want to display the name of the user
            ->displayUserName(true)
            ->setGravatarEmail($user->getUsername())
            ->addMenuItems([
               
                MenuItem::section(),
            ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Kaay Dëkk Immo')
             ->setTranslationDomain('/')
             ->setTextDirection('ltr')
             ->renderContentMaximized()
             ->disableUrlSignatures()
             ;
    }


    public function configureMenuItems(): iterable
    {
              return [

                  MenuItem::linkToDashboard('Tableau de Bord','fa fa-dashboard'),

                  MenuItem::section('Gestion Mode Acquisition','fa fa-money')->setPermission('ROLE_SUPER_USER'),
                      MenuItem::linkToCrud('Liste des Modes', 'fas fa-list', Achat::class)->setPermission('ROLE_SUPER_USER'),
                      
                      MenuItem::section('Gestion des Biens','fa fa-building'),
                      MenuItem::linkToCrud('Liste des biens', 'fas fa-list', Bien::class),
                      MenuItem::linkToCrud('Liste des types de biens', 'fas fa-list', TypeDeBien::class),

                      MenuItem::section('Gestion des Inscriptions','fa fa-user-plus'),
                      MenuItem::linkToCrud('liste des inscrits', 'fas fa-list', Inscription::class),
                      MenuItem::linkToCrud('liste des candidats', 'fas fa-list', DetailsCandidature::class)->setPermission('ROLE_SUPER_USER'),
                      MenuItem::linkToCrud('liste des Clients', 'fas fa-list', Client::class)->setPermission('ROLE_SUPER_USER'),
                      MenuItem::linkToCrud('Ajouter une inscription', 'fas fa-plus', Inscription::class)
                          ->setAction('new'),
                    
                          MenuItem::section('Gestion des Projets','fa fa-folder')->setPermission('ROLE_SUPER_USER'),
                          MenuItem::linkToCrud('Liste des projets', 'fas fa-list', Projet::class)->setPermission('ROLE_SUPER_USER'),                    

                              MenuItem::section('Gestion des Sites','fa fa-map')->setPermission('ROLE_SUPER_USER'),
                          MenuItem::linkToCrud('Liste des sites', 'fas fa-list', Site::class)->setPermission('ROLE_SUPER_USER'),
                          MenuItem::linkToCrud('Ajouter un site','fas fa-plus', Site::class)
                              ->setAction('new')->setPermission('ROLE_SUPER_USER'),
                    

                              MenuItem::section('Gestion des Villes','fa fa-city')->setPermission('ROLE_SUPER_USER'),
                          MenuItem::linkToCrud('Liste des villes', 'fas fa-list', Ville::class)->setPermission('ROLE_SUPER_USER'),
                          MenuItem::linkToCrud('Ajouter une ville','fas fa-plus', Ville::class)
                              ->setAction('new')->setPermission('ROLE_SUPER_USER'),
                    

                              MenuItem::section('Gestion Utilisateur','fa fa-user')->setPermission('ROLE_ADMIN'),
                          MenuItem::linkToCrud('liste des utilisateurs', 'fas fa-list', User::class),
                         
                    
              ];
    }

}

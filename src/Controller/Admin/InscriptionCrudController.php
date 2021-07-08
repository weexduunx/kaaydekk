<?php

namespace App\Controller\Admin;

use App\Entity\Inscription;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Service\CsvService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Option\EA;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory;
use Symfony\Component\HttpFoundation\Request;

class InscriptionCrudController extends AbstractCrudController
{
    private CsvService $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public static function getEntityFqcn(): string
    {
        return Inscription::class;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('prenom')
            ->add('typeDeLogement')
            ->add('moodeAcquisition')
            ->add('situationProfessionelle')
            ->add(BooleanFilter::new('status'))
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('INFORMATIONS PERSONNELLES DU CANDIDAT','fa fa-pencil'),
            ColorField::new('color', 'Couleur statistique')
            ->hideOnIndex(),
            TextField::new('label','Reférence Candidature')
            ->hideOnform(),
            AssociationField::new('sourceOuAgence', 'Agence Immobiliére')
            ->hideOnIndex(),
            TextField::new('nom','Nom'),
            TextField::new('prenom', 'Prenom'),
            ArrayField::new('name','Surnom')->hideOnIndex()
            ->setHelp('pour des raison d\'statistique, le surnom vous aiderez à savoir lequel des candidat à plus de revenu'),
            DateField::new('dateDeNaissance','Date de Naissance'),
            TextField::new('lieuDeNaissance','Lieu de Naissance'),
            AssociationField::new('ville'),
            CountryField::new('nationalite', 'Nationalité'),
            TextField::new('profession','Profession'),
            TextField::new('situationMatrimoniale','Situation Matrimoniale')
            ->hideOnIndex(),
            EmailField::new('email','Email'),
            TextField::new('adresse','Adresse'),
            TelephoneField::new('tel', 'N° téléphone'),
            TextField::new('nin', 'NIN ou N° Passeport')
            ->hideOnDetail(),
            AssociationField::new('moodeAcquisition','Mode Acquisition')
            ->hideOnIndex()
            ->hideOnForm(),
            FormField::addPanel('INFORMATIONS ESSENTIELLES','fa fa-list'),
            AssociationField::new('typeDeLogement','Logement souhaité'),
            AssociationField::new('membreCooperative')->hideOnIndex(),
            TextField::new('nomCooperative')->hideOnIndex(),
            AssociationField::new('beneficiaireAppui','Bénéficiaire d\'un appui ou d\'une subvention ')->hideOnIndex(),
            AssociationField::new('logementActuel')->hideOnIndex(),
            AssociationField::new('qualite','Qualité')->hideOnIndex(),
            AssociationField::new('handicap','Handicape du demandeur ou d\'une personne à sa charge')->hideOnIndex(),
            AssociationField::new('situationProfessionelle')->hideOnIndex(),
            TextField::new('activiteNonSalarie','Domaine d\'Activité')->hideOnIndex()
            ->setHelp('à remplir, si le candidat est non-salarié'),
            TextField::new('lieuActiviteNonSalarie','Lieu d\'Activité')->hideOnIndex()
            ->setHelp('à remplir, si le candidat est non-salarié'),
            FormField::addPanel('INFORMATIONS SUPPLÉMENTAIRES','fa fa-pencil'),
            AssociationField::new('secteur')->hideOnIndex(),
            AssociationField::new('typeDeContrat','Type de contrat')->hideOnIndex(),
            AssociationField::new('compteBancaire')->hideOnIndex(),
            TextField::new('nomBanque')->hideOnIndex(),
            IntegerField::new('nbreDePersonneACharge','Nbre de personne à charge')->hideOnIndex(),
            TextField::new('nomEntreprise','Nom de la société')->hideOnIndex(),
            TextField::new('revenuMensuel','Revenu Mensuel (CFA)')->hideOnIndex()
            ->setHelp('Veuillez indiquer, le revenu si c\'est un non-salarié'),
            TextField::new('salaireMensuel','Salaire Mensuel (CFA)')->hideOnIndex()
            ->setHelp('Veuillez indiquer, le salaire si c\'est un salarié'),
            BooleanField::new('status','Statut')->setHelp('Veuillez cocher la case, pour activer l\'statut actuel du client'),

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        $export = Action::new('export', 'Exporter les données')
        ->setIcon('fa fa-download')
        ->linkToCrudAction('export')
        ->setCssClass('btn')
        ->createAsGlobalAction();


        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_INDEX, $export);
    }
    public function export(Request $request)
    {
        $context = $request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE);
        $fields = FieldCollection::new($this->configureFields(Crud::PAGE_INDEX));
        $filters = $this->get(FilterFactory::class)->create($context->getCrud()->getFiltersConfig(), $fields, $context->getEntity());
        $clients = $this->createIndexQueryBuilder($context->getSearch(), $context->getEntity(), $fields, $filters)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($clients as $client) {
            $data[] = $client->getExportData();
        }

        return $this->csvService->export($data, 'Données_des_Candidats_'.date_create()->format('d-m-y').'.csv');
    }
}

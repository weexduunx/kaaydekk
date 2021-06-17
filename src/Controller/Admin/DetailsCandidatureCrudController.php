<?php

namespace App\Controller\Admin;

use App\Entity\DetailsCandidature;
use App\Service\CsvService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Option\EA;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory;
use Symfony\Component\HttpFoundation\Request;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class DetailsCandidatureCrudController extends AbstractCrudController
{
    private CsvService $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public static function getEntityFqcn(): string
    {
        return DetailsCandidature::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('1er Niveau','fa fa-list'),
            ColorField::new('color','Couleur Statistique'),
            AssociationField::new('agence', 'Source ou Agence'),
            TextField::new('label','Reférence Candidature')
            ->hideOnform(),
<<<<<<< HEAD
            TextField::new('prenom_et_nom','Identité Confirmée')
            ->hideOnForm()
            ->hideOnDetail()
          ,
            AssociationField::new('client','Prénom et Nom'),
=======
            AssociationField::new('client', 'Prénom et Nom'),
            TextField::new('prenom_et_nom','Confirmation Identité')
            ->hideOnIndex()
            ->hideOnDetail(),
>>>>>>> e91df131ffb5308a99282a77647a44c78b511bd7
            ArrayField::new('nom','Surnom')
            ->setHelp('pour des raison d\'statistique, le surnom vous aiderez à savoir lequel des candidat à plus de revenu'),
            AssociationField::new('type_de_logement','Logement souhaité'),
            AssociationField::new('mode_acquisition'),
            AssociationField::new('membre_cooperative'),
            TextField::new('nom_de_la_cooperative'),
            AssociationField::new('beneficiaire_appui_ou_subvention','Bénéficiaire d\'un appui ou d\'une subvention '),
            AssociationField::new('logement_actuel'),
            AssociationField::new('qualite','Qualité'),
            AssociationField::new('handicap','Handicape du demandeur ou d\'une personne à sa charge'),
            AssociationField::new('situation'),
            TextField::new('nom_employeur','Nom de l\'employeur')
            ->setHelp('à remplir, si le candidat est salarié'),
            TextField::new('activite_non_salarie','Domaine d\'Activité')
            ->setHelp('à remplir, si le candidat est non-salarié'),
            TextField::new('lieu_activite_non_salarie','Lieu d\'Activité')
            ->setHelp('à remplir, si le candidat est non-salarié'),
            FormField::addPanel('2eme Niveau','fa fa-pencil'),
            AssociationField::new('secteur'),
            AssociationField::new('type_de_contrat','Type de contrat'),
            AssociationField::new('compte_bancaire'),
            TextField::new('nom_de_la_banque'),
            IntegerField::new('nombre_de_personne_en_charge','Nbre de personne à charge'),
            TextField::new('nom_de_la_societe','Nom de la société'),
            IntegerField::new('revenu_mensuelle','Revenu Mensuel (CFA)')
            ->setHelp('Veuillez indiquer, le revenu si c\'est un non-salarié'),
            IntegerField::new('salaire_mensuelle','Salaire Mensuel (CFA)')
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

        return $actions->add(Crud::PAGE_INDEX, $export)
            ->setPermission('delete','ROLE_ADMIN');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index','Détails Candidatures')
            ->setPageTitle('edit','Page d\'édition')
            ->setHelp('edit','Veuillez noter que si le candidat n\'est pas un salarié, IL FAUT AJOUTER SON DOMAINE D\'ACTIVITÉ ET LE LIEU D\'ACTIVITÉ');
    }
    public function export(Request $request)
    {
        $context = $request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE);
        $fields = FieldCollection::new($this->configureFields(Crud::PAGE_INDEX));
        $filters = $this->get(FilterFactory::class)->create($context->getCrud()->getFiltersConfig(), $fields, $context->getEntity());
        $candidats = $this->createIndexQueryBuilder($context->getSearch(), $context->getEntity(), $fields, $filters)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($candidats as $candidat) {
            $data[] = $candidat->getExportData();
        }

        return $this->csvService->export($data, 'Données_des_Candidats_'.date_create()->format('d-m-y').'.xls');
    }
}

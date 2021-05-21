<?php

namespace App\Controller\Admin;

use App\Entity\DetailsCandidature;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class DetailsCandidatureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DetailsCandidature::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('1er Niveau','fa fa-list'),
            ColorField::new('color','Couleur Statistique'),
            TextField::new('label','Reférence Candidature'),
            AssociationField::new('client','Nom & Prénom Candidat'),
            ArrayField::new('nom','Donner lui un Surnom')
            ->setHelp('pour des raison d\'statistique, le surnom vous aiderez à savoir lequel des candidat à plus de revenu'),
            AssociationField::new('type_de_logement','Logement souhaité'),
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
            IntegerField::new('revenu_mensuelle','Revenu Mensuel (CFA)'),
            IntegerField::new('salaire_mensuelle','Salaire Mensuel (CFA)'),
           

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->setPermission('delete','ROLE_SUPER_USER');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index','Détails Candidatures')
            ->setPageTitle('edit','Page d\'édition')
            ->setHelp('edit','Veuillez noter que si le candidat n\'est pas un salarié, IL FAUT AJOUTER SON DOMAINE D\'ACTIVITÉ ET LE LIEU D\'ACTIVITÉ');
    }
}

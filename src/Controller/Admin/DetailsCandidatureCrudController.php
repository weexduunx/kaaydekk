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
            FormField::addPanel('Détails candidatures','fa fa-list'),
            ColorField::new('color','Couleur Statistique'),
            TextField::new('label','Reférence Candidature'),
            AssociationField::new('client','Nom client(e) concerné(e)'),
            ArrayField::new('nom','Prénom client(e) concerné(e)'),
            AssociationField::new('type_de_logement','Logement souhaité'),
            AssociationField::new('membre_cooperative'),
            TextField::new('nom_de_la_cooperative'),
            AssociationField::new('compte_bancaire'),
            TextField::new('nom_de_la_banque'),
            IntegerField::new('nombre_de_personne_en_charge','Nbre de personne à charge'),
            AssociationField::new('beneficiaire_appui_ou_subvention','Bénéficiaire d\'un appui ou d\'une subvention '),
            AssociationField::new('logement_actuel'),
            AssociationField::new('situation'),
            FormField::addPanel('À ce niveau du formulaire si la situation du candidat est définit en "Non-Salarié", mieux vaut ne pas continuer l\'insertion','fa fa-list'),
            AssociationField::new('secteur'),
            AssociationField::new('type_de_contrat','Type de contrat'),
            TextField::new('nom_de_la_societe','Nom de la société'),
            IntegerField::new('revenu_mensuelle','Revenu Mensuel (CFA)'),
            IntegerField::new('salaire_mensuelle','Salaire Mensuel (CFA)'),

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->disable(Action::DELETE);
    }
}

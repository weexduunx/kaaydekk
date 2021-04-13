<?php

namespace App\Controller\Admin;

use App\Entity\DetailsCandidature;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
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
           FormField::addPanel('INFOS CANDIDATS','fa fa-pencil'),
            TextField::new('label','Reférence Candidature'),
            AssociationField::new('type_de_logement','Logement souhaité'),
            AssociationField::new('client','Client(e) concerné(e)'),
            AssociationField::new('membre_cooperative'),
            TextField::new('nom_de_la_cooperative'),
            AssociationField::new('compte_bancaire'),
            TextField::new('nom_de_la_banque'),
            NumberField::new('nombre_de_personne_en_charge'),
            AssociationField::new('beneficiaire_appui_ou_subvention'),
            AssociationField::new('logement_actuel'),
            AssociationField::new('situation'),
            AssociationField::new('secteur'),
            AssociationField::new('type_de_contrat'),
            TextField::new('nom_de_la_societe'),
            MoneyField::new('revenu_mensuelle')
                ->setCurrency('XOF'),
            MoneyField::new('salaire_mensuelle')
                ->setCurrency('XOF'),

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX,'detail');
    }
}

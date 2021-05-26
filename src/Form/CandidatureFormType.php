<?php

namespace App\Form;

use App\Entity\DetailsCandidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CandidatureFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('membre_cooperative', null,[
                'label'=>'Êtes-vous membre d\'une coopérative?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
               ])
            ->add('nom_de_la_cooperative', TextType::class, [
                'required'   => false,
                'label'=>'Si Oui, donner le nom de la coopérative*',
                'attr' => [
                    'autofocus' => true,
                ],
               
            ])
            ->add('nombre_de_personne_en_charge', NumberType::class,[
                'label' => 'Nbre de personne à charge*',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('compte_bancaire', null,[
                'label'=>'Avez-vous un compte bancaire?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                
            ])
            ->add('nom_de_la_banque', TextType::class, [
                'required'   => false,
                'label'=>'Si Oui, donner le nom de la banque*',
                'attr' => [
                    'autofocus' => true,
                ],
             
            ])
            ->add('beneficiaire_appui_ou_subvention',null,[
                'label'=>'Vous êtes bénéficiaire d\'un appui ou d\'une subvention?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('logement_actuel', null,[
                'label'=>'Statut',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('qualite', null,[
                'label'=>'Qualité',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
            ])
            ->add('handicap', null,[
                'label'=>'Handicape du demandeur ou d\'une personne à sa charge *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('situation', null,[
                'label'=>'Êtes-vous ? *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('secteur', null,[
                'label'=>'Si vous êtes salarié! Êtes-vous dans quel secteur?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('type_de_contrat',null,[
                'label'=>'Et quel est votre type de contrat?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('nom_employeur', TextType::class, [
                'label'=>'Nom de l\'employeur',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('activite_non_salarie', TextType::class, [
                'label'=>'Votre Domaine d\'activité *',
                'required'   => false,
            ])
            ->add('lieu_activite_non_salarie', TextType::class, [
                'label'=>'Lieu d\'activité *',
                'required'   => false,
            ])
            ->add('nom_de_la_societe', TextType::class, [
                'label'=>'Nom de la société*',
                'required'   => false,
            ])
            ->add('revenu_mensuelle', MoneyType::class, [
                'label'=>'Revenu Mensuel*',
                'currency'=>'XOF',
                'required'   => false,

            ])
            ->add('salaire_mensuelle', MoneyType::class, [
                'label'=>'Salaire Mensuel*',
                'currency'=>'XOF'
            ])
            ->add('color', ColorType::class, [
                'label' => 'Indiquer une couleur de votre choix, cliquer à l\'intérieur *',
        
            ])
            ->add('type_de_logement', null,[
                'label'=>'Type de Logement*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
        
            ->add('client', null,[

                    'label'=>'Confirmer votre identité*',
                    'placeholder'=>'cliquer ici',
                    'attr' => ['class' => 'form-select text-muted'],
            ])
            ->add('mode_acquisition', null,[
                'label'=>'Mode d\'acquisition*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('status', CheckboxType::class,[
                'label'    => 'J\'autorise KAAY DËKK IMMO s/c de la NGTS en cas de besoin à partager les données à caractére personnel
                contenues dans ce formulaire à tous les acteurs de l\'immobilier, les promoteurs et les autres services de l\Etat du Sénégal*',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DetailsCandidature::class,
        ]);
    }
}

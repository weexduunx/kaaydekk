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
                    'autofocus' => false,
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
                'autofocus' => false,
                ],
             
            ])
            ->add('beneficiaire_appui_ou_subvention',null,[
                'label'=>'Êtes-vous bénéficiaire d\'un fond d\'appui ou de subvention?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('agence', null,[
                'label'=>'De quelle agence avez-vous entendu ce projet ? *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'help' => 'Répondez cette question, elle est obligatoire!!!'
                
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
                'label'=>'Avez-Vous un Handicap*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('situation', null,[
                'label'=>'Êtes-vous ? *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('secteur', null,[
                'label'=>'Vous êtes dans quel secteur?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('type_de_contrat',null,[
                'label'=>'Et quel est votre type de contrat?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('salaire_mensuelle', ChoiceType::class,[
                'label'=>'Salaire Mensuel (en FCFA)*',
                'required'   => false,
                'choices'  => $sm = [
                    '100 000 - 250 000' => '100 000 - 250 000',
                    '251 000 - 350 000' => '251 000 - 350 000',
                    '351 000 - 500 000' => '351 000 - 500 000' ,
                    '501 000 - 700 000' => '501 000 - 700 000' ,
                    '701 000 +' => '701 000 +',
                ],
               'choice_attr' => function ($value, $key, $index) {
                    return [
                        'class' => 'form-check-inline',
                    ];
                },

                'data' => '100 000 - 250 000',
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new Assert\Choice(array_keys($sm)),
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
                'label'=>'Nom de l\'entreprise*',
                'required'   => false,
            ])
            ->add('revenu_mensuelle', ChoiceType::class,[
                'label'=>'Revenu Mensuel (en FCFA)*',
                'required'   => false,
                'choices'  => $sm = [
                    '100 000 - 250 000' => '100 000 - 250 000',
                    '251 000 - 350 000' => '251 000 - 350 000',
                    '351 000 - 500 000' => '351 000 - 500 000' ,
                    '501 000 - 700 000' => '501 000 - 700 000' ,
                    '701 000 +' => '701 000 +',
                ],
               'choice_attr' => function ($value, $key, $index) {
                    return [
                        'class' => 'form-check-inline',
                    ];
                },

                'data' => '100 000 - 250 000',
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new Assert\Choice(array_keys($sm)),
                ],

            ])
            ->add('color', ColorType::class, [
                'label' => 'Indiquer une couleur de votre choix, cliquer à l\'intérieur *',
                'required'   => true,
            ])
            ->add('type_de_logement', null,[
                'label'=>'Type de Logement*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'required'   => true,

            ])

            ->add('prenom_et_nom', TextType::class,[

                    'label'=>'Confirmer votre Nom et Prénom*',
                    'help' => 'Veuillez confirmer votre identité, en entrant votre nom et prénom, sinon votre inscription risque de ne pas être enregistrée.'
            ])
            ->add('mode_acquisition', null,[
                'label'=>'Mode d\'acquisition*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('status', CheckboxType::class,[
                'label'    => 'J\'autorise KAAY DËKK IMMO en cas de besoin à partager les données à caractére personnel
                contenues dans ce formulaire à tous les acteurs de l\'immobilier, les promoteurs et les autres services de l\'Etat du Sénégal*',
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

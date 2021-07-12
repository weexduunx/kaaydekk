<?php

namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'required'   => true,
                'label'=>'Nom *',
                'attr' => [
                    'autofocus' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('prenom', TextType::class, [
                'required'   => true,
                'label'=>'Prénom(s) *',
                'attr' => [
                    'autofocus' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('dateDeNaissance', DateType::class, [
                'label' => 'Date de Naissance *',
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            ->add('lieuDeNaissance', TextType::class, [
                'label' => 'Lieu de Naissance *',
            ])
            ->add('adresse', TextType::class, [
                'label'=>'Adresse'
            ])
            ->add('nin', NumberType::class,[
                'label' => 'Numéro d\'Identification Nationale (NIN) / Passeport *',
                'help' => 'Veuillez fournir des informations exactes, si elles s\'avérent fausse, l\'inscription est invalide. Merci!!!',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('tel', TelType::class, [
                'required' => true,
              'constraints' => [new Length(['min' => 9])],
            ])
            ->add('email', EmailType::class)
            ->add('nationalite', CountryType::class,[
                'label' => 'Pays d\'origine *',
                'help' => 'Cliquer sur le champs, pour choisir votre nationalité !!!',
            ])
            ->add('profession', TextType::class, [
                'label'=>'Profession *'
            ])
            ->add('situationMatrimoniale', ChoiceType::class,[
                'choices'  => $sm = [
                    'Célibataire' => 'Célibataire',
                    'Marié(e)' => 'Marié(e)',
                    'Divorcé(e)' => 'Divorcé(e)' ,
                    'Veuf(ve)' => 'Veuf(ve)' ,
                ],

               'choice_attr' => function ($value, $key, $index) {
                    return [
                        'class' => 'form-check-inline',
                    ];
                },

                'data' => 'Célibataire',
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Choice(array_keys($sm)),
                ],

            ])
            ->add('color', ColorType::class, [
                'label' => 'Choisissez une couleur',
                'help' => 'Le choix de la couleur est obligatoire. cliquer sur le champs svp et selectionner une couleur!!!'
            ])
            
            ->add('nomCooperative', TextType::class, [
                'required'   => false,
                'label'=>'Si Oui, donner le nom de la coopérative*',
                'attr' => [
                    'autofocus' => false,
                ],
               
            ])
            ->add('nbreDePersonneACharge', NumberType::class,[
                'label' => 'Nbre de personne à charge*',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('nomBanque', TextType::class, [
                'required'   => false,
                'label'=>'Si Oui, donner le nom de la banque*',
                'attr' => [
                'autofocus' => false,
                ],
             
            ])
            ->add('nomEntreprise', TextType::class, [
                'label'=>'Nom de l\'entreprise*',
                'required'   => false,
            ])
            ->add('revenuMensuel', ChoiceType::class,[
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
            ->add('salaireMensuel', ChoiceType::class,[
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
            ->add('activiteNonSalarie', TextType::class, [
                'label'=>'Votre Domaine d\'activité *',
                'required'   => false,
            ])
            ->add('lieuActiviteNonSalarie', TextType::class, [
                'label'=>'Lieu d\'activité *',
                'required'   => false,
            ])
            ->add('membreCooperative', null,[
                'label'=>'Êtes-vous membre d\'une coopérative?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
               ])
            ->add('compteBancaire', null,[
                'label'=>'Avez-vous un compte bancaire?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                
            ])
            ->add('beneficiaireAppui',null,[
                'label'=>'Êtes-vous bénéficiaire d\'un fond d\'appui ou de subvention?',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('logementActuel', null,[
                'label'=>'Statut',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('situationProfessionelle', null,[
                'label'=>'Êtes-vous ? *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('secteur', null,[
                'label'=>'Vous êtes dans quel secteur?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('typeDeContrat',null,[
                'label'=>'Et quel est votre type de contrat?*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('ville', null,[
                'placeholder'=>'Choisissez une ville',
                'label'=>'Selectionner votre ville si vous êtes de Sénégal*',
        ])
            ->add('typeDeLogement', null,[
                'label'=>'Type de Logement*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'required'   => true,

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
            ->add('moodeAcquisition', null,[
                'label'=>'Mode d\'acquisition*',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],

            ])
            ->add('sourceOuAgence', null,[
                'required'   => true,
                'label'=>'De quelle agence avez-vous entendu ce projet ? *',
                'placeholder'=>'cliquer ici',
                'attr' => ['class' => 'form-select text-muted'],
                'help' => 'Répondez cette question, elle est obligatoire!!!'
                
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
            'data_class' => Inscription::class,
        ]);
    }
}

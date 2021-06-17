<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;

class ClientFormType extends AbstractType
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
            ->add('adresse', TextType::class, [
                'label'=>'Adresse'
            ])
            ->add('numero_cin_ou_passeport', NumberType::class,[
                'label' => 'Numéro d\'Identification Nationale (NIN) / Passeport *',
                'help' => 'Veuillez fournir des informations exactes, si elles s\'avérent fausse, l\'inscription est invalide. Merci!!!',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('commentaire', TextareaType::class,[
                'label'=>'Commentaire',
                'required' => false,
                'attr' => ['class' => 'tinymce'],
                'required' => false,
            ])
            ->add('tel', TelType::class, [
                'required' => true,
              'constraints' => [new Length(['min' => 9])], 
            ])
            ->add('email', EmailType::class)
            ->add('date_de_naissance', DateType::class, [
                'label' => 'Date de Naissance *',
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            ->add('lieu_de_naissance', TextType::class, [
                'label' => 'Lieu de Naissance *',
            ])
            ->add('nationalite', CountryType::class,[
                'label' => 'Pays d\'origine *',
                'help' => 'Cliquer sur le champs, pour choisir votre nationalité !!!',
            ])
            ->add('profession', TextType::class, [
                'label'=>'Profession *'
            ])
            ->add('situation_matrimoniale', ChoiceType::class,[
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
            ->add('ville', null,[
            
                'label'=>'Selectionner votre ville si vous êtes de Sénégal*',
        ])

            ->add('status', CheckboxType::class, [
                'label'    => 'En cochant cette case, vous activez la prise en charge de votre dossier d\'inscription et acceptez nos conditions?',
                'required' => false,
            ])

            ->add('color', ColorType::class, [
                'label' => 'Choisissez une couleur',
                'help' => 'Le choix de la couleur est obligatoire. cliquer sur le champs svp et selectionner une couleur!!!'
            ]);
    }
    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}

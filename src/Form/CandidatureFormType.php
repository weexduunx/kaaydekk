<?php

namespace App\Form;

use App\Entity\DetailsCandidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CandidatureFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('membre_cooperative', ChoiceType::class,[
                'label'=>'Etes-vous membre d\'une coopérative?',
                'choices'  => $sm = [
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ],
                

               'label_attr'=> array(
                   'class' => 'radio-inline'
               ),

                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Choice(array_keys($sm)),
                ],

            ])
            ->add('nom_de_la_cooperative', TextType::class, [
                'required'   => true,
                'label'=>'Si Oui, donner le nom de la coopérative*',
                'attr' => [
                    'autofocus' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('nombre_de_personne_en_charge', NumberType::class,[
                'label' => 'Nbre de personne à charge*',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('compte_bancaire', ChoiceType::class,[
                'label'=>'Avez-vous un compte bancaire?',
                'choices'  => $sm = [
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ],
                

               'label_attr'=> array(
                   'class' => 'radio-inline'
               ),

               
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Choice(array_keys($sm)),
                ],

            ])
            ->add('nom_de_la_banque', TextType::class, [
                'required'   => true,
                'label'=>'Si Oui, donner le nom de la banque*',
                'attr' => [
                    'autofocus' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('nom_de_la_societe')
            ->add('revenu_mensuelle')
            ->add('salaire_mensuelle')
            ->add('label')
            ->add('color')
            ->add('nom')
            ->add('beneficiaire_appui_ou_subvention')
            ->add('logement_actuel')
            ->add('client')
            ->add('situation')
            ->add('secteur')
            ->add('type_de_contrat')
            ->add('type_de_logement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DetailsCandidature::class,
        ]);
    }
}

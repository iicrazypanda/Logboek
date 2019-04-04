<?php

namespace App\Form;

use App\Entity\Logboek;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogboekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('briefnr')
            ->add('datum')
            ->add('kubs')
            ->add('laadpunt')
            ->add('vertrektijd')
            ->add('eindpunt')
            ->add('evenement')
            ->add('chauffeur')
            ->add('truck')
            ->add('klant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Logboek::class,
        ]);
    }
}

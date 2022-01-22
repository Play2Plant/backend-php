<?php

namespace App\Form;

use App\Entity\LeafTracker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeafTrackerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('walletAddress')
            ->add('stepNumber')
            ->add('startDate')
            ->add('lastRecordDate')
            ->add('gpsLat')
            ->add('gpsLong')
            ->add('wifiRadar')
            ->add('ip')
            ->add('apiKey')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LeafTracker::class,
        ]);
    }
}

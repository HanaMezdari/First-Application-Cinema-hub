<?php

namespace App\Form;

use App\Entity\Film;
use App\Entity\User;
use App\Entity\Cinema;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nbr_ticket', NumberType::class,[

            'label'=>false
        ])
        ->add('film', EntityType::class,['class'=>Film::class,
             'choice_label'=>'nom',
            'label'=>'film'
        ])
       
        ->add('cinema', EntityType::class,['class'=>Cinema::class,
        'choice_label'=>'nom',
       'label'=>'cinema'
   ])

        ->add('submit', SubmitType::class,[
            'label'=> "payer",
            'attr' => [

                'class'=>'btn w-100 text-white btn-lg bg-dark',
            ]
        ])
        ->getForm();
    ;

        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}

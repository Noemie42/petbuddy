<?php

namespace App\Form;

use App\Entity\ContactMessage;
//use App\Entity\Users;
use App\Entity\Announces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('users', Users::class, [
                'class'=>Users::class,
                'choice_label' => 'id'
            ])
            ->add('message', TextareaType::class)
            //->add('contactAt')
            ->add( 'animalType', ChoiceType::class, [
            'choices' => [
                'Chien' => 'Dog',
                'Chat' => 'Cat',
                'Oiseau' => 'Bird'
            ],
        ])
            ->add('announces', Announces::class, [
            'class' => Announces::class,
            'choice_label' => 'id'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}

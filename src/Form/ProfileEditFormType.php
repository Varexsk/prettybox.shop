<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class,[
                'label' => 'Введи свое полное имя'
            ])
            ->add('phone', TextType::class, [
                'label' => 'Введие свой телефон'
            ])
            ->add('address', TextType::class, [
                'label' => 'Введите свой адрес'
            ])
            ->add('zipcode', IntegerType::class, [
                'label' => 'Введите свой индекс'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

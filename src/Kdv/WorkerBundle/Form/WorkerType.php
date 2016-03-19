<?php

namespace Kdv\WorkerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class WorkerType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstname')
                ->add('lastname')
                ->add('job')
                ->add('birthdate', 'date')
                ->add('birthdate', DateType::class, array(
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                ))
                ->add('picture',FileType::class)
                ->add('description')
                ->add('email')
                ->add('phone')
                ->add('address')
                ->add('zipcode')
                ->add('city')
                ->add('country')
                ->add('cv',FileType::class)
                ->add('isManager')
                ->add('regime',ChoiceType::class,['choices' => ['Travailleur non salarié' => 'self-employed','Salarié' => 'salaried']])
                ->add('salary')
                ->add('tjm')
                ->add('twitterUrl')
                ->add('linkedinUrl')
                ->add('viadeoUrl')
                ->add('githubUrl')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Kdv\WorkerBundle\Entity\Worker'
        ));
    }

}

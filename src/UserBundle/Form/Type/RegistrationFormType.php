<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('firstName', 'text', array('label'=>'Nom', 'required' => true))
            ->add('lastName', 'text', array('label' => 'Prénom', 'required' => true ))
            ->add('birthday', 'date', array('label' => 'Date de naissance', 'required' => true))
            ->add('adress', 'text', array('label' => 'Adresse', 'required' => false))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_registration';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'user_registration';
    }
}
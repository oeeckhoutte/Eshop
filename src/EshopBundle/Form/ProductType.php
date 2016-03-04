<?php
namespace EshopBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('name', TextType::class)
            ->add('price', NumberType::class)
            ->add('description', TextareaType::class)
            ->add('category', EntityType::class, array(
                'class' => 'EshopBundle\Entity\Category',
                'choice_label' => function($c){
                    return $c->getName();
                },
                'placeholder' => 'Choisir la catégorie',
            ))
            ->add('save', SubmitType::class, array('label' => 'Create Product'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EshopBundle\Entity\Product',
        ));
    }
}

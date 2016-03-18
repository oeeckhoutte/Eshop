<?php
//namespace EshopBundle\Form;
//
//use Symfony\Component\Form\Extension\Core\Type\FileType;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\AbstractType;
//
//class MediaType extends AbstractType {
//
//    /**
//     * @param FormBuilderInterface $builder
//     * @param array $options
//     */
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('image', FileType::class);
//    }
//
//    /**
//     * @param OptionsResolver $resolver
//     */
//    public function configureOptions(OptionsResolver $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => 'EshopBundle\Entity\Media',
//        ));
//    }
//}
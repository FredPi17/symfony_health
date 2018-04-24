<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 24/04/18
 * Time: 10:40
 */

namespace AppBundle\Form;


use AppBundle\Entity\categories;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('nom', TextType::class)
           ->add('description_short', TextareaType::class)
           ->add('description_long', TextareaType::class)
           ->add('imageFile', FileType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => categories::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }
}
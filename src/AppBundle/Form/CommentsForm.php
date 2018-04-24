<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 24/04/18
 * Time: 14:53
 */

namespace AppBundle\Form;


use AppBundle\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Comments::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_comments';
    }
}
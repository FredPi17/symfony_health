<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 27/04/18
 * Time: 14:01
 */

namespace AppBundle\Form;
use AppBundle\Entity\Article;
use AppBundle\Entity\categories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ArticleForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('contenu', TextareaType::class)
            ->add('imageFile', FileType::class)
            ->add('category', EntityType::class, [
                'class'=>categories::class,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Article::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_article';
    }
}
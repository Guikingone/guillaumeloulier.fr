<?php

/*
 * This file is part of the guillaumeloulier project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@hotmail.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form\Type\Add;

use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'required' => true,
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => 10, 'max' => 255)),
                ),
            ))
            ->add('content', TextareaType::class, array(
                'required' => true,
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => 20)),
                ),
            ))
            ->add('category', EntityType::class, array(
                'required' => true,
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'title',
                'constraints' => array(
                    new NotBlank(),
                ),
            ))
            ->add('tags', CollectionType::class, array(
                'entry_type' => TagsType::class,
                'allow_add' => true,
                'required' => false,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article',
        ));
    }

    public function getName()
    {
        return 'app_article_type';
    }
}

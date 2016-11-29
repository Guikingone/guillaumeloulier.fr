<?php

/*
 * This file is part of the guillaumeloulier project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@hotmail.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Service;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\Add\ArticleType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMInvalidArgumentException;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;

/**
 * Class Back
 *
 * @package AppBundle\Service
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Back
{
    /**
     * @var EntityManager
     */
    private $doctrine;

    /**
     * @var FormFactory
     */
    private $form;

    /**
     * Back constructor.
     *
     * @param EntityManager $doctrine
     * @param FormFactory   $form
     */
    public function __construct(EntityManager $doctrine, FormFactory $form)
    {
        $this->doctrine = $doctrine;
        $this->form = $form;
    }

    /**
     * @return \AppBundle\Entity\Article[]|array
     */
    public function getArticles()
    {
        return $this->doctrine->getRepository('AppBundle:Article')->findAll();
    }

    /**
     * Allow to create a new Article $article.
     *
     * @param Request $request
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function addArticle(Request $request)
    {
        try {
            $article = new Article();

            $form = $this->form->create(ArticleType::class, $article);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->doctrine->persist($article);
                $this->doctrine->flush();
            }
        } catch (InvalidOptionsException $optionsException) {
            echo 'Erreur détectée : '.$optionsException->getMessage();
        } catch (ORMInvalidArgumentException $argumentException) {
            echo 'Erreur détectée : '.$argumentException->getMessage();
        } catch (OptimisticLockException $lockException) {
            echo 'Erreur détectée : '.$lockException->getMessage();
        } finally {
            return $form;
        }
    }
}

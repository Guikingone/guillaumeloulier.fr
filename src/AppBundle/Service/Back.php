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

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactory;

/**
 * Class Back.
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
}

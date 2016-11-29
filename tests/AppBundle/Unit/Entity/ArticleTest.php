<?php

namespace tests\AppBundle\Unit\Entity;

use AppBundle\Entity\Article;

/**
 * Class ArticleTest
 *
 * @package tests\AppBundle\Unit\Entity
 *
 * @author Guillaume Loulier <contact@guillaume.loulier.fr>
 */
class ArticleTest
{
    /**
     * Test if the Entity can be hydrated.
     */
    public function testArticleBoot()
    {
        $article = new Article();
        $article->setAuthor('Guikingone');
        $article->setDatePublication(new \DateTime());
        $article->setContent('hello World !');
    }
}
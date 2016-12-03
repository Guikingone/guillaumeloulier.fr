<?php

namespace tests\AppBundle\Unit\Entity;

use AppBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * Class ArticleTest.
 *
 *
 * @author Guillaume Loulier <contact@guillaume.loulier.fr>
 */
class ArticleTest extends TestCase
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
        static::assertEquals('Guikingone', $article->getAuthor());
        static::assertEquals('hello World !', $article->getContent());
    }
}

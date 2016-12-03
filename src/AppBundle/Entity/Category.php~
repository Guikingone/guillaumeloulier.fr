<?php

/*
 * This file is part of the guillaumeloulier project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@hotmail.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AbstractBundle\Model\CategoryInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Category
 *
 * @package AppBundle\Entity
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Category implements CategoryInterface
{
    private $id;
    private $title;
    private $article;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->article = new ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Category
     */
    public function addArticle(Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article.
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(Article $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;


    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Article $tag
     *
     * @return Category
     */
    public function addTag(Article $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Article $tag
     */
    public function removeTag(Article $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}

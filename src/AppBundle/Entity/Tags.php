<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AbstractBundle\Model\TagsInterface;

/**
 * Class Tags
 *
 * @package AppBundle\Entity
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Tags implements TagsInterface
{
    private $id;
    private $title;
    private $article;

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
     * @return Tags
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
     * Set article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Tags
     */
    public function setArticle(Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * @var \AppBundle\Entity\Article
     */
    private $category;


    /**
     * Set category
     *
     * @param \AppBundle\Entity\Article $category
     *
     * @return Tags
     */
    public function setCategory(Article $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Article
     */
    public function getCategory()
    {
        return $this->category;
    }
}

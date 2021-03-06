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

use AbstractBundle\Model\ArticleInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Article.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Article implements ArticleInterface
{
    private $id;
    private $title;
    private $author;
    private $datePublication;
    private $content;
    private $category;
    private $tags;
    private $commentaries;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->commentaries = new ArrayCollection();
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
     * @return Article
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
     * Set author.
     *
     * @param string $author
     *
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = (string) $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set datePublication.
     *
     * @param \DateTime $datePublication
     *
     * @return Article
     */
    public function setDatePublication($datePublication)
    {
        if (null === $datePublication) {
            try {
                $datePublication = new \DateTime();
            } catch (\Exception $e) {
                echo 'Erreur détectée : '.$e->getMessage();
            } finally {
                $this->datePublication = $datePublication;
            }
        }

        return $this;
    }

    /**
     * Get datePublication.
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add tag.
     *
     * @param \AppBundle\Entity\Tags $tag
     *
     * @return Article
     */
    public function addTag(Tags $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag.
     *
     * @param \AppBundle\Entity\Tags $tag
     */
    public function removeTag(Tags $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set category.
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add commentary
     *
     * @param \AppBundle\Entity\Commentary $commentary
     *
     * @return Article
     */
    public function addCommentary(Commentary $commentary)
    {
        $this->commentaries[] = $commentary;

        return $this;
    }

    /**
     * Remove commentary
     *
     * @param \AppBundle\Entity\Commentary $commentary
     */
    public function removeCommentary(Commentary $commentary)
    {
        $this->commentaries->removeElement($commentary);
    }

    /**
     * Get commentaries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaries()
    {
        return $this->commentaries;
    }
}

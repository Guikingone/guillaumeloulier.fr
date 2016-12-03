<?php

namespace AppBundle\Entity;

use AbstractBundle\Model\CommentaryInterface;

/**
 * Class Commentary
 *
 * @package AppBundle\Entity
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class Commentary implements CommentaryInterface
{
    private $id;
    private $author;
    private $date;
    private $content;
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
     * Set author.
     *
     * @param string $author
     *
     * @return Commentary
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Commentary
     */
    public function setDate($date)
    {
        if (null === $date) {
            try {
                $date = new \DateTime();
            } catch (\Exception $e) {
                echo 'Erreur détectée : '.$e->getMessage();
            } finally {
                $this->date = $date;
            }
        }

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Commentary
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
     * Set article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Commentary
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
}

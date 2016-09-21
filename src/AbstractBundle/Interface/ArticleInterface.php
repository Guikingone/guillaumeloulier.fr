<?php
/*
 * This file is part of the $PROJECT project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@hotmail.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace \Interface;

/**
 * Interface ArticleInterface
 * @package AppBundle
 */
interface ArticleInterface
{
    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @return mixed
     */
    public function getAuthor();

    /**
     * @return mixed
     */
    public function getDatePublication();

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * @return mixed
     */
    public function getCategory();

    /**
     * @return mixed
     */
    public function getTag();

    /**
     * @return mixed
     */
    public function getCommentary();

    /**
     * @param $title
     * @return mixed
     */
    public function setTitle($title);

    /**
     * @param $author
     * @return mixed
     */
    public function setAuthor($author);

    /**
     * @param $datePublication
     * @return mixed
     */
    public function setDatePublication($datePublication);

    /**
     * @param $content
     * @return mixed
     */
    public function setContent($content);

    /**
     * @param $category
     * @return mixed
     */
    public function setCategory($category);

    /**
     * @param \AppBundle\Entity\Tags $tags
     * @return mixed
     */
    public function addTag(\AppBundle\Entity\Tags $tags);

    /**
     * @param \AppBundle\Entity\tags $tags
     * @return mixed
     */
    public function removeTag(\AppBundle\Entity\Tags $tags);

    /**
     * @param \AppBundle\Entity\Commentary $commentary
     * @return mixed
     */
    public function addCommentary(\AppBundle\Entity\Commentary $commentary);

    /**
     * @param \AppBundle\Entity\Commentary $commentary
     * @return mixed
     */
    public function removeCommentary(\AppBundle\Entity\Commentary $commentary);
}
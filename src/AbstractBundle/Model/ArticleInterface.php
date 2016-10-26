<?php
/*
 * This file is part of the guillaumeloulier project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@hotmail.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbstractBundle\Model;

/**
 * Interface ArticleInterface.
 */
interface ArticleInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @return \DateTime
     */
    public function getDatePublication();

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * @param string $title
     */
    public function setTitle($title);

    /**
     * @param string $author
     */
    public function setAuthor($author);

    /**
     * @param \DateTime $datePublication
     */
    public function setDatePublication($datePublication);

    /**
     * @param $content
     */
    public function setContent($content);
}

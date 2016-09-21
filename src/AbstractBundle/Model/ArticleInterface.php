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
     * @param $title
     *
     * @return mixed
     */
    public function setTitle($title);

    /**
     * @param $author
     *
     * @return mixed
     */
    public function setAuthor($author);

    /**
     * @param $datePublication
     *
     * @return mixed
     */
    public function setDatePublication($datePublication);

    /**
     * @param $content
     *
     * @return mixed
     */
    public function setContent($content);
}

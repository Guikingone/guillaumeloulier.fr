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
 * Interface CommentaryInterface.
 */
interface CommentaryInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getAuthor();

    /**
     * @return mixed
     */
    public function getDate();

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * @return mixed
     */
    public function setAuthor($author);

    /**
     * @return mixed
     */
    public function setDate($date);

    /**
     * @return mixed
     */
    public function setContent($content);
}

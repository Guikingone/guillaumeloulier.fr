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
 * Interface CategoryInterface.
 */
interface CategoryInterface
{
    /**
     * @param $title
     *
     * @return mixed
     */
    public function setTitle($title);

    /**
     * @return mixed
     */
    public function getTitle();
}

<?php
/**
 * This file is part of the php-ddd project.
 *
 * (c) Yannick Voyer <star.yvoyer@gmail.com> (http://github.com/yvoyer)
 */

namespace Example\Domain\Sale\DomainModel\Identity;

use Example\Domain\Common\DomainModel\Identity\Identity;
use Example\Domain\Sale\DomainModel\Meal;

final class MealId implements Identity
{
    /**
     * @var mixed
     */
    private $id;

    /**
     * @param mixed $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEntityClass()
    {
        return Meal::class;
    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->id;
    }
}

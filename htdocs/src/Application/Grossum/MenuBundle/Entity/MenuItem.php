<?php

namespace Application\Grossum\MenuBundle\Entity;

use Grossum\MenuBundle\Entity\BaseMenuItem as BaseMenuItem;

class MenuItem extends BaseMenuItem
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}

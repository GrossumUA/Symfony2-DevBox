<?php

namespace Application\Grossum\StaticPageBundle\Entity;

use Grossum\StaticPageBundle\Entity\BaseStaticPage as BaseStaticPage;

class StaticPage extends BaseStaticPage
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

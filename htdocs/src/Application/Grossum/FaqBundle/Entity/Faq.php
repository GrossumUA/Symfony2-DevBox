<?php

namespace Application\Grossum\FaqBundle\Entity;

use Grossum\FaqBundle\Entity\BaseFaq as BaseFaq;

class Faq extends BaseFaq
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

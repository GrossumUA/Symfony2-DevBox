<?php

namespace Application\Grossum\StaticPageBundle\Entity\Repository;

use Grossum\StaticPageBundle\Entity\Repository\BaseStaticPageRepository;

use Application\Grossum\StaticPageBundle\Entity\StaticPage;

class StaticPageRepository extends BaseStaticPageRepository
{
    /**
     * @return StaticPage[]
     */
    public function findNotRootStaticPages()
    {
        $qb = $this->createQueryBuilder('sp');

        return $this
            ->createQueryBuilder('sp')
            ->where($qb->expr()->isNotNull('sp.parent'))
            ->getQuery()
            ->getResult();
    }
}

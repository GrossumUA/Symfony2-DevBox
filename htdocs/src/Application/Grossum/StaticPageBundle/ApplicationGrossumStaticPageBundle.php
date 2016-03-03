<?php

namespace Application\Grossum\StaticPageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationGrossumStaticPageBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'GrossumStaticPageBundle';
    }
}

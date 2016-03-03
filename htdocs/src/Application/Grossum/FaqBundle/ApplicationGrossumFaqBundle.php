<?php

namespace Application\Grossum\FaqBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationGrossumFaqBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'GrossumFaqBundle';
    }
}

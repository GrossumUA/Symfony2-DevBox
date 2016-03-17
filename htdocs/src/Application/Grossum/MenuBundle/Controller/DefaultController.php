<?php

namespace Application\Grossum\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        //TODO: ONLY FOR TESTING

        return $this->render('ApplicationGrossumMenuBundle:Default:index.html.twig');
    }
}

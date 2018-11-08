<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 *
 */
class WebSiteController extends Controller
{
    
     /**
     * Lists all user entities.
     *
     * @Route("/", name="web_index")
     * @Method("GET")
     */
    public function webAction()
    {

        return $this->render(
                    'webSite/index.html.twig'
        );
    }

    
}
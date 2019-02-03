<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actividad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Actividad controller.
 *
 * @Route("menu")
 */
class menuController extends Controller
{
    /**
     * Lists all actividad entities.
     *
     * @Route("/fondos", name="menu_fondos")
     * @Method("GET")
     */
    public function fondosAction()
    {
        return $this->render('menu/menuFondos.html.twig');
    }
    
    
    /**
     * Lists all actividad entities.
     *
     * @Route("/catalogos", name="menu_catalogos")
     * @Method("GET")
     */
    public function catalogosAction()
    {
        return $this->render('menu/menuCatalogos.html.twig');
    }
    
    
    /**
     * Lists all actividad entities.
     *
     * @Route("/solicitud", name="menu_solicitud")
     * @Method("GET")
     */
    public function solicitudAction()
    {
        return $this->render('menu/menuSolicitud.html.twig');
    }

}
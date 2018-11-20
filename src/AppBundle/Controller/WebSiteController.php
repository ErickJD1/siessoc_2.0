<?php

namespace AppBundle\Controller;

use SalexUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 *
 */
class WebSiteController extends Controller {

    /**
     *
     *
     * @Route("/", name="web_index")
     * @Method("GET")
     */
    public function webAction() {

        return $this->render(
                        'webSite/index.html.twig'
        );
    }

    /**
     * Lists all user entities.
     *
     * @Route("/nosotros", name="web_nosotros")
     * @Method("GET")
     */
    public function nosotrosAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $pagination = $em->getRepository('SalexUserBundle:User')->findAllTeam();
        return $this->render('webSite/nosotros.html.twig', array('user' => $pagination));
    }

    /**
     *
     *
     * @Route("/history", name="web_history")
     * @Method("GET")
     */
    public function historyAction() {

        return $this->render(
                        'webSite/history.html.twig'
        );
    }
    
        /**
     *
     *
     * @Route("/calendar", name="web_history")
     * @Method("GET")
     */
        public function calendarAction() {

        return $this->render(
                        'webSite/bares.html.twig'
        );
    }


}

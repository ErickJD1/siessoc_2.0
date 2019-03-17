<?php

namespace AppBundle\Controller;

use SalexUserBundle\Entity\User;
use AppBundle\Entity\Contacto;
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
     * 
     *
     * @Route("/contacto", name="web_contacto")
     * @Method({"GET", "POST"})
     */
    public function contactoAction(Request $request)
    {
        $contacto = new Contacto();
        $form = $this->createForm('AppBundle\Form\ContactoType', $contacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $time = new \DateTime();
            $contacto->setFecha($time);
            $em->persist($contacto);
            $em->flush($contacto);

            $this->addFlash('success', '¡Consulta enviada exitosamente!');
            return $this->redirectToRoute('web_contacto');
        }

        return $this->render('webSite/contacto.html.twig', array(
            'contacto' => $contacto,
            'form' => $form->createView(),
        ));
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
     * @Route("/calendar", name="web_calendar")
     * @Method("GET")
     */
        public function calendarAction() {

        return $this->render(
                        'webSite/bares.html.twig'
        );
    }


}

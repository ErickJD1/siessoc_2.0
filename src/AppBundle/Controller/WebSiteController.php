<?php

namespace AppBundle\Controller;

use SalexUserBundle\Entity\User;
use AppBundle\Entity\Contacto;
use AppBundle\Entity\Publicacioncontenido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Mailer\Mailer;


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
        /*    $adminusers = $em->getRepository('SalexUserBundle:User')->findAdminTeam();

           foreach($adminusers as $e)
             {
              $correo = $e->getEmail();

                    $message = \Swift_Message::newInstance()
                        ->setSubject('¡Nueva consulta, proyecto de becas ESSOC!')
                        ->setFrom('test@mail.com')
                        ->setTo($correo)
                        ->setBody(
                        $this->renderView(
                                'Emails/nuevoContacto.html.twig',['nombre' => $form->get('nombre')->getData() , 'correo' => $form->get('correo')->getData() , 'asunto' => $form->get('asunto')->getData(), 'mensaje' => $form->get('mensaje')->getData()]
                        ), 'text/html'
                );
                $this->get('mailer')->send($message);
             } */
  
        $this->get('ras_flash_alert.alert_reporter')->addError("Access denied");

        //    $this->addFlash('success', '¡Consulta enviada exitosamente!');
            
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
     * Lists all user entities.
     *
     * @Route("/publicaciones", name="web_publicaciones")
     * @Method("GET")
     */
    public function publicacionesAction(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
                
        $query = $entityManager->createQuery(
         'SELECT pc
           FROM AppBundle:Publicacioncontenido pc where pc.estadocontenido = 1
           order by pc.fechacontenido desc');
        
        $publicaciones= $query->getResult();
        
        $query1= $entityManager->createQuery(
         'SELECT pc
           FROM AppBundle:Publicacioncontenido pc where pc.estadocontenido = 1
           order by pc.fechacontenido desc');
         $query1->setMaxResults(1);
         $first_id= $query1->getResult();
        return $this->render('webSite/publicaciones.html.twig', array('publicaciones' => $publicaciones, 'first_id' => $first_id));
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
     * @Route("/calendario", name="web_calendar")
     * @Method("GET")
     */
        public function calendarAction() {

        return $this->render(
                        'webSite/calendario.html.twig'
        );
    }


}

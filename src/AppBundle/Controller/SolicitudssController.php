<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Solicitudss;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Solicitudss controller.
 *
 * @Route("servicio_social")
 */
class SolicitudssController extends Controller
{
    /**
     * Lists all solicitudss entities.
     *
     * @Route("/", name="servicio_social_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $solicitudsses = $em->getRepository('AppBundle:Solicitudss')->findAll();

        return $this->render('solicitudss/index.html.twig', array(
            'solicitudsses' => $solicitudsses,
        ));
    }

    /**
     * Creates a new solicitudss entity.
     *
     * @Route("/new", name="servicio_social_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $solicitudss = new Solicitudss();
        $form = $this->createForm('AppBundle\Form\SolicitudssType', $solicitudss);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitudss);
            $em->flush($solicitudss);

            return $this->redirectToRoute('servicio_social_show', array('id' => $solicitudss->getIdsss()));
        }

        return $this->render('solicitudss/new.html.twig', array(
            'solicitudss' => $solicitudss,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudss entity.
     *
     * @Route("/{id}", name="servicio_social_show")
     * @Method("GET")
     */
    public function showAction(Solicitudss $solicitudss)
    {
        $deleteForm = $this->createDeleteForm($solicitudss);

        return $this->render('solicitudss/show.html.twig', array(
            'solicitudss' => $solicitudss,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing solicitudss entity.
     *
     * @Route("/{id}/edit", name="servicio_social_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Solicitudss $solicitudss)
    {
        $deleteForm = $this->createDeleteForm($solicitudss);
        $editForm = $this->createForm('AppBundle\Form\SolicitudssType', $solicitudss);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('servicio_social_edit', array('id' => $solicitudss->getIdsss()));
        }

        return $this->render('solicitudss/edit.html.twig', array(
            'solicitudss' => $solicitudss,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a solicitudss entity.
     *
     * @Route("/{id}", name="servicio_social_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Solicitudss $solicitudss)
    {
        $form = $this->createDeleteForm($solicitudss);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($solicitudss);
            $em->flush($solicitudss);
        }

        return $this->redirectToRoute('servicio_social_index');
    }

    /**
     * Creates a form to delete a solicitudss entity.
     *
     * @param Solicitudss $solicitudss The solicitudss entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Solicitudss $solicitudss)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('servicio_social_delete', array('id' => $solicitudss->getIdsss())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

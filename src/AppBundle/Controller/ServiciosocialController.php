<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Serviciosocial;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Serviciosocial controller.
 *
 * @Route("serviciosocial")
 */
class ServiciosocialController extends Controller
{
    /**
     * Lists all serviciosocial entities.
     *
     * @Route("/", name="serviciosocial_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $serviciosocials = $em->getRepository('AppBundle:Serviciosocial')->findAll();

        return $this->render('serviciosocial/index.html.twig', array(
            'serviciosocials' => $serviciosocials,
        ));
    }

    /**
     * Creates a new serviciosocial entity.
     *
     * @Route("/new", name="serviciosocial_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $serviciosocial = new Serviciosocial();
        $form = $this->createForm('AppBundle\Form\ServiciosocialType', $serviciosocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serviciosocial);
            $em->flush($serviciosocial);

            return $this->redirectToRoute('serviciosocial_show', array('id' => $serviciosocial->getIdServiciosocial()));
        }

        return $this->render('serviciosocial/new.html.twig', array(
            'serviciosocial' => $serviciosocial,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a serviciosocial entity.
     *
     * @Route("/{id}", name="serviciosocial_show")
     * @Method("GET")
     */
    public function showAction(Serviciosocial $serviciosocial)
    {
        $deleteForm = $this->createDeleteForm($serviciosocial);

        return $this->render('serviciosocial/show.html.twig', array(
            'serviciosocial' => $serviciosocial,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing serviciosocial entity.
     *
     * @Route("/{id}/edit", name="serviciosocial_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Serviciosocial $serviciosocial)
    {
        $deleteForm = $this->createDeleteForm($serviciosocial);
        $editForm = $this->createForm('AppBundle\Form\ServiciosocialType', $serviciosocial);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('serviciosocial_edit', array('id' => $serviciosocial->getId()));
        }

        return $this->render('serviciosocial/edit.html.twig', array(
            'serviciosocial' => $serviciosocial,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a serviciosocial entity.
     *
     * @Route("/{id}", name="serviciosocial_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Serviciosocial $serviciosocial)
    {
        $form = $this->createDeleteForm($serviciosocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serviciosocial);
            $em->flush($serviciosocial);
        }

        return $this->redirectToRoute('serviciosocial_index');
    }

    /**
     * Creates a form to delete a serviciosocial entity.
     *
     * @param Serviciosocial $serviciosocial The serviciosocial entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serviciosocial $serviciosocial)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('serviciosocial_delete', array('id' => $serviciosocial->getIdServiciosocial())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

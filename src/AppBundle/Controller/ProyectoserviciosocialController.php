<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Proyectoserviciosocial;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Proyectoserviciosocial controller.
 *
 * @Route("proyectoserviciosocial")
 */
class ProyectoserviciosocialController extends Controller
{
    /**
     * Lists all proyectoserviciosocial entities.
     *
     * @Route("/", name="proyectoserviciosocial_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proyectoserviciosocials = $em->getRepository('AppBundle:Proyectoserviciosocial')->findAll();

        return $this->render('proyectoserviciosocial/index.html.twig', array(
            'proyectoserviciosocials' => $proyectoserviciosocials,
        ));
    }

    /**
     * Creates a new proyectoserviciosocial entity.
     *
     * @Route("/new", name="proyectoserviciosocial_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $proyectoserviciosocial = new Proyectoserviciosocial();
        $form = $this->createForm('AppBundle\Form\ProyectoserviciosocialType', $proyectoserviciosocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proyectoserviciosocial);
            $em->flush($proyectoserviciosocial);
            $this->addFlash('success','Proyecto ingresado correctamente!');
            return $this->redirectToRoute('proyectoserviciosocial_index');
        }

        return $this->render('proyectoserviciosocial/new.html.twig', array(
            'proyectoserviciosocial' => $proyectoserviciosocial,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a proyectoserviciosocial entity.
     *
     * @Route("/{id}", name="proyectoserviciosocial_show")
     * @Method("GET")
     */
    public function showAction(Proyectoserviciosocial $proyectoserviciosocial)
    {
        $deleteForm = $this->createDeleteForm($proyectoserviciosocial);

        return $this->render('proyectoserviciosocial/show.html.twig', array(
            'proyectoserviciosocial' => $proyectoserviciosocial,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing proyectoserviciosocial entity.
     *
     * @Route("/{id}/edit", name="proyectoserviciosocial_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Proyectoserviciosocial $proyectoserviciosocial)
    {
        $deleteForm = $this->createDeleteForm($proyectoserviciosocial);
        $editForm = $this->createForm('AppBundle\Form\ProyectoserviciosocialType', $proyectoserviciosocial);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proyectoserviciosocial_edit', array('id' => $proyectoserviciosocial->getId()));
        }

        return $this->render('proyectoserviciosocial/edit.html.twig', array(
            'proyectoserviciosocial' => $proyectoserviciosocial,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a proyectoserviciosocial entity.
     *
     * @Route("/{id}", name="proyectoserviciosocial_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proyectoserviciosocial $proyectoserviciosocial)
    {
        $form = $this->createDeleteForm($proyectoserviciosocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proyectoserviciosocial);
            $em->flush($proyectoserviciosocial);
        }

        return $this->redirectToRoute('proyectoserviciosocial_index');
    }

    /**
     * Creates a form to delete a proyectoserviciosocial entity.
     *
     * @param Proyectoserviciosocial $proyectoserviciosocial The proyectoserviciosocial entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proyectoserviciosocial $proyectoserviciosocial)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proyectoserviciosocial_delete', array('id' => $proyectoserviciosocial->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

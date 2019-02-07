<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pagocolaboracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pagocolaboracion controller.
 *
 * @Route("pagocolaboracion")
 */
class PagocolaboracionController extends Controller
{
    /**
     * Lists all pagocolaboracion entities.
     *
     * @Route("/", name="pagocolaboracion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pagocolaboracions = $em->getRepository('AppBundle:Pagocolaboracion')->findAll();

        return $this->render('pagocolaboracion/index.html.twig', array(
            'pagocolaboracions' => $pagocolaboracions,
        ));
    }

    /**
     * Creates a new pagocolaboracion entity.
     *
     * @Route("/new", name="pagocolaboracion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pagocolaboracion = new Pagocolaboracion();
        $form = $this->createForm('AppBundle\Form\PagocolaboracionType', $pagocolaboracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pagocolaboracion);
            $em->flush($pagocolaboracion);

            return $this->redirectToRoute('pagocolaboracion_show', array('id' => $pagocolaboracion->getId()));
        }

        return $this->render('pagocolaboracion/new.html.twig', array(
            'pagocolaboracion' => $pagocolaboracion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pagocolaboracion entity.
     *
     * @Route("/{id}", name="pagocolaboracion_show")
     * @Method("GET")
     */
    public function showAction(Pagocolaboracion $pagocolaboracion)
    {
        $deleteForm = $this->createDeleteForm($pagocolaboracion);

        return $this->render('pagocolaboracion/show.html.twig', array(
            'pagocolaboracion' => $pagocolaboracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pagocolaboracion entity.
     *
     * @Route("/{id}/edit", name="pagocolaboracion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pagocolaboracion $pagocolaboracion)
    {
        $deleteForm = $this->createDeleteForm($pagocolaboracion);
        $editForm = $this->createForm('AppBundle\Form\PagocolaboracionType', $pagocolaboracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pagocolaboracion_edit', array('id' => $pagocolaboracion->getId()));
        }

        return $this->render('pagocolaboracion/edit.html.twig', array(
            'pagocolaboracion' => $pagocolaboracion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pagocolaboracion entity.
     *
     * @Route("/{id}", name="pagocolaboracion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pagocolaboracion $pagocolaboracion)
    {
        $form = $this->createDeleteForm($pagocolaboracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pagocolaboracion);
            $em->flush($pagocolaboracion);
        }

        return $this->redirectToRoute('pagocolaboracion_index');
    }

    /**
     * Creates a form to delete a pagocolaboracion entity.
     *
     * @param Pagocolaboracion $pagocolaboracion The pagocolaboracion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pagocolaboracion $pagocolaboracion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pagocolaboracion_delete', array('id' => $pagocolaboracion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tipotransaccion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tipotransaccion controller.
 *
 * @Route("tipotransaccion")
 */
class TipotransaccionController extends Controller
{
    /**
     * Lists all tipotransaccion entities.
     *
     * @Route("/", name="tipotransaccion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipotransaccions = $em->getRepository('AppBundle:Tipotransaccion')->findAll();

        return $this->render('tipotransaccion/Tipotransaccionindex.html.twig', array(
            'tipotransaccions' => $tipotransaccions,
        ));
    }

    /**
     * Creates a new tipotransaccion entity.
     *
     * @Route("/new", name="tipotransaccion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipotransaccion = new Tipotransaccion();
        $form = $this->createForm('AppBundle\Form\TipotransaccionType', $tipotransaccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipotransaccion);
            $em->flush($tipotransaccion);

            $this->addFlash('success', 'Transaccion Creada Exitosamente!');
            return $this->redirectToRoute('tipotransaccion_index');
        }

        return $this->render('tipotransaccion/Tipotransaccionnew.html.twig', array(
            'tipotransaccion' => $tipotransaccion,
            'form' => $form->createView(),
        ));
    }

    
      /**
     * Finds and displays a tipotransaccion entity.
     *
     * @Route("/{id}", name="tipotransaccion_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Tipotransaccion $tipotransaccion)
    {

        $deleteForm = $this->createDeleteForm($tipotransaccion);

        return $this->render('tipotransaccion/Tipotransaccionshowdelete.html.twig', array(
            'tipotransaccion' => $tipotransaccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Finds and displays a tipotransaccion entity.
     *
     * @Route("/{id}", name="tipotransaccion_show")
     * @Method("GET")
     */
    public function showAction(Tipotransaccion $tipotransaccion)
    {
        $deleteForm = $this->createDeleteForm($tipotransaccion);

        return $this->render('tipotransaccion/Tipotransaccionshow.html.twig', array(
            'tipotransaccion' => $tipotransaccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipotransaccion entity.
     *
     * @Route("/{id}/edit", name="tipotransaccion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipotransaccion $tipotransaccion)
    {
        $deleteForm = $this->createDeleteForm($tipotransaccion);
        $editForm = $this->createForm('AppBundle\Form\TipotransaccionType', $tipotransaccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Modificacion Exitosa!');
            return $this->redirectToRoute('tipotransaccion_index');
        }

        return $this->render('tipotransaccion/Tipotransaccionedit.html.twig', array(
            'tipotransaccion' => $tipotransaccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipotransaccion entity.
     *
     * @Route("/{id}", name="tipotransaccion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipotransaccion $tipotransaccion)
    {
        $form = $this->createDeleteForm($tipotransaccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipotransaccion);
            $em->flush($tipotransaccion);

            $this->addFlash('success', 'Transaccion eliminada con exito!');
            return $this->redirectToRoute('tipotransaccion_index');
        }

        return $this->redirectToRoute('tipotransaccion_index');
    }

    /**
     * Creates a form to delete a tipotransaccion entity.
     *
     * @param Tipotransaccion $tipotransaccion The tipotransaccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipotransaccion $tipotransaccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipotransaccion_delete', array('id' => $tipotransaccion->getIdtipotransaccion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movimientoinventario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Movimientoinventario controller.
 *
 * @Route("movimientoinventario")
 */
class MovimientoinventarioController extends Controller
{
    /**
     * Lists all movimientoinventario entities.
     *
     * @Route("/", name="movimientoinventario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $movimientoinventarios = $em->getRepository('AppBundle:Movimientoinventario')->findAll();

        return $this->render('movimientoinventario/index.html.twig', array(
            'movimientoinventarios' => $movimientoinventarios,
        ));
    }

    /**
     * Creates a new movimientoinventario entity.
     *
     * @Route("/new", name="movimientoinventario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $movimientoinventario = new Movimientoinventario();
        $form = $this->createForm('AppBundle\Form\MovimientoinventarioType', $movimientoinventario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimientoinventario);
            $em->flush($movimientoinventario);

            return $this->redirectToRoute('movimientoinventario_show', array('id' => $movimientoinventario->getId()));
        }

        return $this->render('movimientoinventario/new.html.twig', array(
            'movimientoinventario' => $movimientoinventario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a movimientoinventario entity.
     *
     * @Route("/{id}", name="movimientoinventario_show")
     * @Method("GET")
     */
    public function showAction(Movimientoinventario $movimientoinventario)
    {
        $deleteForm = $this->createDeleteForm($movimientoinventario);

        return $this->render('movimientoinventario/show.html.twig', array(
            'movimientoinventario' => $movimientoinventario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing movimientoinventario entity.
     *
     * @Route("/{id}/edit", name="movimientoinventario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Movimientoinventario $movimientoinventario)
    {
        $deleteForm = $this->createDeleteForm($movimientoinventario);
        $editForm = $this->createForm('AppBundle\Form\MovimientoinventarioType', $movimientoinventario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimientoinventario_edit', array('id' => $movimientoinventario->getId()));
        }

        return $this->render('movimientoinventario/edit.html.twig', array(
            'movimientoinventario' => $movimientoinventario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a movimientoinventario entity.
     *
     * @Route("/{id}", name="movimientoinventario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Movimientoinventario $movimientoinventario)
    {
        $form = $this->createDeleteForm($movimientoinventario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($movimientoinventario);
            $em->flush($movimientoinventario);
        }

        return $this->redirectToRoute('movimientoinventario_index');
    }

    /**
     * Creates a form to delete a movimientoinventario entity.
     *
     * @param Movimientoinventario $movimientoinventario The movimientoinventario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Movimientoinventario $movimientoinventario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movimientoinventario_delete', array('id' => $movimientoinventario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

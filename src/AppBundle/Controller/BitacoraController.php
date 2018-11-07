<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bitacora;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bitacora controller.
 *
 * @Route("bitacora")
 */
class BitacoraController extends Controller
{
    /**
     * Lists all bitacora entities.
     *
     * @Route("/", name="bitacora_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bitacoras = $em->getRepository('AppBundle:Bitacora')->findAll();

        return $this->render('bitacora/index.html.twig', array(
            'bitacoras' => $bitacoras,
        ));
    }

    /**
     * Creates a new bitacora entity.
     *
     * @Route("/new", name="bitacora_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bitacora = new Bitacora();
        $form = $this->createForm('AppBundle\Form\BitacoraType', $bitacora);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bitacora);
            $em->flush($bitacora);

            return $this->redirectToRoute('bitacora_show', array('id' => $bitacora->getIdbitacora()));
        }

        return $this->render('bitacora/new.html.twig', array(
            'bitacora' => $bitacora,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bitacora entity.
     *
     * @Route("/{id}", name="bitacora_show")
     * @Method("GET")
     */
    public function showAction(Bitacora $bitacora)
    {
        $deleteForm = $this->createDeleteForm($bitacora);

        return $this->render('bitacora/show.html.twig', array(
            'bitacora' => $bitacora,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bitacora entity.
     *
     * @Route("/{id}/edit", name="bitacora_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bitacora $bitacora)
    {
        $deleteForm = $this->createDeleteForm($bitacora);
        $editForm = $this->createForm('AppBundle\Form\BitacoraType', $bitacora);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
             $this->addFlash("success", "This is a success message");
            return $this->redirectToRoute('bitacora_edit', array('id' => $bitacora->getIdbitacora()));
        }
        return $this->render('bitacora/edit.html.twig', array(
            'bitacora' => $bitacora,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bitacora entity.
     *
     * @Route("/{id}", name="bitacora_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bitacora $bitacora)
    {
        $form = $this->createDeleteForm($bitacora);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bitacora);
            $em->flush($bitacora);
        }

        return $this->redirectToRoute('bitacora_index');
    }

    /**
     * Creates a form to delete a bitacora entity.
     *
     * @param Bitacora $bitacora The bitacora entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bitacora $bitacora)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bitacora_delete', array('id' => $bitacora->getIdbitacora())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

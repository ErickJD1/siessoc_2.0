<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Colaboracionmonetaria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * colaboracionmonetaria controller.
 *
 * @Route("colaboracionmonetaria")
 */
class ColaboracionmonetariaController extends Controller
{
    /**
     * Lists all colaboracionmonetaria entities.
     *
     * @Route("/", name="colaboracionmonetaria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colaboracionmonetarias = $em->getRepository('AppBundle:Colaboracionmonetaria')->findAll();

        return $this->render('colaboracionmonetaria/Colaboracionindex.html.twig', array(
            'colaboracionmonetarias' => $colaboracionmonetarias,
        ));
    }

    /**
     * Creates a new colaboracionmonetaria entity.
     *
     * @Route("/new", name="colaboracionmonetaria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $Colaboracionmonetaria = new Colaboracionmonetaria();
        $form = $this->createForm('AppBundle\Form\ColaboracionmonetariaType', $Colaboracionmonetaria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Colaboracionmonetaria);
            $em->flush($Colaboracionmonetaria);

            $this->addFlash('success', 'Colaboracion Ingresada Correctamente!');
            return $this->redirectToRoute('colaboracionmonetaria_index');
        }

        return $this->render('colaboracionmonetaria/Colaboracionnew.html.twig', array(
            'colaboracionmonetaria' => $Colaboracionmonetaria,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a colaboracionmonetaria entity.
     *
     * @Route("/{id}", name="colaboracionmonetaria_show")
     * @Method("GET")
     */
    public function showAction(Colaboracionmonetaria $Colaboracionmonetaria)
    {
        $deleteForm = $this->createDeleteForm($Colaboracionmonetaria);

        return $this->render('colaboracionmonetaria/Colaboracionshow.html.twig', array(
            'colaboracionmonetaria' => $Colaboracionmonetaria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing colaboracionmonetaria entity.
     *
     * @Route("/{id}/edit", name="colaboracionmonetaria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Colaboracionmonetaria $Colaboracionmonetaria)
    {
        $deleteForm = $this->createDeleteForm($Colaboracionmonetaria);
        $editForm = $this->createForm('AppBundle\Form\ColaboracionmonetariaType', $Colaboracionmonetaria);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('colaboracionmonetaria_edit', array('id' => $Colaboracionmonetaria->getId()));
        }

        return $this->render('colaboracionmonetaria/Colaboracionedit.html.twig', array(
            'colaboracionmonetaria' => $Colaboracionmonetaria,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a colaboracionmonetaria entity.
     *
     * @Route("/{id}", name="colaboracionmonetaria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Colaboracionmonetaria $Colaboracionmonetaria)
    {
        $form = $this->createDeleteForm($Colaboracionmonetaria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($Colaboracionmonetaria);
            $em->flush($Colaboracionmonetaria);
        }

        return $this->redirectToRoute('colaboracionmonetaria_index');
    }

    /**
     * Creates a form to delete a colaboracionmonetaria entity.
     *
     * @param Colaboracionmonetaria $colaboracionmonetaria The colaboracionmonetaria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Colaboracionmonetaria $Colaboracionmonetaria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colaboracionmonetaria_delete', array('id' => $Colaboracionmonetaria->getIdcolaboracion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

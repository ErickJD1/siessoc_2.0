<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Colaboracionmonetaria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Colaboracionmonetaria controller.
 *
 * @Route("colaboracionmonetaria")
 */
class ColaboracionmonetariaController extends Controller
{
    /**
     * Lists all colaboracionmonetarium entities.
     *
     * @Route("/", name="colaboracionmonetaria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colaboracionmonetarias = $em->getRepository('AppBundle:Colaboracionmonetaria')->findAll();

        return $this->render('colaboracionmonetaria/Colaboracionmonetariaindex.html.twig', array(
            'colaboracionmonetarias' => $colaboracionmonetarias,
        ));
    }

    /**
     * Creates a new Colaboracionmonetaria entity.
     *
     * @Route("/new", name="colaboracionmonetaria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $colaboracionmonetaria = new Colaboracionmonetaria();
        $form = $this->createForm('AppBundle\Form\ColaboracionmonetariaType', $colaboracionmonetaria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($colaboracionmonetaria);
            $em->flush($colaboracionmonetaria);

           $this->addFlash('success', 'Se creo correctamente el tipo de cuenta');
            return $this->redirectToRoute('colaboracionmonetaria_index');
        }

        return $this->render('colaboracionmonetaria/Colaboracionmonetarianew.html.twig', array(
            'colaboracionmonetaria' => $colaboracionmonetaria,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a colaboracionmonetaria entity.
     *
     * @Route("/{id}", name="colaboracionmonetaria_show")
     * @Method("GET")
     */
    public function showAction(Colaboracionmonetaria $colaboracionmonetaria)
    {
        $deleteForm = $this->createDeleteForm($colaboracionmonetaria);

        return $this->render('colaboracionmonetaria/Colaboracionmonetariashow.html.twig', array(
            'colaboracionmonetaria' => $colaboracionmonetaria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
     /**
     * Finds and displays a colaboracionmonetaria entity.
     *
     * @Route("/{id}", name="colaboracionmonetaria_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Colaboracionmonetaria $colaboracionmonetaria)
    {
        $deleteForm = $this->createDeleteForm($colaboracionmonetaria);

        return $this->render('colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig', array(
            'colaboracionmonetaria' => $colaboracionmonetaria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing colaboracionmonetaria entity.
     *
     * @Route("/{id}/edit", name="colaboracionmonetaria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Colaboracionmonetaria $colaboracionmonetaria)
    {
        $deleteForm = $this->createDeleteForm($colaboracionmonetaria);
        $editForm = $this->createForm('AppBundle\Form\ColaboracionmonetariaType', $colaboracionmonetaria);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Tipo colaboracion modificada exitosamente!');
             return $this->redirectToRoute('colaboracionmonetaria_index');
        }

        return $this->render('colaboracionmonetaria/Colaboracionmonetariaedit.html.twig', array(
            'colaboracionmonetaria' => $colaboracionmonetaria,
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
    public function deleteAction(Request $request, Colaboracionmonetaria $colaboracionmonetaria)
    {
        $form = $this->createDeleteForm($colaboracionmonetaria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($colaboracionmonetaria);
            $em->flush($colaboracionmonetaria);
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
    private function createDeleteForm(Colaboracionmonetaria $colaboracionmonetaria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colaboracionmonetaria_delete', array('id' => $colaboracionmonetaria->getIdColaboracion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

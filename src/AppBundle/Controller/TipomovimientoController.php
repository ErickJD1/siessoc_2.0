<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tipomovimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tipomovimiento controller.
 *
 * @Route("tipomovimiento")
 */
class TipomovimientoController extends Controller
{
    /**
     * Lists all tipomovimiento entities.
     *
     * @Route("/", name="tipomovimiento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipomovimientos = $em->getRepository('AppBundle:Tipomovimiento')->findAll();

        return $this->render('tipomovimiento/Tipomovimientoindex.html.twig', array(
            'tipomovimientos' => $tipomovimientos,
        ));
    }

    /**
     * Creates a new tipomovimiento entity.
     *
     * @Route("/new", name="tipomovimiento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipomovimiento = new Tipomovimiento();
        $form = $this->createForm('AppBundle\Form\TipomovimientoType', $tipomovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipomovimiento);
            $em->flush($tipomovimiento);

            $this->addFlash('success', 'Movimiento creado exitosamente!');
            return $this->redirectToRoute('tipomovimiento_index');
        }

        return $this->render('tipomovimiento/Tipomovimientonew.html.twig', array(
            'tipomovimiento' => $tipomovimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipomovimiento entity.
     *
     * @Route("/{id}", name="tipomovimiento_show")
     * @Method("GET")
     */
    public function showAction(Tipomovimiento $tipomovimiento)
    {
        $deleteForm = $this->createDeleteForm($tipomovimiento);

        return $this->render('tipomovimiento/Tipomovimientoshow.html.twig', array(
            'tipomovimiento' => $tipomovimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipomovimiento entity.
     *
     * @Route("/edit/{id}", name="tipomovimiento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipomovimiento $tipomovimiento)
    {
        $deleteForm = $this->createDeleteForm($tipomovimiento);
        $editForm = $this->createForm('AppBundle\Form\TipomovimientoType', $tipomovimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'El movimiento se modifico con Exito!');
             return $this->redirectToRoute('tipomovimiento_index', array('id' => $tipomovimiento->getIdtipomov()));
        }

        return $this->render('tipomovimiento/Tipomovimientoedit.html.twig', array(
            'tipomovimiento' => $tipomovimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipomovimiento entity.
     *
     * @Route("/{id}", name="tipomovimiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipomovimiento $tipomovimiento)
    {
        $form = $this->createDeleteForm($tipomovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            try
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($tipomovimiento);
                $em->flush($tipomovimiento); 
                $this->addFlash('success', 'El movimiento fue eliminada con Exito!');
                return $this->redirectToRoute('tipomovimiento_index');
            } catch (\Doctrine\DBAL\DBALException $e)
            {
                $this->addFlash('error', 'El movimiento no puede ser eliminado!');
                return $this->redirectToRoute('tipomovimiento_index');
            }
        }
    }

    /**
     * Creates a form to delete a tipomovimiento entity.
     *
     * @param Tipomovimiento $tipomovimiento The tipomovimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipomovimiento $tipomovimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipomovimiento_delete', array('id' => $tipomovimiento->getIdtipomov())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

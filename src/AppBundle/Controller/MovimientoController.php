<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\MovimientoRepository;
/**
 * Movimiento controller.
 *
 * @Route("movimiento")
 */
class MovimientoController extends Controller
{
    /**
     * Lists all movimiento entities.
     *
     * @Route("/", name="movimiento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $movimientos = $em->getRepository('AppBundle:Movimiento')->allMovimiento();
        

        return $this->render('movimiento/Movimientoindex.html.twig', array(
            'movimientos' => $movimientos,
        ));
    }

    /**
     * Creates a new movimiento entity.
     *
     * @Route("/new", name="movimiento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $movimiento = new Movimiento();
        $form = $this->createForm('AppBundle\Form\MovimientoType', $movimiento);
        $movimiento->setIdusuario($this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimiento);
            $em->flush($movimiento);

            $this->addFlash('success', 'Movimiento Ingresado Correctamente!');
            return $this->redirectToRoute('movimiento_index');
        }

        return $this->render('movimiento/Movimientonew.html.twig', array(
            'movimiento' => $movimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a movimiento entity.
     *
     * @Route("/{id}", name="movimiento_show")
     * @Method("GET")
     */
    public function showAction(Movimiento $movimiento)
    {
        $deleteForm = $this->createDeleteForm($movimiento);

        return $this->render('movimiento/Movimientoshow.html.twig', array(
            'movimiento' => $movimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
        /**
     * Finds and displays a movimiento entity.
     *
     * @Route("/{id}", name="movimiento_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Movimiento $movimiento)
    {
        $deleteForm = $this->createDeleteForm($movimiento);

        return $this->render('movimiento/Movimientoshowdelete.html.twig', array(
            'movimiento' => $movimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing movimiento entity.
     *
     * @Route("/edit/{id}", name="movimiento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Movimiento $movimiento)
    {
        $deleteForm = $this->createDeleteForm($movimiento);
        $editForm = $this->createForm('AppBundle\Form\MovimientoType', $movimiento);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'El Movimiento se modifico con Exito!');
             return $this->redirectToRoute('movimiento_index', array('id' => $movimiento->getIdmov()));
        }

        return $this->render('movimiento/Movimientoedit.html.twig', array(
            'movimiento' => $movimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a movimiento entity.
     *
     * @Route("/{id}", name="movimiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Movimiento $movimiento)
    {
        $form = $this->createDeleteForm($movimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($movimiento);
            $em->flush($movimiento);
        }

        $this->addFlash('success', 'El Movimiento fue eliminada con Exito!');
        return $this->redirectToRoute('movimiento_index');
    }

    /**
     * Creates a form to delete a movimiento entity.
     *
     * @param Movimiento $movimiento The movimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Movimiento $movimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movimiento_delete', array('id' => $movimiento->getIdmov())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pagocolaboracion;
use AppBundle\Entity\Colaboracionmonetaria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pagocolaboracion controller.
 * 
 *
 * @Route("pagocolaboracion")
 */
class PagocolaboracionController extends Controller {

    /**
     * Lists all pagocolaboracion entities.
     *
     * @Route("/{id}", name="pagocolaboracion_index")
     * @Method("GET")
     */
    public function indexAction(Request $request, Colaboracionmonetaria $colaboracion) {
        $em = $this->getDoctrine()->getManager();

        $pagocolaboracions = $em->getRepository('AppBundle:Pagocolaboracion')->findByIdcolaboracion($colaboracion->getIdColaboracion());

        return $this->render('pagocolaboracion/pagocolaboracionindex.html.twig', array(
                    'pagocolaboracions' => $pagocolaboracions,
                    'colaboracion' => $colaboracion
        ));
    }


    /**
     * Creates a new pagocolaboracion entity.
     *
     * @Route("/new", name="pagocolaboracion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $pagocolaboracion = new Pagocolaboracion();
        $form = $this->createForm('AppBundle\Form\PagocolaboracionType', $pagocolaboracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pagocolaboracion);
            $em->flush($pagocolaboracion);

            return $this->redirectToRoute('pagocolaboracion_show', array('id' => $pagocolaboracion->getId()));
        }

        return $this->render('pagocolaboracion/pagocolaboracionnew.html.twig', array(
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
    public function showAction(Pagocolaboracion $pagocolaboracion) {
        $deleteForm = $this->createDeleteForm($pagocolaboracion);

        return $this->render('pagocolaboracion/pagocolaboracionshow.html.twig', array(
                    'pagocolaboracion' => $pagocolaboracion,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing movimiento entity.
     *
     * @Route("/pagocolaboracion/{id}?{val}", name="pagocolaboracion_mod")
     * @Method({"GET", "POST"})
     */
    public function aprobacionAction(Request $request, Movimiento $movimiento, $val) {
        $descripcion = $request->get("descripcion");

        if ($val == 1) {
            $movimiento->setEstadomov(1);
            $this->getDoctrine()->getManager()->flush();
            $msj = "Movimiento aprobado con exito!";
        } elseif ($val == 2) {
            $movimiento->setEstadomov(2);
            $movimiento->setObservaciones($descripcion);
            $this->getDoctrine()->getManager()->flush();
            $msj = "El movimiento ha sido rechazado!";
        }
        $this->addFlash('warning', $msj);
        return $this->redirectToRoute('colaboracionmonetaria_index', array('id' => $movimiento->getIdmov()));
    }

    /**
     * Finds and displays a pagocolaboracion entity.
     *
     * @Route("/{id}", name="pagocolaboracion_show_delete")
     * @Method("GET")
     */
    public function showdeleteAction(Pagocolaboracion $pagocolaboracion) {
        $deleteForm = $this->createDeleteForm($pagocolaboracion);

        return $this->render('pagocolaboracion/pagocolaboracionshowdelete.html.twig', array(
                    'pagocolaboracion' => $pagocolaboracion,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pagocolaboracion entity.
     *
     * @Route("/edit/{id}", name="pagocolaboracion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pagocolaboracion $pagocolaboracion) {
        $deleteForm = $this->createDeleteForm($pagocolaboracion);
        $editForm = $this->createForm('AppBundle\Form\PagocolaboracionType', $pagocolaboracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Registro Modificado Exitosamente!');
            return $this->render('colaboracionmonetaria_index');
        }

        // $form = new ColaboracionmonetariaController();
        // $form->getformulario();

        return $this->render('pagocolaboracion/pagocolaboracionedit.html.twig', array(
                    'pagocolaboracion' => $pagocolaboracion,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/{id}?{val}", name="pagocolaboracion_realizarpago")
     * @Method({"GET", "POST"})
     */
    public function aprobarAction(Request $request, Pagocolaboracion $pagorealizado, $val) {

        $em = $this->getDoctrine()->getManager();

        $pagorealizado->setPagorealizado($val);
        $em = $this->getDoctrine()->getManager();
        $em->persist($pagorealizado);
        $em->flush($pagorealizado);



        return $this->redirectToRoute('colaboracionmonetaria_index');
    }

    /**
     * Deletes a pagocolaboracion entity.
     *
     * @Route("/{id}", name="pagocolaboracion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pagocolaboracion $pagocolaboracion) {
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
    private function createDeleteForm(Pagocolaboracion $pagocolaboracion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('pagocolaboracion_delete', array('id' => $pagocolaboracion->getIdpagocolaboracion())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

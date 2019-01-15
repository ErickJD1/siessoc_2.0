<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movimiento;
use AppBundle\Entity\Cuenta;
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
class MovimientoController extends Controller {

    /**
     * Lists all movimiento entities.
     *
     * @Route("/", name="movimiento_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $movimientos = $em->getRepository('AppBundle:Movimiento')->allMovimiento();


        return $this->render('movimiento/Movimientoindex.html.twig', array(
                    'movimientos' => $movimientos,
        ));
    }

    /**
     * Lists all movimiento entities.
     *
     * @Route("/cuenFind/{id}", name="cuenta_find")
     * @Method("GET")
     */
    public function cuenFindAction(Request $request, Cuenta $cuenta) {
        $em = $this->getDoctrine()->getManager();

        $movimientos = $em->getRepository('AppBundle:Movimiento')->findMovimiento($cuenta->getIdcuenta());


        return $this->render('cuenta/Movimientocuenta.html.twig', array(
                    'movimientos' => $movimientos,
                    'cuenta' => $cuenta,
        ));
    }

    /**
     * Creates a new movimiento entity.
     *
     * @Route("/new", name="movimiento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $movimiento = new Movimiento();
        $form = $this->createForm('AppBundle\Form\MovimientoType', $movimiento);
        $movimiento->setIdusuario($this->getUser());
        if ($this->getUser()->hasRole('ROLE_STAFF')) {
            $movimiento->setEstadomov(0);
        } elseif ($this->getUser()->hasRole('ROLE_COORDINADOR') OR $this->getUser()->hasRole('ROLE_FINANCIERO') OR $this->getUser()->hasRole('ROLE_ADMIN')) {
            $movimiento->setEstadomov(1);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $movimiento->setCreatedAt(new \DateTime());
            $cuenta = new Cuenta();
            $cuenta = $em->getRepository('AppBundle:Cuenta')->findOneBy(array('idcuenta' => $movimiento->getIdCuenta()));

            if (($movimiento->getMonto()) <= $cuenta->getSaldoactual()) {
                $em->persist($movimiento);
                $em->flush($movimiento);
                $this->addFlash('success', 'Movimiento Ingresado Correctamente!');
            } else {
                $this->addFlash('error', 'Monto del movimiento incorrectos!');
            }

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
    public function showAction(Movimiento $movimiento) {
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
    public function showDeleteAction(Movimiento $movimiento) {
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
    public function editAction(Request $request, Movimiento $movimiento) {
        $deleteForm = $this->createDeleteForm($movimiento);
        $movimiento->setUpdateAt(new \DateTime());
        $editForm = $this->createForm('AppBundle\Form\MovimientoType', $movimiento);
        if ($this->getUser()->hasRole('ROLE_STAFF')) {
            $movimiento->setEstadomov(0);
        } elseif ($this->getUser()->hasRole('ROLE_COORDINADOR') OR $this->getUser()->hasRole('ROLE_FINANCIERO') OR $this->getUser()->hasRole('ROLE_ADMIN')) {
            $movimiento->setEstadomov(1);
        }
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
     * Displays a form to edit an existing movimiento entity.
     *
     * @Route("/aprobacion/{id}?{val}", name="movimiento_aprobacion")
     * @Method({"GET", "POST"})
     */
    public function aprobacionAction(Request $request, Movimiento $movimiento, $val) {
         $descripcion=$request->get("descripcion");

        $movimiento->setUpdateAt(new \DateTime());
        if ($val == 1) {
            $movimiento->setEstadomov(1);
            $this->getDoctrine()->getManager()->flush();
            $msj = "Movimiento aprobado con exito!";
        } elseif ($val == 2) {
            $movimiento->setEstadomov(2);
            $movimiento->setObservaciones($descripcion);
            $this->getDoctrine()->getManager()->flush();
            $msj = "El movimiento ha sido rechazado!".$descripcion;
        }
        $this->addFlash('success', $msj);
        return $this->redirectToRoute('movimiento_index', array('id' => $movimiento->getIdmov()));
    }

    /**
     * Deletes a movimiento entity.
     *
     * @Route("/{id}", name="movimiento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Movimiento $movimiento) {
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
    private function createDeleteForm(Movimiento $movimiento) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('movimiento_delete', array('id' => $movimiento->getIdmov())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

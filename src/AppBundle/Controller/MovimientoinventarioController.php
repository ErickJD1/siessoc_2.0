<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movimientoinventario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

/**
 * Movimientoinventario controller.
 *
 * @Route("movimientoinventario")
 */
class MovimientoinventarioController extends Controller {

    /**
     * Lists all movimientoinventario entities.
     *
     * @Route("/", name="movimientoinventario_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $movimientoinventarios = $em->getRepository('AppBundle:Movimientoinventario')->findAll();

        return $this->render('movimientoinventario/movimientoinventarioindex.html.twig', array(
                    'movimientoinventarios' => $movimientoinventarios,
        ));
    }

    /**
     * Creates a new movimientoinventario entity.
     *
     * @Route("/new", name="movimientoinventario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
       $movimientoinventario = new Movimientoinventario();
         $inventario = New \AppBundle\Entity\Inventario();
        $em = $this->getDoctrine()->getManager();
        $inventario = $em->getRepository('AppBundle:Inventario')->findOneByIdinventario($request->get("id"));
        $movimientoinventario->setIdinventario($inventario->getIdinventario());
        
        
        $form = $this->createForm('AppBundle\Form\MovimientoinventarioType', $movimientoinventario);
        $em = $this->getDoctrine()->getManager();
        $form->add('idinventario');
        $form->handleRequest($request);

       

        if ($form->isSubmitted() && $form->isValid()) {
            //  $inventario = New \AppBundle\Entity\Inventario();
            //  $em = $this->getDoctrine()->getManager();
            //  $inventario = $em->getRepository('AppBundle:Inventario')->findOneByIdinventario($movimientoinventario->getIdinventario());

            $em->persist($movimientoinventario);
            $em->flush($movimientoinventario);

            $cantidadactual = 0;
            $movimientos = $this->getDoctrine()->getManager()->getRepository('AppBundle:Movimientoinventario')->findByIdinventario($movimientoinventario->getIdinventario());
            $cantidadactual = $inventario->getCantidadinventario();
            foreach ($movimientos as $movimientoinventario) {
                $cantidadactual = $cantidadactual - $movimientoinventario->getCantidadentrega();
            }
            $inventario->setCantidadinventario($cantidadactual);

            $em->persist($inventario);
            $em->flush($inventario);

            $this->addFlash('success', 'Movimiento Exitoso');
            return $this->redirectToRoute('movimientoinventario_index');
        }

        return $this->render('movimientoinventario/movimientoinventarionew.html.twig', array(
                    'movimientoinventario' => $movimientoinventario,
                    'inventario' => $inventario->getCantidadinventario(),
                    'idinsumo'=>$inventario->getIdinsumo(),
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a movimientoinventario entity.
     *
     * @Route("/{id}", name="movimientoinventario_show")
     * @Method("GET")
     */
    public function showAction(Movimientoinventario $movimientoinventario) {
        $deleteForm = $this->createDeleteForm($movimientoinventario);

        return $this->render('movimientoinventario/movimientoinventarioshow.html.twig', array(
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
    public function editAction(Request $request, Movimientoinventario $movimientoinventario) {
        $deleteForm = $this->createDeleteForm($movimientoinventario);
        $editForm = $this->createForm('AppBundle\Form\MovimientoinventarioType', $movimientoinventario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimientoinventario_edit', array('id' => $movimientoinventario->getId()));
        }

        return $this->render('movimientoinventario/movimientoinventarioedit.html.twig', array(
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
    public function deleteAction(Request $request, Movimientoinventario $movimientoinventario) {
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
    private function createDeleteForm(Movimientoinventario $movimientoinventario) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('movimientoinventario_delete', array('id' => $movimientoinventario->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

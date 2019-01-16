<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Transaccioncolaboracion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Transaccioncolaboracion controller.
 *
 * @Route("transaccioncolaboracion")
 */
class TransaccioncolaboracionController extends Controller
{
    /**
     * Lists all transaccioncolaboracion entities.
     *
     * @Route("/", name="transaccioncolaboracion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transaccioncolaboracions = $em->getRepository('AppBundle:Transaccioncolaboracion')->findAll();

        return $this->render('transaccioncolaboracion/transaccioncolaboracionindex.html.twig', array(
            'transaccioncolaboracions' => $transaccioncolaboracions,
        ));
    }

    /**
     * Creates a new transaccioncolaboracion entity.
     *
     * @Route("/new", name="transaccioncolaboracion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $transaccioncolaboracion = new Transaccioncolaboracion();
        $form = $this->createForm('AppBundle\Form\TransaccioncolaboracionType', $transaccioncolaboracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transaccioncolaboracion);
            $em->flush($transaccioncolaboracion);

             $this->addFlash('success', 'Transaccion Creada Exitosamente!');
            return $this->redirectToRoute('transaccioncolaboracion_index');
              
        }

        return $this->render('transaccioncolaboracion/transaccioncolaboracionnew.html.twig', array(
            'transaccioncolaboracion' => $transaccioncolaboracion,
            'form' => $form->createView(),
        ));
    }

    
      /**
     * Finds and displays a transaccioncolaboracion entity.
     *
     * @Route("/{id}", name="transaccioncolaboracion_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Transaccioncolaboracion $transaccioncolaboracion)
    {

        $deleteForm = $this->createDeleteForm($transaccioncolaboracion);

        return $this->render('transaccioncolaboracion/transaccioncolaboracionshowdelete.html.twig', array(
            'transaccioncolaboracion' => $transaccioncolaboracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    
    
    /**
     * Finds and displays a transaccioncolaboracion entity.
     *
     * @Route("/{id}", name="transaccioncolaboracion_show")
     * @Method("GET")
     */
    public function showAction(Transaccioncolaboracion $transaccioncolaboracion)
    {
        $deleteForm = $this->createDeleteForm($transaccioncolaboracion);

        return $this->render('transaccioncolaboracion/transaccioncolaboracionshow.html.twig', array(
            'transaccioncolaboracion' => $transaccioncolaboracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing transaccioncolaboracion entity.
     *
     * @Route("/{id}/edit", name="transaccioncolaboracion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Transaccioncolaboracion $transaccioncolaboracion)
    {
        $deleteForm = $this->createDeleteForm($transaccioncolaboracion);
        $editForm = $this->createForm('AppBundle\Form\TransaccioncolaboracionType', $transaccioncolaboracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

             $this->addFlash('success', 'Transaccion Creada Exitosamente!');
            return $this->redirectToRoute('transaccioncolaboracion_index');
        }

        return $this->render('transaccioncolaboracion/transaccioncolaboracionedit.html.twig', array(
            'transaccioncolaboracion' => $transaccioncolaboracion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a transaccioncolaboracion entity.
     *
     * @Route("/{id}", name="transaccioncolaboracion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Transaccioncolaboracion $transaccioncolaboracion)
    {
        $form = $this->createDeleteForm($transaccioncolaboracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($transaccioncolaboracion);
            $em->flush($transaccioncolaboracion);
            
             $this->addFlash('success', 'Transaccion Creada Exitosamente!');
            return $this->redirectToRoute('transaccioncolaboracion_index');
            
        }

        return $this->redirectToRoute('transaccioncolaboracion_index');
    }

    /**
     * Creates a form to delete a transaccioncolaboracion entity.
     *
     * @param Transaccioncolaboracion $transaccioncolaboracion The transaccioncolaboracion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Transaccioncolaboracion $transaccioncolaboracion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('transaccioncolaboracion_delete', array('id' => $transaccioncolaboracion->getIdtransaccolaboracion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

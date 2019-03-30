<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expedientebecario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Expedientebecario controller.
 *
 * @Route("expedientebecario")
 */
class ExpedientebecarioController extends Controller {

    /**
     * Lists all expedientebecario entities.
     *
     * @Route("/", name="expedientebecario_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $expedientebecarios = $em->getRepository('AppBundle:Expedientebecario')->findAll();

        return $this->render('expedientebecario/index.html.twig', array(
                    'expedientebecarios' => $expedientebecarios,
        ));
    }

    /**
     * Lists all expedientebecario entities.
     *
     * @Route("/miExpediente", name="expedientebecario_mi")
     * @Method("GET")
     */
    public function miExpAction() {
        $em = $this->getDoctrine()->getManager();

        $expedientebecario = new Expedientebecario();

        $expedientebecario = $em->getRepository('AppBundle:Expedientebecario')->findOneByIdusuario($this->getUser()->getId());

        $inscripcion = $em->getRepository('AppBundle:Inscripcion')->findByIdexpbecario($expedientebecario);


        return $this->render('expedientebecario/miexpshow.html.twig', array(
                    'expedientebecario' => $expedientebecario,
                    'inscripcion' => $inscripcion,
        ));
    }

    /**
     * Creates a new expedientebecario entity.
     *
     * @Route("/new", name="expedientebecario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $expedientebecario = new Expedientebecario();
        $form = $this->createForm('AppBundle\Form\ExpedientebecarioType', $expedientebecario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($expedientebecario);
            $em->flush($expedientebecario);

            return $this->redirectToRoute('expedientebecario_show', array('id' => $expedientebecario->getIdExpbecario()));
        }

        return $this->render('expedientebecario/new.html.twig', array(
                    'expedientebecario' => $expedientebecario,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a expedientebecario entity.
     *
     * @Route("/{id}", name="expedientebecario_show")
     * @Method("GET")
     */
    public function showAction(Expedientebecario $expedientebecario) {
        $deleteForm = $this->createDeleteForm($expedientebecario);

        return $this->render('expedientebecario/show.html.twig', array(
                    'expedientebecario' => $expedientebecario,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing expedientebecario entity.
     *
     * @Route("/{id}/edit", name="expedientebecario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Expedientebecario $expedientebecario) {
        $deleteForm = $this->createDeleteForm($expedientebecario);
        $editForm = $this->createForm('AppBundle\Form\ExpedientebecarioType', $expedientebecario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('expedientebecario_edit', array('id' => $expedientebecario->getIdExpbecario()));
        }

        return $this->render('expedientebecario/edit.html.twig', array(
                    'expedientebecario' => $expedientebecario,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a expedientebecario entity.
     *
     * @Route("/{id}", name="expedientebecario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Expedientebecario $expedientebecario) {
        $form = $this->createDeleteForm($expedientebecario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($expedientebecario);
            $em->flush($expedientebecario);
        }

        return $this->redirectToRoute('expedientebecario_index');
    }

    /**
     * Creates a form to delete a expedientebecario entity.
     *
     * @param Expedientebecario $expedientebecario The expedientebecario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Expedientebecario $expedientebecario) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('expedientebecario_delete', array('id' => $expedientebecario->getIdExpbecario())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

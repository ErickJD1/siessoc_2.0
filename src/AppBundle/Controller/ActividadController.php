<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actividad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Actividad controller.
 *
 * @Route("actividad")
 */
class ActividadController extends Controller
{
    /**
     * Lists all actividad entities.
     *
     * @Route("/", name="actividad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actividads = $em->getRepository('AppBundle:Actividad')->findAll();

        return $this->render('actividad/Actividadindex.html.twig', array(
            'actividads' => $actividads,
        ));
    }

    /**
     * Creates a new actividad entity.
     *
     * @Route("/new", name="actividad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $actividad = new Actividad();
        $form = $this->createForm('AppBundle\Form\ActividadType', $actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actividad);
            $em->flush($actividad);

            $this->addFlash('success', 'Actividad Creada Exitosamente!');
            return $this->redirectToRoute('actividad_index');
        }

        return $this->render('actividad/Actividadnew.html.twig', array(
            'actividad' => $actividad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a actividad entity.
     *
     * @Route("/{id}", name="actividad_show")
     * @Method("GET")
     */
    public function showAction(Actividad $actividad)
    {
        $deleteForm = $this->createDeleteForm($actividad);

        return $this->render('actividad/Actividadshow.html.twig', array(
            'actividad' => $actividad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing actividad entity.
     *
     * @Route("/edit/{id}", name="actividad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Actividad $actividad)
    {
        $deleteForm = $this->createDeleteForm($actividad);
        $editForm = $this->createForm('AppBundle\Form\ActividadType', $actividad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

          $this->addFlash('success', 'Actividad Modificada Exitosamente!');
            return $this->redirectToRoute('Actividad_index', array('id' => $actividad->getIdactividad()));
        }

        return $this->render('actividad/Actividadedit.html.twig', array(
            'actividad' => $actividad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a actividad entity.
     *
     * @Route("/{id}", name="actividad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Actividad $actividad)
    {
        $form = $this->createDeleteForm($actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actividad);
            $em->flush($actividad);
        }

        return $this->redirectToRoute('actividad_index');
    }

    /**
     * Creates a form to delete a actividad entity.
     *
     * @param Actividad $actividad The actividad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actividad $actividad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actividad_delete', array('id' => $actividad->getIdactividad())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Publicacioncontenido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Publicacioncontenido controller.
 *
 * @Route("publicacioncontenido")
 */
class PublicacioncontenidoController extends Controller
{
    /**
     * Lists all publicacioncontenido entities.
     *
     * @Route("/", name="publicacioncontenido_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicacioncontenidos = $em->getRepository('AppBundle:Publicacioncontenido')->findAll();

        return $this->render('publicacioncontenido/contenidoindex.html.twig', array(
            'publicacioncontenidos' => $publicacioncontenidos,
        ));
    }

    /**
     * Creates a new publicacioncontenido entity.
     *
     * @Route("/new", name="publicacioncontenido_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $publicacioncontenido = new Publicacioncontenido();
        $form = $this->createForm('AppBundle\Form\PublicacioncontenidoType', $publicacioncontenido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicacioncontenido);
            $em->flush($publicacioncontenido);

            return $this->redirectToRoute('publicacioncontenido_show', array('id' => $publicacioncontenido->getIdcontenido()));
        }

        return $this->render('publicacioncontenido/contenidonew.html.twig', array(
            'publicacioncontenido' => $publicacioncontenido,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a publicacioncontenido entity.
     *
     * @Route("/{id}", name="publicacioncontenido_show")
     * @Method("GET")
     */
    public function showAction(Publicacioncontenido $publicacioncontenido)
    {
        $deleteForm = $this->createDeleteForm($publicacioncontenido);

        return $this->render('publicacioncontenido/contenidoshow.html.twig', array(
            'publicacioncontenido' => $publicacioncontenido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publicacioncontenido entity.
     *
     * @Route("/{id}/edit", name="publicacioncontenido_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Publicacioncontenido $publicacioncontenido)
    {
        $deleteForm = $this->createDeleteForm($publicacioncontenido);
        $editForm = $this->createForm('AppBundle\Form\PublicacioncontenidoType', $publicacioncontenido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publicacioncontenido_edit', array('id' => $publicacioncontenido->getId()));
        }

        return $this->render('publicacioncontenido/contenidoedit.html.twig', array(
            'publicacioncontenido' => $publicacioncontenido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publicacioncontenido entity.
     *
     * @Route("/{id}", name="publicacioncontenido_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Publicacioncontenido $publicacioncontenido)
    {
        $form = $this->createDeleteForm($publicacioncontenido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicacioncontenido);
            $em->flush($publicacioncontenido);
        }

        return $this->redirectToRoute('publicacioncontenido_index');
    }

    /**
     * Creates a form to delete a publicacioncontenido entity.
     *
     * @param Publicacioncontenido $publicacioncontenido The publicacioncontenido entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Publicacioncontenido $publicacioncontenido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publicacioncontenido_delete', array('id' => $publicacioncontenido->getIdcontenido())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

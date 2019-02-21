<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tipoinsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tipoinsumo controller.
 *
 * @Route("tipoinsumo")
 */
class TipoinsumoController extends Controller
{
    /**
     * Lists all tipoinsumo entities.
     *
     * @Route("/", name="tipoinsumo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoinsumo = $em->getRepository('AppBundle:Tipoinsumo')->findAll();

        return $this->render('tipoinsumo/tipoinsumoindex.html.twig', array(
            'tipoinsumo' => $tipoinsumo,
        ));
    }

    /**
     * Creates a new tipoinsumo entity.
     *
     * @Route("/new", name="tipoinsumo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipoinsumo = new Tipoinsumo();
        $form = $this->createForm('AppBundle\Form\TipoinsumoType', $tipoinsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoinsumo);
            $em->flush($tipoinsumo);

            $this->addFlash('success', 'Registro Guardado Exitosamente!');
            return $this->redirectToRoute('tipoinsumo_index');
        }

        return $this->render('tipoinsumo/tipoinsumonew.html.twig', array(
            'tipoinsumo' => $tipoinsumo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipoinsumo entity.
     *
     * @Route("/{id}", name="tipoinsumo_show")
     * @Method("GET")
     */
    public function showAction(Tipoinsumo $tipoinsumo)
    {
        $deleteForm = $this->createDeleteForm($tipoinsumo);

        return $this->render('tipoinsumo/tipoinsumoshow.html.twig', array(
            'tipoinsumo' => $tipoinsumo,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
      /**
     * Finds and displays a tipoinsumo entity.
     *
     * @Route("/{id}", name="tipoinsumo_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Tipoinsumo $tipoinsumo) {
        $deleteForm = $this->createDeleteForm($tipoinsumo);

        return $this->render('tipoinsumo/tipoinsumoshowdelete.html.twig', array(
                    'tipoinsumo' => $tipoinsumo,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    

    /**
     * Displays a form to edit an existing tipoinsumo entity.
     *
     * @Route("/{id}/edit", name="tipoinsumo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipoinsumo $tipoinsumo)
    {
        $deleteForm = $this->createDeleteForm($tipoinsumo);
        $editForm = $this->createForm('AppBundle\Form\TipoinsumoType', $tipoinsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Registro Modificado Con Exito!');
            return $this->redirectToRoute('tipoinsumo_index');
        }

        return $this->render('tipoinsumo/tipoinsumoedit.html.twig', array(
            'tipoinsumo' => $tipoinsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipoinsumo entity.
     *
     * @Route("/{id}", name="tipoinsumo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipoinsumo $tipoinsumo)
    {
        $form = $this->createDeleteForm($tipoinsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoinsumo);
            $em->flush($tipoinsumo);
        }

        return $this->redirectToRoute('tipoinsumo_index');
    }

    /**
     * Creates a form to delete a tipoinsumo entity.
     *
     * @param Tipoinsumo $tipoinsumo The tipoinsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipoinsumo $tipoinsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoinsumo_delete', array('id' => $tipoinsumo->getIdtipoinsumo())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

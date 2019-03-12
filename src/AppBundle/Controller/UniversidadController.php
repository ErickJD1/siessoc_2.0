<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Universidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Universidad controller.
 *
 * @Route("universidad")
 */
class UniversidadController extends Controller
{
    /**
     * Lists all universidad entities.
     *
     * @Route("/", name="universidad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $universidads = $em->getRepository('AppBundle:Universidad')->findAll();

        return $this->render('universidad/universidadindex.html.twig', array(
            'universidads' => $universidads,
        ));
    }

    /**
     * Creates a new universidad entity.
     *
     * @Route("/new", name="universidad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $universidad = new Universidad();
        $form = $this->createForm('AppBundle\Form\UniversidadType', $universidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($universidad);
            $em->flush($universidad);

            return $this->redirectToRoute('universidad_show', array('id' => $universidad->getIduniversidad()));
        }

        return $this->render('universidad/universidadnew.html.twig', array(
            'universidad' => $universidad,
            'form' => $form->createView(),
        ));
    }
    
    
    
    
    
    
    
        /**
     * Creates a new universidad entity.
     *
     * @Route("/newmodal", name="universidad_newmodal")
     * @Method({"GET", "POST"})
     */
    public function newmodalAction(Request $request)
    {
        $universidad = new Universidad();
        $form = $this->createForm('AppBundle\Form\UniversidadType', $universidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($universidad);
            $em->flush($universidad);

            return $this->redirectToRoute('solicitudbecario_new', array('id' => $universidad->getIduniversidad()));
        }

        return $this->render('universidad/universidadnewmodal.html.twig', array(
            'universidad' => $universidad,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a universidad entity.
     *
     * @Route("/{id}", name="universidad_show")
     * @Method("GET")
     */
    public function showAction(Universidad $universidad)
    {
        $deleteForm = $this->createDeleteForm($universidad);

        return $this->render('universidad/universidadshow.html.twig', array(
            'universidad' => $universidad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing universidad entity.
     *
     * @Route("/{id}/edit", name="universidad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Universidad $universidad)
    {
        $deleteForm = $this->createDeleteForm($universidad);
        $editForm = $this->createForm('AppBundle\Form\UniversidadType', $universidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('universidad_edit', array('id' => $universidad->getIduniversidad()));
        }

        return $this->render('universidad/universidadedit.html.twig', array(
            'universidad' => $universidad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a universidad entity.
     *
     * @Route("/{id}", name="universidad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Universidad $universidad)
    {
        $form = $this->createDeleteForm($universidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($universidad);
            $em->flush($universidad);
        }

        return $this->redirectToRoute('universidad_index');
    }

    /**
     * Creates a form to delete a universidad entity.
     *
     * @param Universidad $universidad The universidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Universidad $universidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('universidad_delete', array('id' => $universidad->getIduniversidad())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

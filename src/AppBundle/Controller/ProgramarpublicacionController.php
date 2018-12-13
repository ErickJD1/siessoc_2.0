<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Programarpublicacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Programarpublicacion controller.
 *
 * @Route("programarpublicacion")
 */
class ProgramarpublicacionController extends Controller
{
    /**
     * Lists all programarpublicacion entities.
     *
     * @Route("/", name="programarpublicacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $programarpublicacions = $em->getRepository('AppBundle:Programarpublicacion')->findAll();

        return $this->render('programarpublicacion/publicacionindex.html.twig', array(
            'programarpublicacions' => $programarpublicacions,
        ));
    }

    /**
     * Creates a new programarpublicacion entity.
     *
     * @Route("/new", name="programarpublicacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $programarpublicacion = new Programarpublicacion();
        $form = $this->createForm('AppBundle\Form\ProgramarpublicacionType', $programarpublicacion);
        $programarpublicacion->setIdusuario($this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($programarpublicacion);
            $em->flush($programarpublicacion);

            $this->addFlash('success', 'Publicacion Creada Exitosa!');
            return $this->redirectToRoute('programarpublicacion_index');
        }

        return $this->render('programarpublicacion/publicacionnew.html.twig', array(
            'programarpublicacion' => $programarpublicacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a programarpublicacion entity.
     *
     * @Route("/{id}", name="programarpublicacion_show")
     * @Method("GET")
     */
    public function showAction(Programarpublicacion $programarpublicacion)
    {
        $deleteForm = $this->createDeleteForm($programarpublicacion);

        return $this->render('programarpublicacion/publicacionshow.html.twig', array(
            'programarpublicacion' => $programarpublicacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing programarpublicacion entity.
     *
     * @Route("/edit/{id}", name="programarpublicacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Programarpublicacion $programarpublicacion)
    {
        $deleteForm = $this->createDeleteForm($programarpublicacion);
        $editForm = $this->createForm('AppBundle\Form\ProgramarpublicacionType', $programarpublicacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

              $this->addFlash('success', 'Publicacion Modificada!');
            return $this->redirectToRoute('programarpublicacion_index', array('id' => $programarpublicacion->getIdpublicacion()));
        }

        return $this->render('programarpublicacion/publicacionedit.html.twig', array(
            'programarpublicacion' => $programarpublicacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a programarpublicacion entity.
     *
     * @Route("/{id}", name="programarpublicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Programarpublicacion $programarpublicacion)
    {
        $form = $this->createDeleteForm($programarpublicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
            $em = $this->getDoctrine()->getManager();
            $em->remove($programarpublicacion);
            $em->flush($programarpublicacion);
              $this->addFlash('success', 'Registro Eliminado Exitosamente!');
            return $this->redirectToRoute('programarpublicacion_index');
            } catch (\Doctrine\DBAL\DBALException $e)
            {
                $this->addFlash('error', 'La publicacion esta asociada con un contenido!');
                 return $this->redirectToRoute('programarpublicacion_index');
            }
        }
    }

    /**
     * Creates a form to delete a programarpublicacion entity.
     *
     * @param Programarpublicacion $programarpublicacion The programarpublicacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Programarpublicacion $programarpublicacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programarpublicacion_delete', array('id' => $programarpublicacion->getIdpublicacion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Banco;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Banco controller.
 *
 * @Route("banco")
 */
class BancoController extends Controller
{
    /**
     * Lists all banco entities.
     *
     * @Route("/", name="banco_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bancos = $em->getRepository('AppBundle:Banco')->findAll();

        return $this->render('banco/Bancoindex.html.twig', array(
            'bancos' => $bancos,
        ));
    }

    /**
     * Creates a new banco entity.
     *
     * @Route("/new", name="banco_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $banco = new Banco();
        $form = $this->createForm('AppBundle\Form\BancoType', $banco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banco);
            $em->flush($banco);

            $this->addFlash('success', 'Banco Creado Exitosamente!');
            return $this->redirectToRoute('banco_index');
        }

        return $this->render('banco/Banconew.html.twig', array(
            'banco' => $banco,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a banco entity.
     *
     * @Route("/{id}", name="banco_show")
     * @Method("GET")
     */
    public function showAction(Banco $banco)
    {
        $deleteForm = $this->createDeleteForm($banco);

        return $this->render('banco/Bancoshow.html.twig', array(
            'banco' => $banco,
            'delete_form' => $deleteForm->createView(),
        ));
    }
        /**
     * Finds and displays a bano entity.
     *
     * @Route("/{id}", name="banco_showdelete")
     * @Method("GET")
     */
    
       public function showdeleteAction(Banco $banco)
    {
        $deleteForm = $this->createDeleteForm($banco);

        return $this->render('banco/Bancoshowdelete.html.twig', array(
            'banco' => $banco,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing banco entity.
     *
     * @Route("/edit/{id}", name="banco_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Banco $banco)
    {
        $deleteForm = $this->createDeleteForm($banco);
        $editForm = $this->createForm('AppBundle\Form\BancoType', $banco);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Banco Modificado exitosamente!');
            return $this->redirectToRoute('banco_index', array('id' => $banco->getIdbanco()));
        }

        return $this->render('banco/Bancoedit.html.twig', array(
            'banco' => $banco,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a banco entity.
     *
     * @Route("/{id}", name="banco_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Banco $banco)
    {
        $form = $this->createDeleteForm($banco);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                
            $em = $this->getDoctrine()->getManager();
            $em->remove($banco);
            $em->flush($banco);
            $this->addFlash('success', 'Registro Eliminado Exitosamente!');
            return $this->redirectToRoute('banco_index');
             } catch (\Doctrine\DBAL\DBALException $e) {
                 $this->addFlash('error', 'El banco Esta Asociado con una cuenta!');
                 return $this->redirectToRoute('banco_index');
            }
        }
    }

    /**
     * Creates a form to delete a banco entity.
     *
     * @param Banco $banco The banco entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Banco $banco)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('banco_delete', array('id' => $banco->getIdbanco())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

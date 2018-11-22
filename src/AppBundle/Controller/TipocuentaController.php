<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tipocuenta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * tipocuenta controller.
 *
 * @Route("tipocuenta")
 */
class TipocuentaController extends Controller
{
    /**
     * Lists all tipocuenta entities.
     *
     * @Route("/", name="tipocuenta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipocuentas = $em->getRepository('AppBundle:Tipocuenta')->findAll();

        return $this->render('tipocuenta/TipoCuentaindex.html.twig', array(
            'tipocuentas' => $tipocuentas,
        ));
    }

    /**
     * Creates a new tipocuenta entity.
     *
     * @Route("/new", name="tipocuenta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $Tipocuenta = new Tipocuenta();
        $form = $this->createForm('AppBundle\Form\TipocuentaType', $Tipocuenta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Tipocuenta);
            $em->flush($Tipocuenta);

            $this->addFlash('success', 'Tipo Cuenta Creada Exitosamente!');
            return $this->redirectToRoute('tipocuenta_index');
        }

        return $this->render('tipocuenta/TipoCuentanew.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipocuenta entity.
     *
     * @Route("/{id}", name="tipocuenta_show")
     * @Method("GET")
     */
    public function showAction(Tipocuenta $Tipocuenta)
    {
        $deleteForm = $this->createDeleteForm($Tipocuenta);

        return $this->render('tipocuenta/TipoCuentashow.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipocuenta entity.
     *
     * @Route("/edit/{id}", name="tipocuenta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipocuenta $Tipocuenta)
    {
        $deleteForm = $this->createDeleteForm($Tipocuenta);
        $editForm = $this->createForm('AppBundle\Form\TipocuentaType', $Tipocuenta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'La cuenta se modifico con Exito!');
            return $this->redirectToRoute('tipocuenta_index', array('id' => $Tipocuenta->getIdtipocuenta()));
        }

        return $this->render('tipocuenta/TipoCuentaedit.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipocuenta entity.
     *
     * @Route("/{id}", name="tipocuenta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipocuenta $Tipocuenta)
    {
        $form = $this->createDeleteForm($Tipocuenta);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            try
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($Tipocuenta);
                $em->flush($Tipocuenta);
                $this->addFlash('success', 'La cuenta fue eliminada con exito!');
                return $this->redirectToRoute('tipocuenta_index');
            } catch (\Doctrine\DBAL\DBALException $e)
            {
                $this->addFlash('error', 'La cuenta no pudo ser eliminada!');
                return $this->redirectToRoute('tipocuenta_index');
            }
            
            
        }

        return $this->redirectToRoute('tipocuenta_index');
    }

    /**
     * Creates a form to delete a tipocuenta entity.
     *
     * @param Tipocuenta $tipocuenta The tipocuenta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipocuenta $Tipocuenta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocuenta_delete', array('id' => $Tipocuenta->getIdtipocuenta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



}

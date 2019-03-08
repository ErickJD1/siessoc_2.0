<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cuenta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * cuenta controller.
 *
 * @Route("cuenta")
 */
class CuentaController extends Controller
{
    /**
     * Lists all cuenta entities.
     *
     * @Route("/", name="cuenta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cuentas = $em->getRepository('AppBundle:Cuenta')->findAll();

        return $this->render('cuenta/Cuentaindex.html.twig', array(
            'cuentas' => $cuentas,
        ));
    }




    /**
     * Creates a new cuenta entity.
     *
     * @Route("/new", name="cuenta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $Cuenta = new Cuenta();
        $form = $this->createForm('AppBundle\Form\CuentaType', $Cuenta);
        $Cuenta->setIdusuario($this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($Cuenta->getSaldoactual()== null){
                $Cuenta->setSaldoactual($Cuenta->getSaldocuenta());
            }
            $Cuenta->setEstadocuenta(true);
          //  $Cuenta->setFechaapertura(date('Y-m-d H:i:s'));
            $em->persist($Cuenta);
            $em->flush($Cuenta);

            $this->addFlash('success', 'Cuenta creada exitosamente!');
            return $this->redirectToRoute('cuenta_index');
        }

        return $this->render('cuenta/Cuentanew.html.twig', array(
            'cuenta' => $Cuenta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cuenta entity.
     *
     * @Route("/{id}", name="cuenta_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Cuenta $Cuenta)
    {

        $deleteForm = $this->createDeleteForm($Cuenta);

        return $this->render('cuenta/Cuentashowdelete.html.twig', array(
            'cuenta' => $Cuenta,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
        /**
     * Finds and displays a cuenta entity.
     *
     * @Route("/{id}", name="cuenta_show")
     * @Method("GET")
     */
    public function showAction(Request $request,Cuenta $Cuenta)
    {

        $editForm = $this->createForm('AppBundle\Form\CuentaType', $Cuenta);
        $editForm->handleRequest($request);

        return $this->render('cuenta/Cuentashow.html.twig', array(
            'cuenta' => $Cuenta,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cuenta entity.
     *
     * @Route("/edit/{id}", name="cuenta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cuenta $Cuenta)
    {
        $deleteForm = $this->createDeleteForm($Cuenta);
        $editForm = $this->createForm('AppBundle\Form\CuentaType', $Cuenta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

          $this->addFlash('success', 'La cuenta se modifico con Exito!');
           return $this->redirectToRoute('cuenta_index', array('id' => $Cuenta->getIdcuenta()));
        }

        return $this->render('cuenta/Cuentaedit.html.twig', array(
            'cuenta' => $Cuenta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cuenta entity.
     *
     * @Route("/{id}", name="cuenta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cuenta $Cuenta)
    {
        $form = $this->createDeleteForm($Cuenta);
        $form->handleRequest($request);
     try{
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($Cuenta);
            $em->flush($Cuenta);
        }
     }catch(\Exception $e){
        $this->addFlash('error', 'La cuenta no puede ser eliminada! Verifica si la cuenta tiene movimientos relacionados. Puedes inactivar la cuenta en Editar Cuenta.');
        return $this->redirectToRoute('cuenta_index');
     }
      $this->addFlash('success', 'La cuenta fue eliminada con Exito!');
        return $this->redirectToRoute('cuenta_index');
    }

    /**
     * Creates a form to delete a cuenta entity.
     *
     * @param Cuenta $cuenta The cuenta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cuenta $Cuenta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuenta_delete', array('id' => $Cuenta->getIdcuenta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

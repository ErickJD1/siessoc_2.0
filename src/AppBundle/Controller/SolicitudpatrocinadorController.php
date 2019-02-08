<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Solicitudpatrocinador;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\SolicitudPatrocinadorRepository;
use AppBundle\Entity\Expedientepatrocinador;

/**
 * Solicitudpatrocinador controller.
 *
 * @Route("solicitudpatrocinador")
 */
class SolicitudpatrocinadorController extends Controller {

    /**
     * Lists all solicitudpatrocinador entities.
     *
     * @Route("/", name="solicitudpatrocinador_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $solicitudpatrocinador = $em->getRepository('AppBundle:Solicitudpatrocinador')->findAll();

        return $this->render('solicitudpatrocinador/solicitudpatrocinadorindex.html.twig', array(
                    'solicitudpatrocinador' => $solicitudpatrocinador,
        ));
    }

    /**
     * Finds and displays a solicitudpatrocinador entity.
     *
     * @Route("/{id}?{val}", name="solicitud_aprobacion")
     * @Method({"GET", "POST"})
     */
    public function aprobarAction(Request $request, Solicitudpatrocinador $solicitudpatrocinador, $val) {

        $expediente = new Expedientepatrocinador();
        $expediente->setDocidentidadpatrocinador($solicitudpatrocinador->getDocidentidadsolipatrocinador());
        $expediente->setFecharegistropatrocinador(new \DateTime());
        $expediente->setMontoaportarpratocinador($solicitudpatrocinador->getMontoaportarsolipatrocinador());
        $expediente->setTelefonopatrocinador($solicitudpatrocinador->getTelefonosolipatrocinador());
        $expediente->setDireccionpatrocinador($solicitudpatrocinador->getDireccionsolipatrocinador());
        $expediente->setEstadopatrocinador($solicitudpatrocinador->getEstadosolipatrocinador());


        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('SalexUserBundle:User')->findOneById($solicitudpatrocinador->getIdusuario());


        if ($val == 1) {

            $expediente->setEstadopatrocinador(1);
            $solicitudpatrocinador->setEstadosolipatrocinador(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($expediente);
            $em->flush($expediente);
            $em->persist($solicitudpatrocinador);
            $em->flush($solicitudpatrocinador);
            $user->addRole('ROLE_PATROCINADOR');
            $user->removeRole('ROLE_ASPIRANTE_PATROCINADOR');
            $em->persist($user);
            $em->flush($user);

            $msj = "Solicitud aprobada con exito!";
            $this->addFlash('success', $msj);
            return $this->redirectToRoute('solicitudpatrocinador_index');
        } elseif ($val == 2) {
            $descripcion = $request->get("descripcion");
//            $solicitudpatrocinador->setObservacionrechazo($descripcion);
//            $solicitudpatrocinador->setEstadosolipatrocinador(2);
            $this->getDoctrine()->getManager()->flush();
            $msj = "El movimiento ha sido rechazado!";
            $this->addFlash('success', $msj);
            return $this->redirectToRoute('solicitudpatrocinador_index');
        }
    }

    /**
     * Creates a new solicitudpatrocinador entity.
     *
     * @Route("/new", name="solicitudpatrocinador_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $solicitudpatrocinador = new Solicitudpatrocinador();
        $form = $this->createForm('AppBundle\Form\SolicitudpatrocinadorType', $solicitudpatrocinador);
        $solicitudpatrocinador->setIdusuario($this->getUser());
        $solicitudpatrocinador->setEstadosolipatrocinador(0);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitudpatrocinador);
            $em->flush($solicitudpatrocinador);

            $this->addFlash('success', 'Solicitud Registrada Exitosamente!');
            return $this->redirectToRoute('solicitudpatrocinador_index');
        }

        return $this->render('solicitudpatrocinador/solicitudpatrocinadornew.html.twig', array(
                    'solicitudpatrocinador' => $solicitudpatrocinador,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudpatrocinador entity.
     *
     * @Route("/{id}", name="solicitudpatrocinador_show")
     * @Method("GET")
     */
    public function showAction(Solicitudpatrocinador $solicitudpatrocinador) {
        $deleteForm = $this->createDeleteForm($solicitudpatrocinador);

        return $this->render('solicitudpatrocinador/solicitudpatrocinadorshow.html.twig', array(
                    'solicitudpatrocinador' => $solicitudpatrocinador,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudpatrocinador entity.
     *
     * @Route("/{id}", name="solicitudpatrocinador_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Solicitudpatrocinador $solicitudpatrocinador) {
        $deleteForm = $this->createDeleteForm($solicitudpatrocinador);

        return $this->render('solicitudpatrocinador/solicitudpatrocinadorshowdelete.html.twig', array(
                    'solicitudpatrocinador' => $solicitudpatrocinador,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing solicitudpatrocinador entity.
     *
     * @Route("/{id}/edit", name="solicitudpatrocinador_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Solicitudpatrocinador $solicitudpatrocinador) {
        $deleteForm = $this->createDeleteForm($solicitudpatrocinador);
        $editForm = $this->createForm('AppBundle\Form\SolicitudpatrocinadorType', $solicitudpatrocinador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Solicitud Modificada con Exito!');
            return $this->redirectToRoute('solicitudpatrocinador_index');
        }

        return $this->render('solicitudpatrocinador/solicitudpatrocinadoredit.html.twig', array(
                    'solicitudpatrocinador' => $solicitudpatrocinador,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a solicitudpatrocinador entity.
     *
     * @Route("/{id}", name="solicitudpatrocinador_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Solicitudpatrocinador $solicitudpatrocinador) {
        $form = $this->createDeleteForm($solicitudpatrocinador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($solicitudpatrocinador);
            $em->flush($solicitudpatrocinador);
        }

        return $this->redirectToRoute('solicitudpatrocinador_index');
    }

    /**
     * Creates a form to delete a solicitudpatrocinador entity.
     *
     * @param Solicitudpatrocinador $solicitudpatrocinador The solicitudpatrocinador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Solicitudpatrocinador $solicitudpatrocinador) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('solicitudpatrocinador_delete', array('id' => $solicitudpatrocinador->getIdsolipatrocinador())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Solicitudbecario;
use AppBundle\Entity\Expedientebecario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\SolicitudesRepository;
use SalexUserBundle\Entity\User;


/**
 * Solicitudbecario controller.
 *
 * @Route("solicitudbecario")
 */
class SolicitudbecarioController extends Controller {

    /**
     * Lists all solicitudbecario entities.
     *
     * @Route("/", name="solicitudbecario_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        
        $solicitudbecarios = $em->getRepository('AppBundle:Solicitudbecario')->findAll();
        if ($this->getUser()->hasRole('ROLE_COORDINADOR') or $this->getUser()->hasRole('ROLE_ADMIN')) {
            return $this->render('solicitudbecario/Solicitudbecarioindex.html.twig', array(
                        'solicitudbecarios' => $solicitudbecarios,
            ));
        } elseif ($this->getUser()->hasRole('ROLE_ASPIRANTE_BECARIO')) {

            $aprobados = $em->getRepository('AppBundle:Solicitudbecario')->findByIdusuario($this->getUser()->getId());
            return $this->render('Solicitudbecario/Solicitudbecariouser.html.twig', array('solicitudbecarios' => $aprobados));
        }
    }

    /**
     * Lists all user entities.
     *
     * @Route("/aprobados", name="soli_aprobados")
     * @Method("GET")
     */
    public function aprobadosAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $aprobados = $em->getRepository('AppBundle:Solicitudbecario')->aprobadosrepo();
        return $this->render('Solicitudbecario/Solicitudbecarioaprobado.html.twig', array('aprobados' => $aprobados));
    }

    /**
     * Lists all user entities.
     *
     * @Route("/solicitudUs", name="soli_user")
     * @Method("GET")
     */
    public function userSoliAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $aprobados = $em->getRepository('AppBundle:Solicitudbecario')->findByIdusuario($this->getUser()->getId());
        return $this->render('Solicitudbecario/Solicitudbecariouser.html.twig', array('solicitudbecarios' => $aprobados));
    }

    /**
     * Lists all user entities.
     *
     * @Route("/rechazados", name="soli_rechazados")
     * @Method("GET")
     */
    public function rechazadosrepo(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $rechazados = $em->getRepository('AppBundle:Solicitudbecario')->rechazadosrepo();
        return $this->render('Solicitudbecario/Solicitudbecariorechazado.html.twig', array('rechazados' => $rechazados));
    }

    /**
     * Creates a new solicitudbecario entity.
     *
     * @Route("/new", name="solicitudbecario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $solicitudbecario = new Solicitudbecario();
        $form = $this->createForm('AppBundle\Form\SolicitudbecarioType', $solicitudbecario);
        $solicitudbecario->setIdusuario($this->getUser());
        $solicitudbecario->setEstadosolibecario(0);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitudbecario);
            $em->flush($solicitudbecario);

            $this->addFlash('success', 'Solicitud Enviada Correctamente!');
            return $this->redirectToRoute('solicitudbecario_index');
        }

        return $this->render('solicitudbecario/Solicitudbecarionew.html.twig', array(
                    'solicitudbecario' => $solicitudbecario,
                    'form' => $form->createView(),
        ));


    }

    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/{id}", name="solicitudbecario_show")
     * @Method("GET")
     */
    public function showAction(Solicitudbecario $solicitudbecario) {
        $deleteForm = $this->createDeleteForm($solicitudbecario);

        return $this->render('solicitudbecario/Solicitudbecarioshow.html.twig', array(
                    'solicitudbecario' => $solicitudbecario,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/{id}?{val}", name="solicitudbecario_aprobacion")
     * @Method({"GET", "POST"})
     */
    public function aprobarAction(Request $request, Solicitudbecario $solicitudbecario, $val) {

        $expediente = new Expedientebecario();
        $expediente->setAnioExpfinalizacionbecario($solicitudbecario->getAniosolifinalizacionbecario());
        $expediente->setAnioExpingresobecario($solicitudbecario->getAniosoliingresobecario());
        $expediente->setAntecedentes($solicitudbecario->getAntecedentes());
        $expediente->setCantExphermanosbecario($solicitudbecario->getCantsolihermanosbecario());
        $expediente->setCarreraExpestudiarbecario($solicitudbecario->getCarrerasoliestudiarbecario());
        $expediente->setComprobante($solicitudbecario->getComprobante());
        $expediente->setCuotaExpmensualbecario($solicitudbecario->getCuotasolimensualbecario());
        $expediente->setDireccionExpbecario($solicitudbecario->getDireccionsolibecario());
        $expediente->setDocExpidentidadbecario($solicitudbecario->getDocsoliidentidadbecario());
        $expediente->setDuracionExpcarrerabecario($solicitudbecario->getDuracionsolicarrerabecario());
        $expediente->setFechaNacimiento($solicitudbecario->getFechaNacimiento());
        $expediente->setIdusuario($solicitudbecario->getIdusuario());
        $expediente->setIngresosExpfamiliabecario($solicitudbecario->getIngresossolifamiliabecario());
        $expediente->setMiembrosExpfamiliabecario($solicitudbecario->getMiembrossolifamiliabecario());
        $expediente->setMontootrasbecas($solicitudbecario->getMontootrasbecas());
        $expediente->setMontoExpmatriculabecario($solicitudbecario->getMontosolimatriculabecario());
        $expediente->setNomExpmadrebecario($solicitudbecario->getNomsolimadrebecario());
        $expediente->setNomExppadrebecario($solicitudbecario->getNomsolipadrebecario());
        $expediente->setOcupacionmadre($solicitudbecario->getOcupacionmadre());
        $expediente->setOcupacionpadre($solicitudbecario->getOcupacionpadre());
        $expediente->setOtrasbecas($solicitudbecario->getOtrasbecas());
        $expediente->setPaes($solicitudbecario->getPaes());
        $expediente->setReligion($solicitudbecario->getReligion());
        $expediente->setSexo($solicitudbecario->getSexo());
        $expediente->setTelefonoexpbecario($solicitudbecario->getTelefonosolibecario());
        $expediente->setTelExpemergenciabecario($solicitudbecario->getTelsoliemergenciabecario());
        $expediente->setTelExppersonalbecario($solicitudbecario->getTelsolipersonalbecario());
        $expediente->setTrabajoExpbecario($solicitudbecario->getTrabajosolibecario());
        $expediente->setUniversidadExpbecario($solicitudbecario->getUniversidadsolibecario());
        
         $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('SalexUserBundle:User')->findOneById($solicitudbecario->getIdusuario());
        

        if ($val == 1) {
            
            $expediente->setEstadoExpbecario(1);
            $solicitudbecario->setEstadosolibecario(1);
            $em = $this->getDoctrine()->getManager();
           
            $usuario = new User();
            $usuario = $em->getRepository('SalexUserBundle:User')->findOneById($expediente->getIdusuario());
            $expediente->setNombrebecario($usuario->getFirstName(). ' '. $usuario->getLastName());
            
            $em->persist($expediente);
            $em->flush($expediente);
            $em->persist($solicitudbecario);
            $em->flush($solicitudbecario);
            $user->addRole('ROLE_BECARIO');
            $user->removeRole('ROLE_ASPIRANTE_BECARIO');
            $em->persist($user);
            $em->flush($user);
            
           
            
            $msj = "Solicitud aprobada con exito!";
            $this->addFlash('success', $msj);
        return $this->redirectToRoute('solicitudbecario_index');
        } elseif ($val == 2) {
            $descripcion=$request->get("descripcion");
            $solicitudbecario->setObservacionrechazo($descripcion);
            $solicitudbecario->setEstadosolibecario(2);
            $this->getDoctrine()->getManager()->flush();
            $msj = "El movimiento ha sido rechazado!";
            $this->addFlash('success', $msj);
        return $this->redirectToRoute('solicitudbecario_index');
        }

        
    }

    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/{id}", name="solicitudbecario_show_delete")
     * @Method("GET")
     */
    public function showDeleteAction(Solicitudbecario $solicitudbecario) {
        $deleteForm = $this->createDeleteForm($solicitudbecario);

        return $this->render('solicitudbecario/Solicitudbecarioshowdelete.html.twig', array(
                    'solicitudbecario' => $solicitudbecario,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing solicitudbecario entity.
     *
     * @Route("/{id}/edit", name="solicitudbecario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Solicitudbecario $solicitudbecario) {
        $deleteForm = $this->createDeleteForm($solicitudbecario);
        $editForm = $this->createForm('AppBundle\Form\SolicitudbecarioType', $solicitudbecario);
        $solicitudbecario->setEstadosolibecario(0);
        $editForm->handleRequest($request);
       
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Solicitud Modificada con Exito!');
            return $this->redirectToRoute('solicitudbecario_index');
        }

        return $this->render('solicitudbecario/Solicitudbecarioedit.html.twig', array(
                    'solicitudbecario' => $solicitudbecario,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a solicitudbecario entity.
     *
     * @Route("/{id}", name="solicitudbecario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Solicitudbecario $solicitudbecario) {
        $form = $this->createDeleteForm($solicitudbecario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($solicitudbecario);
            $em->flush($solicitudbecario);
        }

        return $this->redirectToRoute('solicitudbecario_index');
    }

    /**
     * Creates a form to delete a solicitudbecario entity.
     *
     * @param Solicitudbecario $solicitudbecario The solicitudbecario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Solicitudbecario $solicitudbecario) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('solicitudbecario_delete', array('id' => $solicitudbecario->getIdsolibecario())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}

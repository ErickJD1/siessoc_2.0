<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscripcion;
use AppBundle\Entity\Expedientebecario;
use AppBundle\Entity\MateriaInscripcion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Inscripcion controller.
 *
 * @Route("inscripcion")
 */
class InscripcionController extends Controller {

    /**
     * Lists all inscripcion entities.
     *
     * @Route("/", name="inscripcion_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $inscripcions = $em->getRepository('AppBundle:Inscripcion')->findAll();

        return $this->render('inscripcion/inscripcionindex.html.twig', array(
                    'inscripcions' => $inscripcions,
        ));
    }

    /**
     * Creates a new inscripcion entity.
     *
     * @Route("/new", name="inscripcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $inscripcion = new Inscripcion();
        $form = $this->createForm('AppBundle\Form\InscripcionType', $inscripcion);
        $form->handleRequest($request);
        $contador = $request->get("contar");

        if ($form->isSubmitted() && $form->isValid()) {
            $expediente = new Expedientebecario;
            $em = $this->getDoctrine()->getManager();
            $expediente = $em->getRepository('AppBundle:Expedientebecario')->findOneByIdusuario($this->getUser()->getId());
            $inscripcion->setIdexpbecario($expediente);
           // $inscripcion->setCreatedAt(new \DateTime());
            $inscripcion->setEstadoinscripcion(0);
            //$inscripcion->setComprobante($nombre1);
            $em->persist($inscripcion);
            $em->flush($inscripcion);
//            $idIns[]=array();
//            $inscripciones = $em->getRepository('AppBundle:Inscripcion')->findByIdexpbecario($expediente->getIdExpbecario());
//            $i=0;
//            foreach ($inscripciones as $row){
//                $idIns[$i] = $row->getIdinscripcion();
//                $i++;
//            }
//            $max=-1;
//            for ($i=0;$i++;$i<$idIns.lenght()){
//                
//                if ($max>$idIns[$i]){
//                   $max=$idIns[$i];  
//                }
//            }
            
            $id=$inscripcion->getIdinscripcion();
           
            for ($i = 1; $i <= $contador; $i++) {
                $materia = new MateriaInscripcion();
                $nombremateria = $request->get("nombremateria" . $i);
                $numinscripcion = $request->get("inscripcion" . $i);
                $materia->setNombremateria($nombremateria);
                $materia->setNuminscripcion($numinscripcion);
                $materia->setEstado(0);
                //$materia->setIdinscripcion($max);
                $materia->setIdinscripcion($inscripcion);
                $em->persist($materia);
                $em->flush($materia);
            }
            
            return $this->redirectToRoute('inscripcion_index');
        }

        return $this->render('inscripcion/inscripcionnew.html.twig', array(
                    'inscripcion' => $inscripcion,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a inscripcion entity.
     *
     * @Route("/{id}", name="inscripcion_show")
     * @Method("GET")
     */
    public function showAction(Inscripcion $inscripcion) {
        $deleteForm = $this->createDeleteForm($inscripcion);
        $materiaInscripcion = new MateriaInscripcion();
        $em = $this->getDoctrine()->getManager();
        $materiaInscripcion=$em->getRepository('AppBundle:MateriaInscripcion')->findByIdinscripcion($inscripcion->getIdinscripcion());

        return $this->render('inscripcion/inscripcionshow.html.twig', array(
                    'inscripcion' => $inscripcion,
                    'materiainscripcion' => $materiaInscripcion,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscripcion entity.
     *
     * @Route("/{id}/edit", name="inscripcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscripcion $inscripcion) {
        $deleteForm = $this->createDeleteForm($inscripcion);
        $editForm = $this->createForm('AppBundle\Form\InscripcionType', $inscripcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inscripcion_edit', array('id' => $inscripcion->getIdinscripcion()));
        }

        return $this->render('inscripcion/inscripcionedit.html.twig', array(
                    'inscripcion' => $inscripcion,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inscripcion entity.
     *
     * @Route("/{id}", name="inscripcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscripcion $inscripcion) {
        $form = $this->createDeleteForm($inscripcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscripcion);
            $em->flush($inscripcion);
        }

        return $this->redirectToRoute('inscripcion_index');
    }

    /**
     * Creates a form to delete a inscripcion entity.
     *
     * @param Inscripcion $inscripcion The inscripcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscripcion $inscripcion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('inscripcion_delete', array('id' => $inscripcion->getIdinscripcion())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    
    
    
    /**
     * Displays a form to edit an existing movimiento entity.
     *
     * @Route("/aprobacion/{id}?{val}", name="inscripcion_aprobacion")
     * @Method({"GET", "POST"})
     */
    public function aprobacionAction(Request $request, Inscripcion $inscripcion, $val) {
        $descripcion = $request->get("descripcion");

        $inscripcion->setUpdateAt(new \DateTime());
        if ($val == 1) {
            $inscripcion->setEstadoinscripcion(1);
            $this->getDoctrine()->getManager()->flush();
            $msj = "Inscripción aprobado con exito!";
            $this->addFlash('success', $msj);
        } elseif ($val == 2) {
            $inscripcion->setEstadoinscripcion(2);
            $inscripcion->setObservaciones($descripcion);
            $this->getDoctrine()->getManager()->flush();
            $msj = "La inscripción ha sido rechazada!";
            $this->addFlash('warning', $msj);
        }
        
        return $this->redirectToRoute('inscripcion_index', array('id' => $inscripcion->getIdinscripcion()));
    }

}

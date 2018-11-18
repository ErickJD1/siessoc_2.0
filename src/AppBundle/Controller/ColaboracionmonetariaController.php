<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Colaboracionmonetaria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Banco controller.
 *
 * @Route("Colaboracionmonetaria")
 */

class ColaboracionmonetariaController extends Controller
{

  /**
     * @Route("/", name="Colaboracionmonetaria_index")
     */
    public function showAllPostAction(Request $request)
    {
        // replace this example code with whatever you need
        $colaboracion = $this->getDoctrine()->getRepository('AppBundle:Colaboracionmonetaria')->findAll();
        return $this->render('Colaboracionmonetaria/colaboracionindex.html.twig', ['colaboracion' => $colaboracion]);
    }

    /**
     * @Route("/create", name="Colaboracionmonetaria_new")
     * @Method({"GET", "POST"})
     */
     public function createColaboracionAction(Request $request)
{
    $colaboracionmonetaria = new Colaboracionmonetaria;
    $form = $this->createFormBuilder($colaboracionmonetaria)
    ->add('Descripcioncolaboracion',TextareaType::class, array('label'=>'Descripcion','attr' => array('class' => 'form-control')))
    ->add('Montomescolaboracion',TextType::class, array('label'=>'Monto$','attr' => array('class' => 'form-control')))
    ->add('Saldocolaboracion',TextType::class, array('label'=>'Saldo$','attr' => array('class' => 'form-control')))
    ->add('Estadocolaboracion',CheckboxType::class, array('label'=>'Estado'))
    ->add('save',SubmitType::class, array('label' => 'Guardar', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:10px')))
    ->getForm();

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $descripcioncolaboracion = $form['Descripcioncolaboracion']->getData();
      $montomescolaboracion = $form['Montomescolaboracion']->getData();
      $saldocolaboracion = $form['Saldocolaboracion']->getData();
      $estadocolaboracion = $form['Estadocolaboracion']->getData();

      $colaboracionmonetaria->setDescripcioncolaboracion($descripcioncolaboracion);
      $colaboracionmonetaria->setMontomescolaboracion($montomescolaboracion);
      $colaboracionmonetaria->setSaldocolaboracion($saldocolaboracion);
      $colaboracionmonetaria->setEstadocolaboracion($estadocolaboracion);

      $em = $this->getDoctrine()->getManager();
      $em->persist($colaboracionmonetaria);
      $em->flush();

      $this->addFlash('success', 'Colaboracion Registrada Exitosamente!');
      return $this->redirectToRoute('Colaboracionmonetaria_index');
    }

      return $this->render('colaboracionmonetaria/colaboracionnew.html.twig',
          ['form'=> $form->createView()
        ]);
}

/**
   * @Route("/{id}", name="Colaboracionmonetaria_show")
   * @Method("GET")
   */
  public function showColaboracionAction($id)
  {
    $colaboracion = $this->getDoctrine()->getRepository('AppBundle:Colaboracionmonetaria')->find($id);

    return $this->render('colaboracionmonetaria/Colaboracionshow.html.twig', ['colaboracion' => $colaboracion]);
  }

  /**
   * @Route("/edit/{id}", name="Colaboracionmonetaria_edit")
   * @Method("POST")
   */
   public function editColaboracionAction(Request $request, $id)
{
  $colaboracionmonetaria = $this->getDoctrine()->getRepository('AppBundle:Colaboracionmonetaria')->find($id);
  $colaboracionmonetaria->setDescripcioncolaboracion($colaboracionmonetaria->getDescripcioncolaboracion());
  $colaboracionmonetaria->setMontomescolaboracion($colaboracionmonetaria->getMontomescolaboracion());
  $colaboracionmonetaria->setSaldocolaboracion($colaboracionmonetaria->getSaldocolaboracion());
  $colaboracionmonetaria->setEstadocolaboracion($colaboracionmonetaria->getEstadocolaboracion());

  $form = $this->createFormBuilder($colaboracionmonetaria)
  ->add('Descripcioncolaboracion',TextareaType::class, array('label'=>'Descripcion','attr' => array('class' => 'form-control')))
  ->add('Montomescolaboracion',TextType::class, array('label'=>'Monto$','attr' => array('class' => 'form-control')))
  ->add('Saldocolaboracion',TextType::class, array('label'=>'Saldo$','attr' => array('class' => 'form-control')))
  ->add('Estadocolaboracion',CheckboxType::class, array('label'=>'Estado'))
  ->add('save',SubmitType::class, array('label' => 'Guardar', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:10px')))
  ->getForm();

  $form->handleRequest($request);
  if($form->isSubmitted() && $form->isValid()){
    $descripcioncolaboracion = $form['Descripcioncolaboracion']->getData();
    $montomescolaboracion = $form['Montomescolaboracion']->getData();
    $saldocolaboracion = $form['Saldocolaboracion']->getData();
    $estadocolaboracion = $form['Estadocolaboracion']->getData();
    $em = $this->getDoctrine()->getManager();


    $colaboracionmonetaria->setDescripcioncolaboracion($descripcioncolaboracion);
    $colaboracionmonetaria->setMontomescolaboracion($montomescolaboracion);
    $colaboracionmonetaria->setSaldocolaboracion($saldocolaboracion);
    $colaboracionmonetaria->setEstadocolaboracion($estadocolaboracion);

    $em->flush();
    $this->addFlash('success', 'Colaboracion Actualizada Exitosamente!');
    return $this->redirectToRoute('Colaboracionmonetaria_index');
  }

    return $this->render('colaboracionmonetaria/colaboracionedit.html.twig',
        ['colaboracionmonetaria' => $colaboracionmonetaria,
          'edit_form'=> $form->createView()
      ]);

}
}

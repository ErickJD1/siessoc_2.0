<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class SolicitudbecarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('telefonosolibecario', null, array('label'=>'Telefono','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 8)))
                ->add('ingresossolifamiliabecario', null, array('label'=>'Ingreso Familiar'))
                ->add('miembrossolifamiliabecario',null, array('label'=>'Cantidad de miembros de la familia','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('tiposolicasabecario', null, array('label'=>'Tipo de solicitud'))
                ->add('carrerasoliestudiarbecario', null, array('label'=>'Carrera a estudiar'))
                ->add('universidadsolibecario',null, array('label'=>'Universidad'))
                ->add('montosolimatriculabecario',null, array('label'=>'Monto Matricula','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('cuotasolimensualbecario',null, array('label'=>'Cuota Mensual','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('duracionsolicarrerabecario',null, array('label'=>'Duracion de la carrera','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('trabajosolibecario', CheckboxType::class, array('label'=>'SI'))
                ->add('docsoliidentidadbecario',  null, array('label'=>'Numero de documento','invalid_message'=>'Dui Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('aniosoliingresobecario', DateType::class, array('label'=>'Fecha De Ingreso','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('aniosolifinalizacionbecario', DateType::class, array('label'=>'Fecha De Finalizacion','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('cantsolihermanosbecario',null, array('label'=>'Cantidad de Hermanos','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('nomsolipadrebecario', null, array('label'=>'Nombre Del Padre'))
                ->add('nomsolimadrebecario', null, array('label'=>'Nombre De La Madre'))
                ->add('telsoliemergenciabecario', null, array('label'=>'Telefono De Emergencia','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 8)))
                ->add('telsolipersonalbecario', null, array('label'=>'Telefono Personal Del Becario','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 8)))
                ->add('direccionsolibecario',TextareaType::class,array('label'=>'Direccion Del Becario'))
                ->add('estadosolibecario', CheckboxType::class, array('label'=>'Activo'))
                ->add('religion',TextareaType::class,array('label'=>'Religion'))
                ->add('edad',null, array('label'=>'Edad','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('sexo', ChoiceType::class, array('label'=>'Sexo','choices'=>array('M'=>'M', 'F'=>'F'),'placeholder'=>'Seleccionar Sexos'))
                ->add('paes',null, array('label'=>'Paes','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 3)))
                ->add('ocupacionpadre',TextareaType::class,array('label'=>'Ocupacion Padre'))
                ->add('ocupacionmadre',TextareaType::class,array('label'=>'Ocupacion Madre'))
                ->add('otrasbecas', CheckboxType::class, array('label'=>'SI'))
                ->add('montootrasbecas',null, array('label'=>'Monto Otras Becas','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('antecedentes',TextareaType::class,array('label'=>'Antecedentes'))
                ->add('comprobante_file', VichImageType::class, array(
                    'required' => false,
                    'download_link' =>true,
                    'allow_delete' =>true,
                    
                    ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitudbecario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_solicitudbecario';
    }


}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use IT\InputMaskBundle\Form\Type\TextMaskType;
use IT\InputMaskBundle\Form\Type\EmailMaskType;
 use IT\InputMaskBundle\Form\Type\DateMaskType;

class SolicitudbecarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('telefonosolibecario', TextMaskType::class, array('label' => 'Otro Telefono', 'mask' => '99999999', 'required' => true))
                ->add('ingresossolifamiliabecario', MoneyType::class, array('label'=>'Ingreso Familiar'))
                ->add('miembrossolifamiliabecario',null, array('label'=>'Cantidad de miembros de la familia', 'required' => true))
//                ->add('tiposolicasabecario', ChoiceType::class, array('label'=>'Tipo De Solicitud','choices'=>array('Becario'=>'Becario', 'Patrocinador'=>'Patrocinador'),'placeholder'=>'Seleccionar Tipo De Solicitud'))
                ->add('carrerasoliestudiarbecario', null, array('label'=>'Carrera a estudiar', 'required' => true))
                ->add('universidadsolibecario',null, array('label'=>'Universidad'))
                ->add('montosolimatriculabecario',MoneyType::class, array('label'=>'Monto Matricula','invalid_message'=>'Se requiEre un valor númerico', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('cuotasolimensualbecario',MoneyType::class, array('label'=>'Cuota Mensual','invalid_message'=>'Se requiEre un valor númerico', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('duracionsolicarrerabecario',TextMaskType::class, array('label'=>'Duracion de la carrera', 'mask' => '9'))
                ->add('trabajosolibecario', ChoiceType::class, array('label'=>'¿Posee Trabajo?','choices'=>array('SI'=>'1', 'NO'=>'0'),'placeholder'=>''))
                ->add('docsoliidentidadbecario', TextMaskType::class, array('label' => 'Documento', 'mask' => '99999999-9', 'invalid_message'=>'Se requiEre un valor númerico', 'required' => true))
         
               // ->add('docsoliidentidadbecario',  null, array('label'=>'Numero de documento','invalid_message'=>'Dui Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('aniosoliingresobecario', DateType::class, array('label'=>'Fecha De Ingreso','data' =>( new \DateTime()),'widget'=>'single_text','format' => 'yyyy-MM-dd'))
                ->add('aniosolifinalizacionbecario', DateType::class, array('label'=>'Fecha De Finalizacion','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('cantsolihermanosbecario',null, array('label'=>'Cantidad de Hermanos','invalid_message'=>'Se requiere un valor númericoo', 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('nomsolipadrebecario', null, array('label'=>'Nombre Del Padre', 'required' => true))
                ->add('nomsolimadrebecario', null, array('label'=>'Nombre De La Madre', 'required' => true))
                ->add('telsoliemergenciabecario', TextMaskType::class, array('label'=>'Telefono De Emergencia', 'mask' => '99999999'))
                ->add('telsolipersonalbecario', TextMaskType::class, array('label' => 'Telefono', 'mask' => '99999999'))
                ->add('direccionsolibecario',TextareaType::class,array('label'=>'Direccion Del Becario'))
                ->add('religion',TextType::class,array('label'=>'Religion'))
                ->add('fechaNacimiento', DateType::class, array('label'=>'Fecha De Nacimiento','data' =>( new \DateTime()),'years' => range(date('Y'), date('Y') -50)))
                ->add('sexo', ChoiceType::class, array('label'=>'Sexo','choices'=>array('Masculino'=>'M', 'Femenino'=>'F'),'placeholder'=>''))
                ->add('paes', null, array('label'=>'Nota Paes','invalid_message'=>'Se requiere un valor númerico', 'invalid_message_parameters' => array('%num%' => 5)))
                ->add('ocupacionpadre',TextType::class,array('label'=>'Ocupacion Padre'))
                ->add('ocupacionmadre',TextType::class,array('label'=>'Ocupacion Madre'))
                ->add('otrasbecas', CheckboxType::class, array('label'=>'SI', 'required'=>false))
                ->add('montootrasbecas',MoneyType::class, array('label'=>'Monto Otras Becas', 'required'=>false, 'invalid_message'=>'Se requiere un valor númerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('antecedentes',TextareaType::class,array('label'=>'Antecedentes'))
                ->add('comprobante_file', VichFileType::class, array(
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

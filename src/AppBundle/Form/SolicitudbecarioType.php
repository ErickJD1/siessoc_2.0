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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SolicitudbecarioType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('telefonosolibecario', TextMaskType::class, array('label' => 'Otro Telefono', 'mask' => '99999999', 'required' => false))
                ->add('ingresossolifamiliabecario', MoneyType::class, array('label' => 'Ingreso Familiar', 'required' => false))
                ->add('miembrossolifamiliabecario', null, array('label' => 'Cantidad de miembros de la familia'))
//                ->add('tiposolicasabecario', ChoiceType::class, array('label'=>'Tipo De Solicitud','choices'=>array('Becario'=>'Becario', 'Patrocinador'=>'Patrocinador'),'placeholder'=>'Seleccionar Tipo De Solicitud'))
                ->add('carrerasoliestudiarbecario', null, array('label'=>'Carrera a estudiar', 'required' => false))
                ->add('universidadsolibecario',null, array('label'=>'Universidad', 'required' => false))
                ->add('montosolimatriculabecario',MoneyType::class, array('label'=>'Monto Matricula','invalid_message'=>'Se requiere un valor númerico','required' => false, 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('cuotasolimensualbecario',MoneyType::class, array('label'=>'Cuota Mensual','invalid_message'=>'Se requiere un valor númerico', 'required' => false, 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('duracionsolicarrerabecario',TextMaskType::class, array('label'=>'Duracion de la carrera', 'mask' => '9', 'required' => false))
                ->add('trabajosolibecario', ChoiceType::class, array('label'=>'¿Posee Trabajo?','choices'=>array('SI'=>'1', 'NO'=>'0'),'placeholder'=>'', 'required' => false))
                ->add('docsoliidentidadbecario', TextMaskType::class, array('label' => 'Documento', 'mask' => '9999-999999-999-9', 'invalid_message'=>'Se requiere un valor númerico', 'required' => false))
                ->add('aniosoliingresobecario', DateType::class, array('label'=>'Fecha De Ingreso','data' =>( new \DateTime()),'widget'=>'single_text','format' => 'yyyy-MM-dd', 'required' => false))
                ->add('aniosolifinalizacionbecario', DateType::class, array('label'=>'Fecha De Finalizacion','data' =>( new \DateTime()),'widget'=>'single_text', 'required' => false))
                ->add('cantsolihermanosbecario',null, array('label'=>'Cantidad de Hermanos','invalid_message'=>'Se requiere un valor númerico','required' => false, 'invalid_message_parameters' => array('%num%' => 2)))
                ->add('nomsolipadrebecario', null, array('label'=>'Nombre Del Padre', 'required' => false))
                ->add('nomsolimadrebecario', null, array('label'=>'Nombre De La Madre', 'required' => false))
                ->add('telsoliemergenciabecario', TextMaskType::class, array('label'=>'Telefono De Emergencia', 'mask' => '99999999', 'required' => false))

                ->add('telsolipersonalbecario', TextMaskType::class, array('label' => 'Telefono', 'mask' => '99999999', 'required' => false))
                ->add('direccionsolibecario', null, array('label' => 'Direccion Del Becario', 'required' => false))
                ->add('religion', TextType::class, array('label' => 'Religion', 'required' => false))
                ->add('fechaNacimiento', DateType::class, array('label' => 'Fecha De Nacimiento', 'required' => false, 'data' => ( new \DateTime()), 'years' => range(date('Y'), date('Y') - 50)))
                ->add('sexo', ChoiceType::class, array('label' => 'Sexo', 'required' => true, 'choices' => array('Masculino' => 'M', 'Femenino' => 'F'), 'placeholder' => 'Seleccione una opción'))
                ->add('paes', null, array('label' => 'Nota Paes', 'required' => false, 'invalid_message' => 'Se requiere un valor númerico', 'invalid_message_parameters' => array('%num%' => 5)))
                ->add('ocupacionpadre', TextType::class, array('label' => 'Ocupacion Padre', 'required' => false))
                ->add('ocupacionmadre', TextType::class, array('label' => 'Ocupacion Madre', 'required' => false))
                ->add('otrasbecas', CheckboxType::class, array('label' => 'SI', 'required' => false))
                ->add('montootrasbecas', MoneyType::class, array('label' => 'Monto Otras Becas', 'invalid_message' => 'Se requiere un valor númerico, maximo %num% de numero', 'required' => false, 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('antecedentes', TextareaType::class, array('label' => 'Antecedentes', 'required' => false))
                ->add('comprobante_file', VichFileType::class, array(
                    'required' => false,
                    'download_link' => true,
                    'allow_delete' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitudbecario',
            'attr' => ['id' => 'validate']
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_solicitudbecario';
    }

}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SolicitudpatrocinadorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('docidentidadsolipatrocinador',null,array('label'=>'Numero De Identidad', 'invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 10)))
                ->add('montoaportarsolipatrocinador',null,array('label'=>'Monto Patrocinado', 'invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 9)))
                ->add('telefonosolipatrocinador',null,array('label'=>'Telefono', 'invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 9)))
                ->add('direccionsolipatrocinador',TextareaType::class, array('label'=>'Direccion'));
             
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitudpatrocinador'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_solicitudpatrocinador';
    }


}

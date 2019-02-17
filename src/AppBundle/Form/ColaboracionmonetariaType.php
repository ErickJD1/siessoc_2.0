<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ColaboracionmonetariaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('montomescolaboracion',null, array('label'=>'Monto Colaboracion','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('descripcioncolaboracion', null, array('label'=>'Tipo Colaboracion'))
              //  ->add('saldocolaboracion',null, array('label'=>'Saldo','invalid_message'=>'Valor Incorrecto, Campo Numerico, maximo %num% de numero', 'invalid_message_parameters' => array('%num%' => 9)))
                ->add('estadocolaboracion', CheckboxType::class, array('label'=>'Activar', 'required'=>false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Colaboracionmonetaria'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_colaboracionmonetaria';
    }


}

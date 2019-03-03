<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class CuentaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numcuenta',null,array('label'=>'Número de Cuenta','invalid_message' => 'Número de cuenta excede la longitud permitida, el máximo de caracteres permitidos es %num%','invalid_message_parameters' => array('%num%' => 6)))
                ->add('nomcuenta',null,array('label'=>'Cuenta'))
                ->add('descripcioncuenta',TextareaType::class,array('label'=>'Descripción'))
              //  ->add('fechaapertura')
                ->add('saldocuenta',MoneyType::class,array('label'=>'Saldo Inicial','invalid_message' => 'Se requiere un saldo inicial mayor a cero','invalid_message_parameters' => array('%num%' => 6)))
                ->add('estadocuenta',null,array('label'=>'Activa'))
                ->add('idbanco',null,array('label'=>'Banco', 'placeholder'=> ''))
                ->add('idtipocuenta',null,array('label'=>'Tipo de Cuenta', 'placeholder' => '', 'required' => true));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cuenta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cuenta';
    }


}

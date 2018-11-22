<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CuentaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numcuenta',null,array('label'=>'Numero Cuenta','invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 6)))
                ->add('nomcuenta',null,array('label'=>'Nombre Cuenta'))
                ->add('descripcioncuenta',TextareaType::class,array('label'=>'Descripcion'))
              //  ->add('fechaapertura')
                ->add('saldocuenta',null,array('label'=>'Saldo Inicial','invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 6)))
                ->add('estadocuenta',null,array('label'=>'Estado'))
                ->add('idbanco',null,array('label'=>'Banco'))
                ->add('idtipocuenta',null,array('label'=>'Tipo Cuenta'));
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

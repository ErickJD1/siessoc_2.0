<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CuentaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numcuenta',null,array('label'=>'Numero Cuenta'))
                ->add('nomcuenta',null,array('label'=>'Nombre Cuenta'))
                ->add('descripcioncuenta',null,array('label'=>'Descripcion'))
              //  ->add('fechaapertura')
                ->add('saldocuenta',null,array('label'=>'Saldo Inicial'))
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

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class MovimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('descripcionmov',TextareaType::class, array('label'=>'Descripcion'))
                ->add('monto',null,array('label'=>'Monto', 'invalid_message' => 'Valor Incorreco Campo Numerico, maximo %num% caracteres','invalid_message_parameters' => array('%num%' => 9)))
                ->add('estadomov',null,array('label'=>'Estado'))
                ->add('idcuenta',null,array('label'=>'Cuenta'))
                ->add('idtipomov',null,array('label'=>'Tipo Movimiento'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_movimiento';
    }


}

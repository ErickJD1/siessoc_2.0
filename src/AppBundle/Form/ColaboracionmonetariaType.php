<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColaboracionmonetariaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('montomescolaboracion',null,array('label'=>'Monto $'))
                ->add('descripcioncolaboracion',null,array('label'=>'Descripcion'))
                ->add('saldocolaboracion',null,array('label'=>'Saldo $'))
                ->add('estadocolaboracion',null,array('label'=>'Estado'));
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

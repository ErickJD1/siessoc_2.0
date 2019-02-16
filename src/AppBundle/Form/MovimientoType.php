<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MovimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('descripcionmov',TextareaType::class, array('label'=>'Descripcion'))
                ->add('monto',null,array('label'=>'Monto', 'invalid_message' => 'Se require un valor numérico con un máximo de %num% caracteres','invalid_message_parameters' => array('%num%' => 9)))
                ->add('idcuenta',EntityType::class,array('class'=>'AppBundle:Cuenta'))
                ->add('idtipomov')
                ->add('comprobante_file', VichFileType::class, array(
                    'required' => false,
                    'download_link' =>false,
                    'allow_delete' =>true,
                    ));

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

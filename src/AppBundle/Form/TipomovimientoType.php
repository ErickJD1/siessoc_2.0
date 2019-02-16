<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TipomovimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombretipo',null,array('label'=>'Nombre Tipo Movimiento','attr'=>array('placeholder'=>'Ej: Ingreso de fondos')))
                ->add('descripciontipomov',TextareaType::class,array('label'=>'Descripción'))
                ->add('clasificacion',ChoiceType::class,array('label'=>'Clasificación','placeholder' => '','choices'=>array('Ingreso'=>1, 'Egreso'=>0)))
                ->add('estadotipomov',null,array('label'=>'Activo','data'=>TRUE)) ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Tipomovimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tipomovimiento';
    }


}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ActividadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomactividad', NULL, array('label'=>'Nombre De La Actividad'))
                ->add('fechaactividad', DateType::class, array('label'=>'Fecha De La Actividad','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('descripcionactividad',TextareaType::class,array('label'=>'Descripcion'))
                ->add('estadoactividad', CheckboxType::class, array('label'=>'Estado')) 
                ->add('requisito', CheckboxType::class, array('label'=>'Requisito'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Actividad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividad';
    }


}

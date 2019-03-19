<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ServiciosocialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

                ->add('idexpbecario', EntityType::class, array(
                      'label' => 'nombrebecario',
                      'class' => 'AppBundle:Expedientebecario',
                      'choice_value' => 'idexpbecario',
                      'choice_label' => 'nombrebecario',
                      'placeholder' => 'Seleccione un becario'))
                ->add('fechaaprovacionservicio', DateType::class, array('widget' => 'single_text','label'=>'Fecha Aprobacion','data' =>( new \DateTime())))
                ->add('fechainicioservicio', DateType::class, array('widget' => 'single_text','label'=>'Fecha Inicio','data' =>( new \DateTime())))
                ->add('fechafinservicio', DateType::class, array('widget' => 'single_text','label'=>'Fecha Finalizacion','data' =>( new \DateTime())))
                ->add('estadoservicio', CheckboxType::class, array('label'=>'APROBAR', 'required' => false))
                ->add('idproyectservisocial',null,array('label'=>'Proyecto'))
                ->add('estadoproyecto', ChoiceType::class, array('label'=>'Estado Proyecto', 'required' => true, 'choices'=>array('En Curso'=>'En Curso', 'Finalizado'=>'Finalizado'),'placeholder'=>'Seleccione una opción'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Serviciosocial'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_serviciosocial';
    }


}

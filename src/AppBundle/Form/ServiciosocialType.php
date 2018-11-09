<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ServiciosocialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idexpbecario',null,array('label'=>'Becario'))
                ->add('fechaaprovacionservicio', DateType::class, array(
                    'widget' => 'single_text',
                    'label'=>'Fecha Aprobacion',
                  'data' =>( new \DateTime())))
                ->add('fechainicioservicio', DateType::class, array(
                    'widget' => 'single_text',
                    'label'=>'Fecha Inicio',
                  'data' =>( new \DateTime())))
                ->add('fechafinservicio', DateType::class, array(
                    'widget' => 'single_text',
                    'label'=>'Fecha Finalizacion',
                  'data' =>( new \DateTime())))
                ->add('estadoservicio')
                ->add('idproyectservisocial',null,array('label'=>'Proyecto'))        ;
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

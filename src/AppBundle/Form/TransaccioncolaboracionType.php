<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TransaccioncolaboracionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fechatransaccolabora', DateType::class, array('label'=>'Fecha De Ingreso','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('descripciontransaccolabora',TextareaType::class,array('label'=>'Descripcion de la transaccion'))
                ->add('montotrasaccolabora')
                ->add('mespagotransaccolabora', ChoiceType::class, array('label'=>'Mes De Transaccion','choices'=>array('Enero'=>'Enero', 'Febrero'=>'Febrero', 'Marzo'=>'Marzo', 'Abril'=>'Abril', 'Mayo'=>'Mayo', 'Junio'=>'Junio', 'Julio'=>'Julio', 'Agosto'=>'Agosto', 'Septiembre'=>'Septiembre', 'Octubre'=>'Octubre', 'Noviembre'=>'Noviembre', 'Diciembre'=>'Diciembre')))
                ->add('idcolaboracion')
                ->add('idtipotransaccion');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Transaccioncolaboracion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_transaccioncolaboracion';
    }


}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use IT\InputMaskBundle\Form\Type\TextMaskType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class InventarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cantidadinventario', TextMaskType::class, array('label' => 'Otro Telefono', 'mask' => '99999999', 'required' => true))
                ->add('fechainventario', DateType::class, array('label'=>'Fecha De Nacimiento','data' =>( new \DateTime()),'years' => range(date('Y'), date('Y') -50)))
                ->add('idinsumo') ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inventario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_inventario';
    }


}

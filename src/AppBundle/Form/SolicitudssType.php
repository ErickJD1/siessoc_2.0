<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SolicitudssType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreproyecto',TextType::class, array('label' => 'Proyecto', 'attr' => array('class' => 'form-control')))
      ->add('descripcion',TextareaType::class, array('attr' => array('class' => 'form-control')))
      ->add('encargado',TextType::class, array('attr' => array('class' => 'form-control')))
      ->add('lugar',TextType::class, array('attr' => array('class' => 'form-control')))
      ->add('estado',TextType::class, array('attr' => array('class' => 'form-control')));

      //->add('nombreproyecto')->add('descripcion')->add('encargado')->add('lugar')->add('estado')        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitudss'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_solicitudss';
    }


}

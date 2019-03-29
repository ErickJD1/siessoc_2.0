<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', NULL, array('label'=>'Nombre', 'required' => true))
                ->add('correo', EmailType::class, array('label'=>'Correo', 'required' => true))
                ->add('asunto', ChoiceType::class, [
                      'choices'  => [
                      'Quiero ser patrocinador' => 'Quiero ser patrocinador',
                      'Quiero ser becario' => 'Quiero ser becario',
                      'Otro' => 'Otro', ],], array('label'=>'Asunto', 'required' => true))
                ->add('mensaje',TextareaType::class,array('label'=>'Mensaje', 'required' => true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contacto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contacto';
    }


}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class PublicacioncontenidoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titulo')
                ->add('subtitulo')
                ->add('descripcioncontenido',TextareaType::class, array('label'=>'Descripcion'))
                ->add('fechacontenido', DateType::class, array('label'=>'Fecha De Publicacion Del Contenido','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('contenido_picture_file', VichImageType::class, array('required' => false,'label' => 'Contenido','allow_delete' => true,'download_link' => true,))
                ->add('estadocontenido', CheckboxType::class, array('label'=>'Estado'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Publicacioncontenido'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_publicacioncontenido';
    }


}

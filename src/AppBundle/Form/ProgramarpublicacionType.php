<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProgramarpublicacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fechapublicacion', DateType::class, array('label'=>'Fecha De Publicacion','data' =>( new \DateTime()),'widget'=>'single_text'))
                ->add('horapublicacion', TimeType::class, array('label'=>'Hora De Publiacion', 'input'  => 'datetime','widget' => 'choice',))
                ->add('idcontenido', NULL, array('label'=>'Publicacion'))
                ->add('estadopulicacion', NULL, array('label'=>'Programar'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Programarpublicacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_programarpublicacion';
    }


}

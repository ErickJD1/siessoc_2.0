<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class InscripcionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idexpbecario')
                ->add('comprobante_file', VichFileType::class, array(
                    'required' => false,
                    'download_link' =>false,
                    'allow_delete' =>true,
                    ))
                ->add('comprobante_file_notas', VichFileType::class, array(
                    'required' => false,
                    'download_link' =>false,
                    'allow_delete' =>true,
                    ))
                  ->add('anioinscripcion')
                  ->add('numcicloinscripcion')
                  ->add('estadoinscripcion')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inscripcion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_inscripcion';
    }


}

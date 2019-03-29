<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class InscripcionType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $today = getdate();
        $builder
                ->add('comprobante_file', VichFileType::class, array(
                    'required' => true,
                    'download_link' => false,
                    'allow_delete' => true,
                ))
                
                ->add('comprobante_file_notas', VichFileType::class, array(
                    'required' => false,
                    'download_link' => false,
                    'allow_delete' => true,
                ))
                ->add('anioinscripcion', null, [
                    'data' => $today['year'],
                    'attr'=>['readonly'=>'readonly']    
                ])->add('numcicloinscripcion',ChoiceType::class, array('choices' => ['Ciclo 1' => 1,
                        'Ciclo 2' => 2]))
                    ;
    }

    private function getYears($min, $max = 'current') {
        $years = range($min, ($max === 'current' ? date('Y') : $max));

        return array_combine($years, $years);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inscripcion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_inscripcion';
    }

}

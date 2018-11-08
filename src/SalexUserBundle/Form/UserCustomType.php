<?php

namespace SalexUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use FOS\UserBundle\Util\LegacyFormHelper;

class UserCustomType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstName')
                ->add('lastName')
                ->add('profile_picture_file', VichImageType::class, array(
                    'required' => false,
                    'label' => 'Profile Picture',
//                    'attr' => array('class'=>'btn btn-success '),

                        )
                )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'SalexUserBundle\Entity\User',
            'validation_groups' => 'Profile'
        ));
    }

    public function getBlockPrefix() {
        return 'salex_user_profile';
    }

    public function getName() {
        return $this->getBlockPrefix();
    }

}

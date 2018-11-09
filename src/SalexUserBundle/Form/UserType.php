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

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
                ->add('email', EmailType::class, array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
                ->add('firstName')
                ->add('lastName')
                ->add('lastName')
                /* ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                  'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                  'options' => array('translation_domain' => 'FOSUserBundle'),
                  'first_options' => array('label' => 'form.password'),
                  'second_options' => array('label' => 'form.password_confirmation'),
                  'invalid_message' => 'fos_user.password.mismatch',
                  )) */
                /*  ->add('createdAt', DateType::class, array(
                  'data' =>( new \DateTime())
                  )) */
                ->add('profile_picture_file', VichImageType::class, array(
                    'required' => false,
                    'label' => 'Profile Picture',
                    'allow_delete' => false,

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

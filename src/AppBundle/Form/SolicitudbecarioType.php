<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitudbecarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('telefonosolibecario')->add('ingresossolifamiliabecario')->add('miembrossolifamiliabecario')->add('tiposolicasabecario')->add('carrerasoliestudiarbecario')->add('universidadsolibecario')->add('montosolimatriculabecario')->add('cuotasolimensualbecario')->add('duracionsolicarrerabecario')->add('trabajosolibecario')->add('docsoliidentidadbecario')->add('aniosoliingresobecario')->add('aniosolifinalizacionbecario')->add('cantsolihermanosbecario')->add('nomsolipadrebecario')->add('nomsolimadrebecario')->add('telsoliemergenciabecario')->add('telsolipersonalbecario')->add('miembrossolifamilibecario')->add('direccionsolibecario')->add('estadosolibecario')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitudbecario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_solicitudbecario';
    }


}

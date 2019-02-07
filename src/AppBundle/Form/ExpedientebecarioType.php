<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpedientebecarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('telefonoexpbecario')->add('ingresosexpfamiliabecario')->add('miembrosexpfamiliabecario')->add('tipoexpcasabecario')->add('carreraexpestudiarbecario')->add('universidadexpbecario')->add('montoexpmatriculabecario')->add('cuotaexpmensualbecario')->add('duracionexpcarrerabecario')->add('trabajoexpbecario')->add('docexpidentidadbecario')->add('anioexpingresobecario')->add('anioexpfinalizacionbecario')->add('cantexphermanosbecario')->add('nomexppadrebecario')->add('nomexpmadrebecario')->add('telexpemergenciabecario')->add('telexppersonalbecario')->add('direccionexpbecario')->add('estadoexpbecario')->add('religion')->add('fechaNacimiento')->add('sexo')->add('paes')->add('ocupacionpadre')->add('ocupacionmadre')->add('otrasbecas')->add('montootrasbecas')->add('antecedentes')->add('comprobante')->add('idusuario')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientebecario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expedientebecario';
    }


}

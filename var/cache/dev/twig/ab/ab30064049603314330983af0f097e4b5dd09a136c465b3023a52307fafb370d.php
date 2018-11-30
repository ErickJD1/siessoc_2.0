<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35775692be15f6fd065ddc21849d20362a29422f1052dc517cf5dc3075ace5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20cb0c8441c13f503984c4c5005ee78f6f48c883e2df811e6a6bb8a3245d12fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb0c8441c13f503984c4c5005ee78f6f48c883e2df811e6a6bb8a3245d12fd->enter($__internal_20cb0c8441c13f503984c4c5005ee78f6f48c883e2df811e6a6bb8a3245d12fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_20cb0c8441c13f503984c4c5005ee78f6f48c883e2df811e6a6bb8a3245d12fd->leave($__internal_20cb0c8441c13f503984c4c5005ee78f6f48c883e2df811e6a6bb8a3245d12fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

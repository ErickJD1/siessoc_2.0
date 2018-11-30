<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ae1791e435629d0636511c8ff8c51d8ca457d1856409f970dc1d5f8bf5b134de extends Twig_Template
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
        $__internal_865a2f9a9e8b497d3c9cad612c4163b85f229bf7c73f16807623cef2e16e3268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865a2f9a9e8b497d3c9cad612c4163b85f229bf7c73f16807623cef2e16e3268->enter($__internal_865a2f9a9e8b497d3c9cad612c4163b85f229bf7c73f16807623cef2e16e3268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_865a2f9a9e8b497d3c9cad612c4163b85f229bf7c73f16807623cef2e16e3268->leave($__internal_865a2f9a9e8b497d3c9cad612c4163b85f229bf7c73f16807623cef2e16e3268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

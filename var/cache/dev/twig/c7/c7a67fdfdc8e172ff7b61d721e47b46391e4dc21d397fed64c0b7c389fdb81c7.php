<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7ff4b89a3ae69cfda5d29f26600af35ea5f5aadb1f54829f88b52d32ef019795 extends Twig_Template
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
        $__internal_75039caab6a3d8d21927344db41af191815030848183c8b89d3bff19828c8b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75039caab6a3d8d21927344db41af191815030848183c8b89d3bff19828c8b3e->enter($__internal_75039caab6a3d8d21927344db41af191815030848183c8b89d3bff19828c8b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_75039caab6a3d8d21927344db41af191815030848183c8b89d3bff19828c8b3e->leave($__internal_75039caab6a3d8d21927344db41af191815030848183c8b89d3bff19828c8b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_68b6be74ea306f56d3865cc28adb45abb9e05db9cacec4829f6549555b7ee7de extends Twig_Template
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
        $__internal_827d194040ba7d244fb49f66282dbccb1442f433da45708a6dd1b43b723bcdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827d194040ba7d244fb49f66282dbccb1442f433da45708a6dd1b43b723bcdca->enter($__internal_827d194040ba7d244fb49f66282dbccb1442f433da45708a6dd1b43b723bcdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_827d194040ba7d244fb49f66282dbccb1442f433da45708a6dd1b43b723bcdca->leave($__internal_827d194040ba7d244fb49f66282dbccb1442f433da45708a6dd1b43b723bcdca_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
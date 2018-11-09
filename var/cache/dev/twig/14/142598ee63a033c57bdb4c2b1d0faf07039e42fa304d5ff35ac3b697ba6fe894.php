<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_eed78afe409624639055b2aac6f696988a44db7467723230b6b80c3dd34a578d extends Twig_Template
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
        $__internal_63d7246eb3e9dd5093cfe3e0dcdcbb1c70a84547cafaae334c0d717f1964e90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d7246eb3e9dd5093cfe3e0dcdcbb1c70a84547cafaae334c0d717f1964e90c->enter($__internal_63d7246eb3e9dd5093cfe3e0dcdcbb1c70a84547cafaae334c0d717f1964e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_63d7246eb3e9dd5093cfe3e0dcdcbb1c70a84547cafaae334c0d717f1964e90c->leave($__internal_63d7246eb3e9dd5093cfe3e0dcdcbb1c70a84547cafaae334c0d717f1964e90c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

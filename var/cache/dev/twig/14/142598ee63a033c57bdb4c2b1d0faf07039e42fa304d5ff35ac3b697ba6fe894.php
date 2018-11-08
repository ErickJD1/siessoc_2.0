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
        $__internal_e7f71a4a913a697584e1fc5981787854c389cd5ce123914c404b89dfa6410cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f71a4a913a697584e1fc5981787854c389cd5ce123914c404b89dfa6410cda->enter($__internal_e7f71a4a913a697584e1fc5981787854c389cd5ce123914c404b89dfa6410cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e7f71a4a913a697584e1fc5981787854c389cd5ce123914c404b89dfa6410cda->leave($__internal_e7f71a4a913a697584e1fc5981787854c389cd5ce123914c404b89dfa6410cda_prof);

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

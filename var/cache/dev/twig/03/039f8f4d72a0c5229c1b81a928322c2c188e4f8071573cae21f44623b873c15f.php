<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7b22259cc22ef714e7fb81b400acb33a0c2b277cfdee391f1f9b79ebbdfd202a extends Twig_Template
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
        $__internal_0b864b0a96df06a201ba921bb31b5442f9b20dbc12fdf2075d010284823d86b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b864b0a96df06a201ba921bb31b5442f9b20dbc12fdf2075d010284823d86b0->enter($__internal_0b864b0a96df06a201ba921bb31b5442f9b20dbc12fdf2075d010284823d86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0b864b0a96df06a201ba921bb31b5442f9b20dbc12fdf2075d010284823d86b0->leave($__internal_0b864b0a96df06a201ba921bb31b5442f9b20dbc12fdf2075d010284823d86b0_prof);

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
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

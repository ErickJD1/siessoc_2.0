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
        $__internal_f0b40fdaa4350c840962e107c9b6b1a041a9dd0299112f3cc65e28b152fb5b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b40fdaa4350c840962e107c9b6b1a041a9dd0299112f3cc65e28b152fb5b56->enter($__internal_f0b40fdaa4350c840962e107c9b6b1a041a9dd0299112f3cc65e28b152fb5b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f0b40fdaa4350c840962e107c9b6b1a041a9dd0299112f3cc65e28b152fb5b56->leave($__internal_f0b40fdaa4350c840962e107c9b6b1a041a9dd0299112f3cc65e28b152fb5b56_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

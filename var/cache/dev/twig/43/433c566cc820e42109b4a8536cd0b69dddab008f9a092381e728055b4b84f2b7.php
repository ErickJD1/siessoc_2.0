<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_56f20af1104e17b80e8cad902b9e60980a6a7fe389a4b665cbe9ea91f9596126 extends Twig_Template
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
        $__internal_594d31ee5b1d93253d09c93461bd59acd3c4a837c6d3f32f010d5a4f4503dffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594d31ee5b1d93253d09c93461bd59acd3c4a837c6d3f32f010d5a4f4503dffa->enter($__internal_594d31ee5b1d93253d09c93461bd59acd3c4a837c6d3f32f010d5a4f4503dffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_594d31ee5b1d93253d09c93461bd59acd3c4a837c6d3f32f010d5a4f4503dffa->leave($__internal_594d31ee5b1d93253d09c93461bd59acd3c4a837c6d3f32f010d5a4f4503dffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

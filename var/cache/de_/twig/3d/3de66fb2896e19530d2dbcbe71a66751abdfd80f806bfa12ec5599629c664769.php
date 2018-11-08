<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_983f5ff5e7e6d59fe5432748e83f0e1fe720d5a418433ef7d3e258274b02051b extends Twig_Template
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
        $__internal_e35f820ed6e14c228a899f7d04fc80c502d3f2f2e269168ad8b28ee5d585e2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35f820ed6e14c228a899f7d04fc80c502d3f2f2e269168ad8b28ee5d585e2d0->enter($__internal_e35f820ed6e14c228a899f7d04fc80c502d3f2f2e269168ad8b28ee5d585e2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e35f820ed6e14c228a899f7d04fc80c502d3f2f2e269168ad8b28ee5d585e2d0->leave($__internal_e35f820ed6e14c228a899f7d04fc80c502d3f2f2e269168ad8b28ee5d585e2d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

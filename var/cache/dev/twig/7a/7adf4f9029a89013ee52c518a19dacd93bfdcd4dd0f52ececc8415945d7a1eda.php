<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a7619a8abca1d12940443149b049ab036f5ca95811c86454a6f282cef5f5b58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d38f2d43e0d7f916f4d3885ed7d5093838fba8e24f7f4a165b19afc6d9aecaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d38f2d43e0d7f916f4d3885ed7d5093838fba8e24f7f4a165b19afc6d9aecaa->enter($__internal_7d38f2d43e0d7f916f4d3885ed7d5093838fba8e24f7f4a165b19afc6d9aecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d38f2d43e0d7f916f4d3885ed7d5093838fba8e24f7f4a165b19afc6d9aecaa->leave($__internal_7d38f2d43e0d7f916f4d3885ed7d5093838fba8e24f7f4a165b19afc6d9aecaa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bc3699ec1b843970396f595dbe8d6852ec93d0e90000d77d6c54044f0c0cd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc3699ec1b843970396f595dbe8d6852ec93d0e90000d77d6c54044f0c0cd09->enter($__internal_9bc3699ec1b843970396f595dbe8d6852ec93d0e90000d77d6c54044f0c0cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9bc3699ec1b843970396f595dbe8d6852ec93d0e90000d77d6c54044f0c0cd09->leave($__internal_9bc3699ec1b843970396f595dbe8d6852ec93d0e90000d77d6c54044f0c0cd09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

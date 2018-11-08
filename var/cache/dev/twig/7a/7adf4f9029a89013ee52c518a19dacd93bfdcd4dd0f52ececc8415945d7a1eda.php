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
        $__internal_066a662087991af3a2795290cbe6ac32d7f2b7d0dfbcb5f0f0b18993dc9c2b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066a662087991af3a2795290cbe6ac32d7f2b7d0dfbcb5f0f0b18993dc9c2b3a->enter($__internal_066a662087991af3a2795290cbe6ac32d7f2b7d0dfbcb5f0f0b18993dc9c2b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_066a662087991af3a2795290cbe6ac32d7f2b7d0dfbcb5f0f0b18993dc9c2b3a->leave($__internal_066a662087991af3a2795290cbe6ac32d7f2b7d0dfbcb5f0f0b18993dc9c2b3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5207125fb76a695f48438f966c3e71daedb2653af1cfd806a097049999d2083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5207125fb76a695f48438f966c3e71daedb2653af1cfd806a097049999d2083d->enter($__internal_5207125fb76a695f48438f966c3e71daedb2653af1cfd806a097049999d2083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5207125fb76a695f48438f966c3e71daedb2653af1cfd806a097049999d2083d->leave($__internal_5207125fb76a695f48438f966c3e71daedb2653af1cfd806a097049999d2083d_prof);

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

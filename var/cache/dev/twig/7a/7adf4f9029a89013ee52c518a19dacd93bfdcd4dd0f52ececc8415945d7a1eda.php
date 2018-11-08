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
        $__internal_6fb71ce96bfb5100683c71bb9605f68dfae95d18950df5c3efc937025067bc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb71ce96bfb5100683c71bb9605f68dfae95d18950df5c3efc937025067bc25->enter($__internal_6fb71ce96bfb5100683c71bb9605f68dfae95d18950df5c3efc937025067bc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6fb71ce96bfb5100683c71bb9605f68dfae95d18950df5c3efc937025067bc25->leave($__internal_6fb71ce96bfb5100683c71bb9605f68dfae95d18950df5c3efc937025067bc25_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba60c0ad402263a989ac25ca14ab2c6501839c485c40a9471ff0c6f8ddef8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba60c0ad402263a989ac25ca14ab2c6501839c485c40a9471ff0c6f8ddef8d3->enter($__internal_0ba60c0ad402263a989ac25ca14ab2c6501839c485c40a9471ff0c6f8ddef8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ba60c0ad402263a989ac25ca14ab2c6501839c485c40a9471ff0c6f8ddef8d3->leave($__internal_0ba60c0ad402263a989ac25ca14ab2c6501839c485c40a9471ff0c6f8ddef8d3_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

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
        $__internal_e49826aea2e701529d83c1ae9b670a383d4dc534ec64405c1245273f010d74b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49826aea2e701529d83c1ae9b670a383d4dc534ec64405c1245273f010d74b7->enter($__internal_e49826aea2e701529d83c1ae9b670a383d4dc534ec64405c1245273f010d74b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e49826aea2e701529d83c1ae9b670a383d4dc534ec64405c1245273f010d74b7->leave($__internal_e49826aea2e701529d83c1ae9b670a383d4dc534ec64405c1245273f010d74b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1a54f5eaea1ea45ec249eca488a8357f342005d814e1a5b7ef6d50bdb9a8aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a54f5eaea1ea45ec249eca488a8357f342005d814e1a5b7ef6d50bdb9a8aa5->enter($__internal_f1a54f5eaea1ea45ec249eca488a8357f342005d814e1a5b7ef6d50bdb9a8aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f1a54f5eaea1ea45ec249eca488a8357f342005d814e1a5b7ef6d50bdb9a8aa5->leave($__internal_f1a54f5eaea1ea45ec249eca488a8357f342005d814e1a5b7ef6d50bdb9a8aa5_prof);

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

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_21e1e3772331346655e549a0e7a36800befa0daaeae5a5f312cb02ac8f6e0dc0 extends Twig_Template
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
        $__internal_658a340a357c4e7401176de98e5c0d00c5f6579b9979126f83b911bdb2401bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658a340a357c4e7401176de98e5c0d00c5f6579b9979126f83b911bdb2401bf5->enter($__internal_658a340a357c4e7401176de98e5c0d00c5f6579b9979126f83b911bdb2401bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_658a340a357c4e7401176de98e5c0d00c5f6579b9979126f83b911bdb2401bf5->leave($__internal_658a340a357c4e7401176de98e5c0d00c5f6579b9979126f83b911bdb2401bf5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3745022e7f1ea82bb1b20fda57f252bebca505af5fa9e9ec06fdf3a3185bc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3745022e7f1ea82bb1b20fda57f252bebca505af5fa9e9ec06fdf3a3185bc90->enter($__internal_c3745022e7f1ea82bb1b20fda57f252bebca505af5fa9e9ec06fdf3a3185bc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c3745022e7f1ea82bb1b20fda57f252bebca505af5fa9e9ec06fdf3a3185bc90->leave($__internal_c3745022e7f1ea82bb1b20fda57f252bebca505af5fa9e9ec06fdf3a3185bc90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

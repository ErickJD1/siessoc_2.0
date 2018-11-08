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
        $__internal_a32cea24b570c23b8c49c8104bf76c8f6a5ed4a7f4b3536ba0a288764a6b92da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32cea24b570c23b8c49c8104bf76c8f6a5ed4a7f4b3536ba0a288764a6b92da->enter($__internal_a32cea24b570c23b8c49c8104bf76c8f6a5ed4a7f4b3536ba0a288764a6b92da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a32cea24b570c23b8c49c8104bf76c8f6a5ed4a7f4b3536ba0a288764a6b92da->leave($__internal_a32cea24b570c23b8c49c8104bf76c8f6a5ed4a7f4b3536ba0a288764a6b92da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea734c0add206d6f751ea9d1529dd9eff155fdd64bb4cce1b2d5fd6ca997239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea734c0add206d6f751ea9d1529dd9eff155fdd64bb4cce1b2d5fd6ca997239f->enter($__internal_ea734c0add206d6f751ea9d1529dd9eff155fdd64bb4cce1b2d5fd6ca997239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea734c0add206d6f751ea9d1529dd9eff155fdd64bb4cce1b2d5fd6ca997239f->leave($__internal_ea734c0add206d6f751ea9d1529dd9eff155fdd64bb4cce1b2d5fd6ca997239f_prof);

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

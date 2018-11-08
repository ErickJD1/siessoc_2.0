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
        $__internal_1023c862c198710e50c23a795b3b3c2e36a5fb172734ab142d850ae3adfad69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1023c862c198710e50c23a795b3b3c2e36a5fb172734ab142d850ae3adfad69e->enter($__internal_1023c862c198710e50c23a795b3b3c2e36a5fb172734ab142d850ae3adfad69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1023c862c198710e50c23a795b3b3c2e36a5fb172734ab142d850ae3adfad69e->leave($__internal_1023c862c198710e50c23a795b3b3c2e36a5fb172734ab142d850ae3adfad69e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c63d9a6de0d2e4f23b0701ec69167b72e8f2c7d431d91a7d00b13b43c885d406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63d9a6de0d2e4f23b0701ec69167b72e8f2c7d431d91a7d00b13b43c885d406->enter($__internal_c63d9a6de0d2e4f23b0701ec69167b72e8f2c7d431d91a7d00b13b43c885d406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c63d9a6de0d2e4f23b0701ec69167b72e8f2c7d431d91a7d00b13b43c885d406->leave($__internal_c63d9a6de0d2e4f23b0701ec69167b72e8f2c7d431d91a7d00b13b43c885d406_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

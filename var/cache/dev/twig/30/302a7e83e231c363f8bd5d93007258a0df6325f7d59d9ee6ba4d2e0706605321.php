<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_116e49044ed501ce33c2f3b04c4bcf2954da40933a814f81956ae99110896026 extends Twig_Template
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
        $__internal_ae009bfb11af94ad19045091271297a9937dc8ac95f88a19f54cf0f0aed47ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae009bfb11af94ad19045091271297a9937dc8ac95f88a19f54cf0f0aed47ad5->enter($__internal_ae009bfb11af94ad19045091271297a9937dc8ac95f88a19f54cf0f0aed47ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ae009bfb11af94ad19045091271297a9937dc8ac95f88a19f54cf0f0aed47ad5->leave($__internal_ae009bfb11af94ad19045091271297a9937dc8ac95f88a19f54cf0f0aed47ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

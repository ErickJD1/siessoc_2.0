<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d24b0665db01e9fbd8ac8faf80ea12b11c0db2d6cc75cb97432e36ec34af10b5 extends Twig_Template
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
        $__internal_cd7484fb25c8b9ab5bdecda32bc2c75f5c9e0a6bed4ddac2bf24e7d988bc323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7484fb25c8b9ab5bdecda32bc2c75f5c9e0a6bed4ddac2bf24e7d988bc323d->enter($__internal_cd7484fb25c8b9ab5bdecda32bc2c75f5c9e0a6bed4ddac2bf24e7d988bc323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cd7484fb25c8b9ab5bdecda32bc2c75f5c9e0a6bed4ddac2bf24e7d988bc323d->leave($__internal_cd7484fb25c8b9ab5bdecda32bc2c75f5c9e0a6bed4ddac2bf24e7d988bc323d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

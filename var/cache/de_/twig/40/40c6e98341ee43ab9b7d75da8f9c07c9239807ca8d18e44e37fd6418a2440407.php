<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b08111f37246f3497bd973cc0f4c6b2d584a2166251b567586abde47ffcac296 extends Twig_Template
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
        $__internal_369856d4f86e8da32ed63eefcecf1eeea76641c85504d5362ad4e00d469394b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369856d4f86e8da32ed63eefcecf1eeea76641c85504d5362ad4e00d469394b9->enter($__internal_369856d4f86e8da32ed63eefcecf1eeea76641c85504d5362ad4e00d469394b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_369856d4f86e8da32ed63eefcecf1eeea76641c85504d5362ad4e00d469394b9->leave($__internal_369856d4f86e8da32ed63eefcecf1eeea76641c85504d5362ad4e00d469394b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb72122a0c85e6753d97ede4d4b300c0b145a6d17c8b83801aa9358ef4cc83f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58122ccdc01f38230b57b69b3eb61284b117a8f272b1f2e890e2fdadf52e2015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58122ccdc01f38230b57b69b3eb61284b117a8f272b1f2e890e2fdadf52e2015->enter($__internal_58122ccdc01f38230b57b69b3eb61284b117a8f272b1f2e890e2fdadf52e2015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58122ccdc01f38230b57b69b3eb61284b117a8f272b1f2e890e2fdadf52e2015->leave($__internal_58122ccdc01f38230b57b69b3eb61284b117a8f272b1f2e890e2fdadf52e2015_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86fabdd16adff53ae4212c7247a7d05867980e4bfd11c8d8f8545e519ea08842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fabdd16adff53ae4212c7247a7d05867980e4bfd11c8d8f8545e519ea08842->enter($__internal_86fabdd16adff53ae4212c7247a7d05867980e4bfd11c8d8f8545e519ea08842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86fabdd16adff53ae4212c7247a7d05867980e4bfd11c8d8f8545e519ea08842->leave($__internal_86fabdd16adff53ae4212c7247a7d05867980e4bfd11c8d8f8545e519ea08842_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85610fc7cad8ca98b0701359642ee991684aafb2bada975579b173a97db556f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85610fc7cad8ca98b0701359642ee991684aafb2bada975579b173a97db556f2->enter($__internal_85610fc7cad8ca98b0701359642ee991684aafb2bada975579b173a97db556f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85610fc7cad8ca98b0701359642ee991684aafb2bada975579b173a97db556f2->leave($__internal_85610fc7cad8ca98b0701359642ee991684aafb2bada975579b173a97db556f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_597baa98225a348ba0b628c4b9c35a59de9298e5a3d96f2a7ec0986c8b371734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597baa98225a348ba0b628c4b9c35a59de9298e5a3d96f2a7ec0986c8b371734->enter($__internal_597baa98225a348ba0b628c4b9c35a59de9298e5a3d96f2a7ec0986c8b371734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_597baa98225a348ba0b628c4b9c35a59de9298e5a3d96f2a7ec0986c8b371734->leave($__internal_597baa98225a348ba0b628c4b9c35a59de9298e5a3d96f2a7ec0986c8b371734_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

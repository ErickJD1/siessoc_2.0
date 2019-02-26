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
        $__internal_5e60ed085655f7bbe2bf2cf7ab819b54d33b46b21fa4dc8c4d3d27d218080ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e60ed085655f7bbe2bf2cf7ab819b54d33b46b21fa4dc8c4d3d27d218080ba6->enter($__internal_5e60ed085655f7bbe2bf2cf7ab819b54d33b46b21fa4dc8c4d3d27d218080ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e60ed085655f7bbe2bf2cf7ab819b54d33b46b21fa4dc8c4d3d27d218080ba6->leave($__internal_5e60ed085655f7bbe2bf2cf7ab819b54d33b46b21fa4dc8c4d3d27d218080ba6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b5a14b5fa48db509631711a21a9a3b2292b7c6afea9174da1c0ab56256bd0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5a14b5fa48db509631711a21a9a3b2292b7c6afea9174da1c0ab56256bd0ed->enter($__internal_1b5a14b5fa48db509631711a21a9a3b2292b7c6afea9174da1c0ab56256bd0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b5a14b5fa48db509631711a21a9a3b2292b7c6afea9174da1c0ab56256bd0ed->leave($__internal_1b5a14b5fa48db509631711a21a9a3b2292b7c6afea9174da1c0ab56256bd0ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27352b1eeabda09f1da77fd9930ec55def9369ca66e6f028ca05f9d220a84deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27352b1eeabda09f1da77fd9930ec55def9369ca66e6f028ca05f9d220a84deb->enter($__internal_27352b1eeabda09f1da77fd9930ec55def9369ca66e6f028ca05f9d220a84deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_27352b1eeabda09f1da77fd9930ec55def9369ca66e6f028ca05f9d220a84deb->leave($__internal_27352b1eeabda09f1da77fd9930ec55def9369ca66e6f028ca05f9d220a84deb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5970f2423a4c75c15d1dd54fd8e470bd30a126d9c27475fa77ee7ee14571302e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5970f2423a4c75c15d1dd54fd8e470bd30a126d9c27475fa77ee7ee14571302e->enter($__internal_5970f2423a4c75c15d1dd54fd8e470bd30a126d9c27475fa77ee7ee14571302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5970f2423a4c75c15d1dd54fd8e470bd30a126d9c27475fa77ee7ee14571302e->leave($__internal_5970f2423a4c75c15d1dd54fd8e470bd30a126d9c27475fa77ee7ee14571302e_prof);

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

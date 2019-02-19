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
        $__internal_8dc39cba40f40d2bc543e6c10dac4e4fc4f3d0ad078b284a67e4251f19c2428b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc39cba40f40d2bc543e6c10dac4e4fc4f3d0ad078b284a67e4251f19c2428b->enter($__internal_8dc39cba40f40d2bc543e6c10dac4e4fc4f3d0ad078b284a67e4251f19c2428b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc39cba40f40d2bc543e6c10dac4e4fc4f3d0ad078b284a67e4251f19c2428b->leave($__internal_8dc39cba40f40d2bc543e6c10dac4e4fc4f3d0ad078b284a67e4251f19c2428b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d18b5c8932004b653caa0d96a6196f0277a05aaae1c97e48412a0d3774a5eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18b5c8932004b653caa0d96a6196f0277a05aaae1c97e48412a0d3774a5eabc->enter($__internal_d18b5c8932004b653caa0d96a6196f0277a05aaae1c97e48412a0d3774a5eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d18b5c8932004b653caa0d96a6196f0277a05aaae1c97e48412a0d3774a5eabc->leave($__internal_d18b5c8932004b653caa0d96a6196f0277a05aaae1c97e48412a0d3774a5eabc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fea6cd88b048a85aaa28f0825cf9041d209476ca55db48cee35cccb07cf91ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea6cd88b048a85aaa28f0825cf9041d209476ca55db48cee35cccb07cf91ea6->enter($__internal_fea6cd88b048a85aaa28f0825cf9041d209476ca55db48cee35cccb07cf91ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fea6cd88b048a85aaa28f0825cf9041d209476ca55db48cee35cccb07cf91ea6->leave($__internal_fea6cd88b048a85aaa28f0825cf9041d209476ca55db48cee35cccb07cf91ea6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc25773f24e04c198725644f2d92ee28bde9c74866a7b22b59e1b64a4cd57b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc25773f24e04c198725644f2d92ee28bde9c74866a7b22b59e1b64a4cd57b5->enter($__internal_8cc25773f24e04c198725644f2d92ee28bde9c74866a7b22b59e1b64a4cd57b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8cc25773f24e04c198725644f2d92ee28bde9c74866a7b22b59e1b64a4cd57b5->leave($__internal_8cc25773f24e04c198725644f2d92ee28bde9c74866a7b22b59e1b64a4cd57b5_prof);

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

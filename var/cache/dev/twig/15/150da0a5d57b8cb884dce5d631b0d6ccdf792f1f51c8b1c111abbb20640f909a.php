<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ed12cd1b91a9af7027ed45f503d99dce532ce1c5a1d922a7271457669678ef0 extends Twig_Template
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
        $__internal_4047e17e403a77f716cbe3859aeb5e020c2735e8a07e3f323b7bb17942d7182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4047e17e403a77f716cbe3859aeb5e020c2735e8a07e3f323b7bb17942d7182c->enter($__internal_4047e17e403a77f716cbe3859aeb5e020c2735e8a07e3f323b7bb17942d7182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4047e17e403a77f716cbe3859aeb5e020c2735e8a07e3f323b7bb17942d7182c->leave($__internal_4047e17e403a77f716cbe3859aeb5e020c2735e8a07e3f323b7bb17942d7182c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c45dbf73840ca59e9b20f1af3501e37ece9b5bff25946ee657b9775648a441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c45dbf73840ca59e9b20f1af3501e37ece9b5bff25946ee657b9775648a441f->enter($__internal_6c45dbf73840ca59e9b20f1af3501e37ece9b5bff25946ee657b9775648a441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c45dbf73840ca59e9b20f1af3501e37ece9b5bff25946ee657b9775648a441f->leave($__internal_6c45dbf73840ca59e9b20f1af3501e37ece9b5bff25946ee657b9775648a441f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0a92773788ffc4e0c7b92c5882bb8cf5ab69c1327076bf6c2ba5df66cfc34a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a92773788ffc4e0c7b92c5882bb8cf5ab69c1327076bf6c2ba5df66cfc34a9->enter($__internal_d0a92773788ffc4e0c7b92c5882bb8cf5ab69c1327076bf6c2ba5df66cfc34a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0a92773788ffc4e0c7b92c5882bb8cf5ab69c1327076bf6c2ba5df66cfc34a9->leave($__internal_d0a92773788ffc4e0c7b92c5882bb8cf5ab69c1327076bf6c2ba5df66cfc34a9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_636e6b943520757aec3d1ce0b3ccb4f60718d588ad272597988d941f67b2549a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636e6b943520757aec3d1ce0b3ccb4f60718d588ad272597988d941f67b2549a->enter($__internal_636e6b943520757aec3d1ce0b3ccb4f60718d588ad272597988d941f67b2549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_636e6b943520757aec3d1ce0b3ccb4f60718d588ad272597988d941f67b2549a->leave($__internal_636e6b943520757aec3d1ce0b3ccb4f60718d588ad272597988d941f67b2549a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

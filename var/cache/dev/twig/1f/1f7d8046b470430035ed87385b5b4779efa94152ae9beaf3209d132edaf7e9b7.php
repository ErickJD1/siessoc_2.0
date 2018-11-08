<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7bcd0571319550da35307f88f79bd62cbe3f14cb37fe237a2b534af1527a6ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b75f6c36b5a7340c0e7c90fb725d576d217f75c2d9cc464c50e41843e2e43a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75f6c36b5a7340c0e7c90fb725d576d217f75c2d9cc464c50e41843e2e43a94->enter($__internal_b75f6c36b5a7340c0e7c90fb725d576d217f75c2d9cc464c50e41843e2e43a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75f6c36b5a7340c0e7c90fb725d576d217f75c2d9cc464c50e41843e2e43a94->leave($__internal_b75f6c36b5a7340c0e7c90fb725d576d217f75c2d9cc464c50e41843e2e43a94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41e7220e98af00c4b3369c7cf89c3a168bf2b8667937095bef86ec5de52c63b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e7220e98af00c4b3369c7cf89c3a168bf2b8667937095bef86ec5de52c63b3->enter($__internal_41e7220e98af00c4b3369c7cf89c3a168bf2b8667937095bef86ec5de52c63b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41e7220e98af00c4b3369c7cf89c3a168bf2b8667937095bef86ec5de52c63b3->leave($__internal_41e7220e98af00c4b3369c7cf89c3a168bf2b8667937095bef86ec5de52c63b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef93390e1cc4b410ed8bbb6fd493c70d67c62d8bfd1d2dad5e5b85a794318b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef93390e1cc4b410ed8bbb6fd493c70d67c62d8bfd1d2dad5e5b85a794318b78->enter($__internal_ef93390e1cc4b410ed8bbb6fd493c70d67c62d8bfd1d2dad5e5b85a794318b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef93390e1cc4b410ed8bbb6fd493c70d67c62d8bfd1d2dad5e5b85a794318b78->leave($__internal_ef93390e1cc4b410ed8bbb6fd493c70d67c62d8bfd1d2dad5e5b85a794318b78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79b26fa2f778fc9c043c5f5a067f3afbdeb44125caa0dcd4a200255a4f9a0560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b26fa2f778fc9c043c5f5a067f3afbdeb44125caa0dcd4a200255a4f9a0560->enter($__internal_79b26fa2f778fc9c043c5f5a067f3afbdeb44125caa0dcd4a200255a4f9a0560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_79b26fa2f778fc9c043c5f5a067f3afbdeb44125caa0dcd4a200255a4f9a0560->leave($__internal_79b26fa2f778fc9c043c5f5a067f3afbdeb44125caa0dcd4a200255a4f9a0560_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

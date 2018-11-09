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
        $__internal_3d9c5f0a11aacedee54fc66a78d8d1358165fb75037e71d62b70cb403ae5f27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9c5f0a11aacedee54fc66a78d8d1358165fb75037e71d62b70cb403ae5f27b->enter($__internal_3d9c5f0a11aacedee54fc66a78d8d1358165fb75037e71d62b70cb403ae5f27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9c5f0a11aacedee54fc66a78d8d1358165fb75037e71d62b70cb403ae5f27b->leave($__internal_3d9c5f0a11aacedee54fc66a78d8d1358165fb75037e71d62b70cb403ae5f27b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c16b0ccb6e57bddfa7f9de372a7023f999bd7cd67aaaf302f801228ae3c1dd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16b0ccb6e57bddfa7f9de372a7023f999bd7cd67aaaf302f801228ae3c1dd27->enter($__internal_c16b0ccb6e57bddfa7f9de372a7023f999bd7cd67aaaf302f801228ae3c1dd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c16b0ccb6e57bddfa7f9de372a7023f999bd7cd67aaaf302f801228ae3c1dd27->leave($__internal_c16b0ccb6e57bddfa7f9de372a7023f999bd7cd67aaaf302f801228ae3c1dd27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99f50b756e782ac05deb13c6549eccbbdc882e531e58ceeb6e1e85e5d41d68e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f50b756e782ac05deb13c6549eccbbdc882e531e58ceeb6e1e85e5d41d68e7->enter($__internal_99f50b756e782ac05deb13c6549eccbbdc882e531e58ceeb6e1e85e5d41d68e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_99f50b756e782ac05deb13c6549eccbbdc882e531e58ceeb6e1e85e5d41d68e7->leave($__internal_99f50b756e782ac05deb13c6549eccbbdc882e531e58ceeb6e1e85e5d41d68e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4177951d33e18f2adb080717f2e0392b98dce4ce0a4c7389871b03a53363edc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4177951d33e18f2adb080717f2e0392b98dce4ce0a4c7389871b03a53363edc7->enter($__internal_4177951d33e18f2adb080717f2e0392b98dce4ce0a4c7389871b03a53363edc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4177951d33e18f2adb080717f2e0392b98dce4ce0a4c7389871b03a53363edc7->leave($__internal_4177951d33e18f2adb080717f2e0392b98dce4ce0a4c7389871b03a53363edc7_prof);

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

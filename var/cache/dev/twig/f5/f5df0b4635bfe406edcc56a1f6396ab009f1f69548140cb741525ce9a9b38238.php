<?php

/* default/dashboard.html.twig */
class __TwigTemplate_5a2534516940c4a2855320bc89022434c7d9b281483482876248620284adea75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_379f3540f6d13d617167675409e522b4970c3847d8f5d452d263bce65e4f42e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379f3540f6d13d617167675409e522b4970c3847d8f5d452d263bce65e4f42e7->enter($__internal_379f3540f6d13d617167675409e522b4970c3847d8f5d452d263bce65e4f42e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_379f3540f6d13d617167675409e522b4970c3847d8f5d452d263bce65e4f42e7->leave($__internal_379f3540f6d13d617167675409e522b4970c3847d8f5d452d263bce65e4f42e7_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_350e0f2d30dd1cfeff2043ca6e3ffb4c4eb165e2128f344b44efbef543ba850d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350e0f2d30dd1cfeff2043ca6e3ffb4c4eb165e2128f344b44efbef543ba850d->enter($__internal_350e0f2d30dd1cfeff2043ca6e3ffb4c4eb165e2128f344b44efbef543ba850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_350e0f2d30dd1cfeff2043ca6e3ffb4c4eb165e2128f344b44efbef543ba850d->leave($__internal_350e0f2d30dd1cfeff2043ca6e3ffb4c4eb165e2128f344b44efbef543ba850d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d372c34ad15a454ccf0326574b15274407de2c6e5c8539b5d4bd924e9e03ba2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d372c34ad15a454ccf0326574b15274407de2c6e5c8539b5d4bd924e9e03ba2e->enter($__internal_d372c34ad15a454ccf0326574b15274407de2c6e5c8539b5d4bd924e9e03ba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"box box-primary\" align=\"center\" style=\"\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\"><STRONG>Bienvenido ";
        // line 6
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        }
        echo "</STRONG></h2>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\" width=\"25%\"></img>
        <h3 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\">Sistema Informático Para La Gestión De Becas Universitarias Del Proyecto Educational Scholarships For Students Of Chiltiupan</h3>
        </p>
        <br></br>
        <br></br>
    </div>
";
        
        $__internal_d372c34ad15a454ccf0326574b15274407de2c6e5c8539b5d4bd924e9e03ba2e->leave($__internal_d372c34ad15a454ccf0326574b15274407de2c6e5c8539b5d4bd924e9e03ba2e_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
    <div class=\"box box-primary\" align=\"center\" style=\"\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\"><STRONG>Bienvenido {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}{{app.user.getName()}}{% endif %}</STRONG></h2>
        <img src=\"{{ asset('bundles/app/images/logo.jpg') }}\" width=\"25%\"></img>
        <h3 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\">Sistema Informático Para La Gestión De Becas Universitarias Del Proyecto Educational Scholarships For Students Of Chiltiupan</h3>
        </p>
        <br></br>
        <br></br>
    </div>
{% endblock %}", "default/dashboard.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/dashboard.html.twig");
    }
}

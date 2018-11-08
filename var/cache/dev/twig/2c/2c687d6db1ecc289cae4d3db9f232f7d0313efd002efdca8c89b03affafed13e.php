<?php

/* :default:dashboard.html.twig */
class __TwigTemplate_1f8f3ba32e9b1287da09188dce49b1dacecd57232f4bfb4991066ebc4ec05cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":default:dashboard.html.twig", 1);
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
        $__internal_548bb14adb3c276da52180f88c16967d56cb70abd1f151fbde60226632e23378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548bb14adb3c276da52180f88c16967d56cb70abd1f151fbde60226632e23378->enter($__internal_548bb14adb3c276da52180f88c16967d56cb70abd1f151fbde60226632e23378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548bb14adb3c276da52180f88c16967d56cb70abd1f151fbde60226632e23378->leave($__internal_548bb14adb3c276da52180f88c16967d56cb70abd1f151fbde60226632e23378_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_53880704ba42c0f363e7fd5273508f9166671871e94f67e65b2469dce914bde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53880704ba42c0f363e7fd5273508f9166671871e94f67e65b2469dce914bde8->enter($__internal_53880704ba42c0f363e7fd5273508f9166671871e94f67e65b2469dce914bde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_53880704ba42c0f363e7fd5273508f9166671871e94f67e65b2469dce914bde8->leave($__internal_53880704ba42c0f363e7fd5273508f9166671871e94f67e65b2469dce914bde8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_16271846e33dec021569df4a63cb71e4868973fc2e8ffee3ed35d02158ee4e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16271846e33dec021569df4a63cb71e4868973fc2e8ffee3ed35d02158ee4e0d->enter($__internal_16271846e33dec021569df4a63cb71e4868973fc2e8ffee3ed35d02158ee4e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"box box-primary\" align=\"center\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color:darkgray\"><STRONG>Bienvenido ";
        // line 6
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        }
        echo "</STRONG></h2>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\" width=\"30%\"></img>
        <h3 style=\"color: lightslategrey\">SISTEMA INFORMÁTICO PARA LA GESTIÓN DE BECAS UNIVERSITARIAS DEL PROYECTO EDUCATIONAL SCHOLARSHIPS FOR STUDENTS OF CHILTIUPAN</h3>
        </p>
        <br></br>
        <br></br>
    </div>
";
        
        $__internal_16271846e33dec021569df4a63cb71e4868973fc2e8ffee3ed35d02158ee4e0d->leave($__internal_16271846e33dec021569df4a63cb71e4868973fc2e8ffee3ed35d02158ee4e0d_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashboard.html.twig";
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
    <div class=\"box box-primary\" align=\"center\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color:darkgray\"><STRONG>Bienvenido {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}{{app.user.getName()}}{% endif %}</STRONG></h2>
        <img src=\"{{ asset('bundles/app/images/logo.png') }}\" width=\"30%\"></img>
        <h3 style=\"color: lightslategrey\">SISTEMA INFORMÁTICO PARA LA GESTIÓN DE BECAS UNIVERSITARIAS DEL PROYECTO EDUCATIONAL SCHOLARSHIPS FOR STUDENTS OF CHILTIUPAN</h3>
        </p>
        <br></br>
        <br></br>
    </div>
{% endblock %}", ":default:dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/default/dashboard.html.twig");
    }
}

<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9aa3d7e2ccbcb4b73e44478d8480004dd2bc48eb3c1470c14b95c894ccf06822 extends Twig_Template
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
        $__internal_528ac9b2ccfb7354298fc9b222e63e35428e575dc5ce50fcf389ccdc342f1d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528ac9b2ccfb7354298fc9b222e63e35428e575dc5ce50fcf389ccdc342f1d71->enter($__internal_528ac9b2ccfb7354298fc9b222e63e35428e575dc5ce50fcf389ccdc342f1d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528ac9b2ccfb7354298fc9b222e63e35428e575dc5ce50fcf389ccdc342f1d71->leave($__internal_528ac9b2ccfb7354298fc9b222e63e35428e575dc5ce50fcf389ccdc342f1d71_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_844e9b3f6cb55d0dbda009583b04448ec84be792db837e29b07288c6ff376afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844e9b3f6cb55d0dbda009583b04448ec84be792db837e29b07288c6ff376afa->enter($__internal_844e9b3f6cb55d0dbda009583b04448ec84be792db837e29b07288c6ff376afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_844e9b3f6cb55d0dbda009583b04448ec84be792db837e29b07288c6ff376afa->leave($__internal_844e9b3f6cb55d0dbda009583b04448ec84be792db837e29b07288c6ff376afa_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_70c3588c09a1d36b24355a5b1e9126a590ea7bc0430e4e72b5064704ab65764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c3588c09a1d36b24355a5b1e9126a590ea7bc0430e4e72b5064704ab65764a->enter($__internal_70c3588c09a1d36b24355a5b1e9126a590ea7bc0430e4e72b5064704ab65764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_70c3588c09a1d36b24355a5b1e9126a590ea7bc0430e4e72b5064704ab65764a->leave($__internal_70c3588c09a1d36b24355a5b1e9126a590ea7bc0430e4e72b5064704ab65764a_prof);

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
    <div class=\"box box-primary\" align=\"center\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color:darkgray\"><STRONG>Bienvenido {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}{{app.user.getName()}}{% endif %}</STRONG></h2>
        <img src=\"{{ asset('bundles/app/images/logo.png') }}\" width=\"30%\"></img>
        <h3 style=\"color: lightslategrey\">SISTEMA INFORMÁTICO PARA LA GESTIÓN DE BECAS UNIVERSITARIAS DEL PROYECTO EDUCATIONAL SCHOLARSHIPS FOR STUDENTS OF CHILTIUPAN</h3>
        </p>
        <br></br>
        <br></br>
    </div>
{% endblock %}", "default/dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e1c46acae512e55f7b0da25c11ad630a589621e0505d37a67c23b740866766f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88bebf2271f69745bcde89245267861ba174e820a4078ab522fa6fac450fb772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bebf2271f69745bcde89245267861ba174e820a4078ab522fa6fac450fb772->enter($__internal_88bebf2271f69745bcde89245267861ba174e820a4078ab522fa6fac450fb772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88bebf2271f69745bcde89245267861ba174e820a4078ab522fa6fac450fb772->leave($__internal_88bebf2271f69745bcde89245267861ba174e820a4078ab522fa6fac450fb772_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91c327618b7ac7ebed6895042cae168317fd0a11ecfb4886b9343e6834990e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c327618b7ac7ebed6895042cae168317fd0a11ecfb4886b9343e6834990e8e->enter($__internal_91c327618b7ac7ebed6895042cae168317fd0a11ecfb4886b9343e6834990e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_91c327618b7ac7ebed6895042cae168317fd0a11ecfb4886b9343e6834990e8e->leave($__internal_91c327618b7ac7ebed6895042cae168317fd0a11ecfb4886b9343e6834990e8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_955f97b7383c12b3d1a94b8f60d4942b0e2c9fea27a8086b309be6af3d9153a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955f97b7383c12b3d1a94b8f60d4942b0e2c9fea27a8086b309be6af3d9153a4->enter($__internal_955f97b7383c12b3d1a94b8f60d4942b0e2c9fea27a8086b309be6af3d9153a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-success\"> 
        <div class=\"row\">
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:90px;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Becario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar una beca universitaria</h5>
                
            </div>
        </div>
        <hr>
        ";
        // line 19
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 19)->display($context);
        // line 20
        echo "    </div>
";
        
        $__internal_955f97b7383c12b3d1a94b8f60d4942b0e2c9fea27a8086b309be6af3d9153a4->leave($__internal_955f97b7383c12b3d1a94b8f60d4942b0e2c9fea27a8086b309be6af3d9153a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  75 => 19,  63 => 10,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{parent()}}
{% endblock %}
{% block body %}

    <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-success\"> 
        <div class=\"row\">
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:90px;\" src=\"{{ asset('img/user.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Becario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar una beca universitaria</h5>
                
            </div>
        </div>
        <hr>
        {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

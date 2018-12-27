<?php

/* FOSUserBundle:Registration:registerPatrocina.html.twig */
class __TwigTemplate_f507931170b06961d539de99a94984b6eaee003d744bbdaa302a4b2f2de86cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:registerPatrocina.html.twig", 1);
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
        $__internal_7c67bca1f5c3ef407413fdb652a3daa0fc431f2a6cb92617184217307fc69534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c67bca1f5c3ef407413fdb652a3daa0fc431f2a6cb92617184217307fc69534->enter($__internal_7c67bca1f5c3ef407413fdb652a3daa0fc431f2a6cb92617184217307fc69534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:registerPatrocina.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c67bca1f5c3ef407413fdb652a3daa0fc431f2a6cb92617184217307fc69534->leave($__internal_7c67bca1f5c3ef407413fdb652a3daa0fc431f2a6cb92617184217307fc69534_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cfe7312ba35039f9472dc3e3970ce6bf9267882f7531cc1ecb82dbcaf8b4785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfe7312ba35039f9472dc3e3970ce6bf9267882f7531cc1ecb82dbcaf8b4785->enter($__internal_5cfe7312ba35039f9472dc3e3970ce6bf9267882f7531cc1ecb82dbcaf8b4785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5cfe7312ba35039f9472dc3e3970ce6bf9267882f7531cc1ecb82dbcaf8b4785->leave($__internal_5cfe7312ba35039f9472dc3e3970ce6bf9267882f7531cc1ecb82dbcaf8b4785_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc949675acf8ef7c051480ce4ae4702e4681a845791ae0afb6031a4f9596d228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc949675acf8ef7c051480ce4ae4702e4681a845791ae0afb6031a4f9596d228->enter($__internal_cc949675acf8ef7c051480ce4ae4702e4681a845791ae0afb6031a4f9596d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 
        <div class=\"row\">
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:90px;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Patrocinador</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar ser parte del proyecto de becas universitarias</h5>

            </div>
        </div>
        <hr>

        ";
        // line 20
        $this->loadTemplate("FOSUserBundle:Registration:register_content_patrocina.html.twig", "FOSUserBundle:Registration:registerPatrocina.html.twig", 20)->display($context);
        // line 21
        echo "    </div>
";
        
        $__internal_cc949675acf8ef7c051480ce4ae4702e4681a845791ae0afb6031a4f9596d228->leave($__internal_cc949675acf8ef7c051480ce4ae4702e4681a845791ae0afb6031a4f9596d228_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:registerPatrocina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  76 => 20,  63 => 10,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
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

    <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 
        <div class=\"row\">
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:90px;\" src=\"{{ asset('img/user.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Patrocinador</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar ser parte del proyecto de becas universitarias</h5>

            </div>
        </div>
        <hr>

        {% include \"FOSUserBundle:Registration:register_content_patrocina.html.twig\" %}
    </div>
{% endblock%}
", "FOSUserBundle:Registration:registerPatrocina.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/registerPatrocina.html.twig");
    }
}

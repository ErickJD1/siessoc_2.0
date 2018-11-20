<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1077ffb3a6f19bcb548eae20526696ed77f56c4032ffa1b435ec7ab9465ae509 extends Twig_Template
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
        $__internal_8b7766767e8e87d82c90bdfe20593c0701a33c5822a171c2f15a7908babab1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7766767e8e87d82c90bdfe20593c0701a33c5822a171c2f15a7908babab1a7->enter($__internal_8b7766767e8e87d82c90bdfe20593c0701a33c5822a171c2f15a7908babab1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7766767e8e87d82c90bdfe20593c0701a33c5822a171c2f15a7908babab1a7->leave($__internal_8b7766767e8e87d82c90bdfe20593c0701a33c5822a171c2f15a7908babab1a7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e81c8e6adf4de4ca406593156c6e9f3bd273e1449c5a7d3b5deec76e789c2af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81c8e6adf4de4ca406593156c6e9f3bd273e1449c5a7d3b5deec76e789c2af4->enter($__internal_e81c8e6adf4de4ca406593156c6e9f3bd273e1449c5a7d3b5deec76e789c2af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e81c8e6adf4de4ca406593156c6e9f3bd273e1449c5a7d3b5deec76e789c2af4->leave($__internal_e81c8e6adf4de4ca406593156c6e9f3bd273e1449c5a7d3b5deec76e789c2af4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b322e6705be9da0a4798967255f04de33535215dafdae8ffe874dc27223b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b322e6705be9da0a4798967255f04de33535215dafdae8ffe874dc27223b4a->enter($__internal_64b322e6705be9da0a4798967255f04de33535215dafdae8ffe874dc27223b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64b322e6705be9da0a4798967255f04de33535215dafdae8ffe874dc27223b4a->leave($__internal_64b322e6705be9da0a4798967255f04de33535215dafdae8ffe874dc27223b4a_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}

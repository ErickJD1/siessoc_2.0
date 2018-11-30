<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_050a2973ca0224dd1a5d1baee5f4f378bd9308e07671c6e74a50b503386ed258 extends Twig_Template
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
        $__internal_d6d210eab8a6ad33a6cc601eb522837ac2dd857920418d5716d95e97b327dd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d210eab8a6ad33a6cc601eb522837ac2dd857920418d5716d95e97b327dd98->enter($__internal_d6d210eab8a6ad33a6cc601eb522837ac2dd857920418d5716d95e97b327dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d210eab8a6ad33a6cc601eb522837ac2dd857920418d5716d95e97b327dd98->leave($__internal_d6d210eab8a6ad33a6cc601eb522837ac2dd857920418d5716d95e97b327dd98_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f1fbd607c744eed6f34e4c7e604d55e2e325ee88c814e71de02647a8e4252e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1fbd607c744eed6f34e4c7e604d55e2e325ee88c814e71de02647a8e4252e4->enter($__internal_4f1fbd607c744eed6f34e4c7e604d55e2e325ee88c814e71de02647a8e4252e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4f1fbd607c744eed6f34e4c7e604d55e2e325ee88c814e71de02647a8e4252e4->leave($__internal_4f1fbd607c744eed6f34e4c7e604d55e2e325ee88c814e71de02647a8e4252e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9af492648c7063ca59ead5dfc3da297127b4c84d147f713eec903c1528299695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af492648c7063ca59ead5dfc3da297127b4c84d147f713eec903c1528299695->enter($__internal_9af492648c7063ca59ead5dfc3da297127b4c84d147f713eec903c1528299695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9af492648c7063ca59ead5dfc3da297127b4c84d147f713eec903c1528299695->leave($__internal_9af492648c7063ca59ead5dfc3da297127b4c84d147f713eec903c1528299695_prof);

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

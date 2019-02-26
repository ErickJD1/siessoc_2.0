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
        $__internal_0109c895e83b3816fd267a795394394b625447f3c0be047f782d5df84e259652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0109c895e83b3816fd267a795394394b625447f3c0be047f782d5df84e259652->enter($__internal_0109c895e83b3816fd267a795394394b625447f3c0be047f782d5df84e259652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0109c895e83b3816fd267a795394394b625447f3c0be047f782d5df84e259652->leave($__internal_0109c895e83b3816fd267a795394394b625447f3c0be047f782d5df84e259652_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec5d652b7d19d7ac05c9533d03507fb297586be87237c5b2ed239925a607d6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5d652b7d19d7ac05c9533d03507fb297586be87237c5b2ed239925a607d6de->enter($__internal_ec5d652b7d19d7ac05c9533d03507fb297586be87237c5b2ed239925a607d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ec5d652b7d19d7ac05c9533d03507fb297586be87237c5b2ed239925a607d6de->leave($__internal_ec5d652b7d19d7ac05c9533d03507fb297586be87237c5b2ed239925a607d6de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11554af6676d85698b4ead8cc1ebc4286fd9b17f3f2b820052b8cf629f24e1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11554af6676d85698b4ead8cc1ebc4286fd9b17f3f2b820052b8cf629f24e1b3->enter($__internal_11554af6676d85698b4ead8cc1ebc4286fd9b17f3f2b820052b8cf629f24e1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col col-md-12\" align=\"center\" > 
            <img style=\"width:90px;\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\"></img>
        </div>   
        <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
            <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Becario</h2>
            <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar una beca universitaria</h5>
         <hr style=\"width:90%\">
        </div>
    </div>
        
    <div class=\"row\">

        <div class=\"col col-md-12\">
            <div  style=\"width:80%; margin-top: 2%; margin-left: 10%\" class=\"\"> 
                ";
        // line 21
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>

    </div>
";
        
        $__internal_11554af6676d85698b4ead8cc1ebc4286fd9b17f3f2b820052b8cf629f24e1b3->leave($__internal_11554af6676d85698b4ead8cc1ebc4286fd9b17f3f2b820052b8cf629f24e1b3_prof);

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
        return array (  79 => 22,  77 => 21,  61 => 8,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col col-md-12\" align=\"center\" > 
            <img style=\"width:90px;\" src=\"{{ asset('img/user.png') }}\"></img>
        </div>   
        <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
            <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Becario</h2>
            <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para solicitar una beca universitaria</h5>
         <hr style=\"width:90%\">
        </div>
    </div>
        
    <div class=\"row\">

        <div class=\"col col-md-12\">
            <div  style=\"width:80%; margin-top: 2%; margin-left: 10%\" class=\"\"> 
                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
            </div>
        </div>

    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

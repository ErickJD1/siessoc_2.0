<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_224b7fc58b233e05a9d4e59f755735e7b378bc1f6df559c0d4d52c4b9aacf064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7f70694c126ba818c2c4021cbcee08fec6172976587f1790106f632ed0275d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f70694c126ba818c2c4021cbcee08fec6172976587f1790106f632ed0275d74->enter($__internal_7f70694c126ba818c2c4021cbcee08fec6172976587f1790106f632ed0275d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f70694c126ba818c2c4021cbcee08fec6172976587f1790106f632ed0275d74->leave($__internal_7f70694c126ba818c2c4021cbcee08fec6172976587f1790106f632ed0275d74_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d6e3fb04a6fcbe2be294ad5a57b68196c4ad4994e4f7d5c3681e6ccb048ad7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6e3fb04a6fcbe2be294ad5a57b68196c4ad4994e4f7d5c3681e6ccb048ad7c->enter($__internal_5d6e3fb04a6fcbe2be294ad5a57b68196c4ad4994e4f7d5c3681e6ccb048ad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5d6e3fb04a6fcbe2be294ad5a57b68196c4ad4994e4f7d5c3681e6ccb048ad7c->leave($__internal_5d6e3fb04a6fcbe2be294ad5a57b68196c4ad4994e4f7d5c3681e6ccb048ad7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d598ca78d3495ca58d0266024023a73ba33821f9417e5dfab485c8d0e49e6e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d598ca78d3495ca58d0266024023a73ba33821f9417e5dfab485c8d0e49e6e98->enter($__internal_d598ca78d3495ca58d0266024023a73ba33821f9417e5dfab485c8d0e49e6e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 19)->display($context);
        // line 20
        echo "    </div>
";
        
        $__internal_d598ca78d3495ca58d0266024023a73ba33821f9417e5dfab485c8d0e49e6e98->leave($__internal_d598ca78d3495ca58d0266024023a73ba33821f9417e5dfab485c8d0e49e6e98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

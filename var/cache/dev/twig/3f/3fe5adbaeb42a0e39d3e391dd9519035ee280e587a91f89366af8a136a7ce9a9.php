<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f82574fdb641a09ad6be49beaca217e1359a391e395f7a38a07132e52372f153 extends Twig_Template
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
        $__internal_c005374e88bda3ea035ef77f41113fec16c6d892e2267efacb0e9516616402b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c005374e88bda3ea035ef77f41113fec16c6d892e2267efacb0e9516616402b2->enter($__internal_c005374e88bda3ea035ef77f41113fec16c6d892e2267efacb0e9516616402b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c005374e88bda3ea035ef77f41113fec16c6d892e2267efacb0e9516616402b2->leave($__internal_c005374e88bda3ea035ef77f41113fec16c6d892e2267efacb0e9516616402b2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cba78d2857df6702e287c9b122a7ee4976a253e8aff416030cb698b86274c1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba78d2857df6702e287c9b122a7ee4976a253e8aff416030cb698b86274c1ce->enter($__internal_cba78d2857df6702e287c9b122a7ee4976a253e8aff416030cb698b86274c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cba78d2857df6702e287c9b122a7ee4976a253e8aff416030cb698b86274c1ce->leave($__internal_cba78d2857df6702e287c9b122a7ee4976a253e8aff416030cb698b86274c1ce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5388df9080716d7543d2543ce5be5f9f4bd973dd28428b3f8305b30bbaa118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5388df9080716d7543d2543ce5be5f9f4bd973dd28428b3f8305b30bbaa118->enter($__internal_ac5388df9080716d7543d2543ce5be5f9f4bd973dd28428b3f8305b30bbaa118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Aspirante a Becario</h2>
                <hr>
                ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_ac5388df9080716d7543d2543ce5be5f9f4bd973dd28428b3f8305b30bbaa118->leave($__internal_ac5388df9080716d7543d2543ce5be5f9f4bd973dd28428b3f8305b30bbaa118_prof);

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
        return array (  64 => 11,  62 => 10,  56 => 6,  50 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Aspirante a Becario</h2>
                <hr>
                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}

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
        $__internal_a3adff4c8de94b6743710338337ba40ff4e517670c5a681de2ab64176d239db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3adff4c8de94b6743710338337ba40ff4e517670c5a681de2ab64176d239db1->enter($__internal_a3adff4c8de94b6743710338337ba40ff4e517670c5a681de2ab64176d239db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3adff4c8de94b6743710338337ba40ff4e517670c5a681de2ab64176d239db1->leave($__internal_a3adff4c8de94b6743710338337ba40ff4e517670c5a681de2ab64176d239db1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d1fb575b3e078df3914842af66ecb70841e0894fdd5ab2ad2bddd2d35cef37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1fb575b3e078df3914842af66ecb70841e0894fdd5ab2ad2bddd2d35cef37c->enter($__internal_6d1fb575b3e078df3914842af66ecb70841e0894fdd5ab2ad2bddd2d35cef37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6d1fb575b3e078df3914842af66ecb70841e0894fdd5ab2ad2bddd2d35cef37c->leave($__internal_6d1fb575b3e078df3914842af66ecb70841e0894fdd5ab2ad2bddd2d35cef37c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a278aab0eb10e610da54bcab4935a929cc3b2e319c76ec7eceb0f13a34925861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a278aab0eb10e610da54bcab4935a929cc3b2e319c76ec7eceb0f13a34925861->enter($__internal_a278aab0eb10e610da54bcab4935a929cc3b2e319c76ec7eceb0f13a34925861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Registro Aspirante</h2>
                <hr>
                ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_a278aab0eb10e610da54bcab4935a929cc3b2e319c76ec7eceb0f13a34925861->leave($__internal_a278aab0eb10e610da54bcab4935a929cc3b2e319c76ec7eceb0f13a34925861_prof);

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
         <h2>Registro Aspirante</h2>
                <hr>
                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}

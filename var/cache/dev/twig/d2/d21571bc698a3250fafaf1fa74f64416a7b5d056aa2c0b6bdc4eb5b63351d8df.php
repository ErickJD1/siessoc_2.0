<?php

/* @FOSUser/Registration/registerPatrocina.html.twig */
class __TwigTemplate_a2f7fb58b853f8a36281ed0346d1a863160673b7203cd8c06c76193d4f62f2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/registerPatrocina.html.twig", 1);
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
        $__internal_2a6f80336c9cd561bab5a27766a695614b0b62644842ee9e56bfb33470cb1316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6f80336c9cd561bab5a27766a695614b0b62644842ee9e56bfb33470cb1316->enter($__internal_2a6f80336c9cd561bab5a27766a695614b0b62644842ee9e56bfb33470cb1316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/registerPatrocina.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6f80336c9cd561bab5a27766a695614b0b62644842ee9e56bfb33470cb1316->leave($__internal_2a6f80336c9cd561bab5a27766a695614b0b62644842ee9e56bfb33470cb1316_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c1ad78af467b0a219f8ba57cf06ad49f31c227fc6a20bc1dd4ee5d6b9182dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1ad78af467b0a219f8ba57cf06ad49f31c227fc6a20bc1dd4ee5d6b9182dba->enter($__internal_9c1ad78af467b0a219f8ba57cf06ad49f31c227fc6a20bc1dd4ee5d6b9182dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9c1ad78af467b0a219f8ba57cf06ad49f31c227fc6a20bc1dd4ee5d6b9182dba->leave($__internal_9c1ad78af467b0a219f8ba57cf06ad49f31c227fc6a20bc1dd4ee5d6b9182dba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b909f94bd69ac5b15a9d327bb5f84f509378cd5ecdd374f1647a9033ba2af663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b909f94bd69ac5b15a9d327bb5f84f509378cd5ecdd374f1647a9033ba2af663->enter($__internal_b909f94bd69ac5b15a9d327bb5f84f509378cd5ecdd374f1647a9033ba2af663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("FOSUserBundle:Registration:register_content_patrocina.html.twig", "@FOSUser/Registration/registerPatrocina.html.twig", 20)->display($context);
        // line 21
        echo "    </div>
";
        
        $__internal_b909f94bd69ac5b15a9d327bb5f84f509378cd5ecdd374f1647a9033ba2af663->leave($__internal_b909f94bd69ac5b15a9d327bb5f84f509378cd5ecdd374f1647a9033ba2af663_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/registerPatrocina.html.twig";
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
", "@FOSUser/Registration/registerPatrocina.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\registerPatrocina.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:registerPatrocina.html.twig */
class __TwigTemplate_b0e3d2c30c1ca9d85e10d0ad9e351af27ac744cec338fc40d9d1ccb323d7c0df extends Twig_Template
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
        $__internal_697e6c2558ebf1235bb5debb4cf67974c13b4bc4c673b7250cc7765449141882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697e6c2558ebf1235bb5debb4cf67974c13b4bc4c673b7250cc7765449141882->enter($__internal_697e6c2558ebf1235bb5debb4cf67974c13b4bc4c673b7250cc7765449141882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:registerPatrocina.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697e6c2558ebf1235bb5debb4cf67974c13b4bc4c673b7250cc7765449141882->leave($__internal_697e6c2558ebf1235bb5debb4cf67974c13b4bc4c673b7250cc7765449141882_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff8e3d7ac80405595df6e76396daccb2ada72d1b43a0affd0f34a8e4b6ef8d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e3d7ac80405595df6e76396daccb2ada72d1b43a0affd0f34a8e4b6ef8d68->enter($__internal_ff8e3d7ac80405595df6e76396daccb2ada72d1b43a0affd0f34a8e4b6ef8d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ff8e3d7ac80405595df6e76396daccb2ada72d1b43a0affd0f34a8e4b6ef8d68->leave($__internal_ff8e3d7ac80405595df6e76396daccb2ada72d1b43a0affd0f34a8e4b6ef8d68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07660b6f6b2a4b424ea9c1911375bdaf8535bdbb8846de7f41a9093a4b1041d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07660b6f6b2a4b424ea9c1911375bdaf8535bdbb8846de7f41a9093a4b1041d1->enter($__internal_07660b6f6b2a4b424ea9c1911375bdaf8535bdbb8846de7f41a9093a4b1041d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07660b6f6b2a4b424ea9c1911375bdaf8535bdbb8846de7f41a9093a4b1041d1->leave($__internal_07660b6f6b2a4b424ea9c1911375bdaf8535bdbb8846de7f41a9093a4b1041d1_prof);

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
", "FOSUserBundle:Registration:registerPatrocina.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/registerPatrocina.html.twig");
    }
}

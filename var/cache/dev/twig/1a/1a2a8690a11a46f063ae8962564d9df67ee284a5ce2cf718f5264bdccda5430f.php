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
        $__internal_13a4170ffcdd44ae951cee86bf646877ba39f5786779fa29bdfa2b63ebbaf42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a4170ffcdd44ae951cee86bf646877ba39f5786779fa29bdfa2b63ebbaf42a->enter($__internal_13a4170ffcdd44ae951cee86bf646877ba39f5786779fa29bdfa2b63ebbaf42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a4170ffcdd44ae951cee86bf646877ba39f5786779fa29bdfa2b63ebbaf42a->leave($__internal_13a4170ffcdd44ae951cee86bf646877ba39f5786779fa29bdfa2b63ebbaf42a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f2e40bba7edb9e9347f374bdd772747fcabf3d1e3f386f8210dd520c37a8349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2e40bba7edb9e9347f374bdd772747fcabf3d1e3f386f8210dd520c37a8349->enter($__internal_2f2e40bba7edb9e9347f374bdd772747fcabf3d1e3f386f8210dd520c37a8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2f2e40bba7edb9e9347f374bdd772747fcabf3d1e3f386f8210dd520c37a8349->leave($__internal_2f2e40bba7edb9e9347f374bdd772747fcabf3d1e3f386f8210dd520c37a8349_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba0b1a66b5618b32d5aacaba92d310d76343bb24d1bacc723060a0712e18606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba0b1a66b5618b32d5aacaba92d310d76343bb24d1bacc723060a0712e18606->enter($__internal_fba0b1a66b5618b32d5aacaba92d310d76343bb24d1bacc723060a0712e18606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col col-md-5\">
            <div class=\"panel panel-success\" style=\"width: 90%; margin-left: 5%; margin-top: 5%;margin-left: 10%;margin-right: 5%; border-color: background;border-left: solid;border-left-color: greenyellow\">
                <div class=\"panel-heading\"><strong>Indicaciones</strong></div>
                <div class=\"panel-body\">
                    <br> 
                    <p>   Si te registras en el sistema SIESSOC, podras completar la solicitud para aplicar a una beca universitaria, siguiendo los siguientes pasos:</p>
                    <br>
                    <p>1. Completa el formulario de la derecha y registrate en el sistema.</p>
                    <br>
                    <p>2. Cuando se cree la convocatoria para el año correspondiente, el sistema te habilitará el formulario de solicitud de la beca. Donde podras ingresar todos los datos requeridos para aplicar.</p>
                    <br>
                    <p>3. Recibiras un correo por parte de los administradores del proyecto ESSOC, indicandote los pasos a seguir una vez hayan aprobado tu solicitud.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class=\"col col-md-7\">
            <div  style=\"width:80%; margin-top: 2%; margin-left: 10%\" class=\"\"> 

                ";
        // line 37
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 37)->display($context);
        // line 38
        echo "            </div>
        </div>

    </div>
";
        
        $__internal_fba0b1a66b5618b32d5aacaba92d310d76343bb24d1bacc723060a0712e18606->leave($__internal_fba0b1a66b5618b32d5aacaba92d310d76343bb24d1bacc723060a0712e18606_prof);

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
        return array (  95 => 38,  93 => 37,  61 => 8,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
        <div class=\"col col-md-5\">
            <div class=\"panel panel-success\" style=\"width: 90%; margin-left: 5%; margin-top: 5%;margin-left: 10%;margin-right: 5%; border-color: background;border-left: solid;border-left-color: greenyellow\">
                <div class=\"panel-heading\"><strong>Indicaciones</strong></div>
                <div class=\"panel-body\">
                    <br> 
                    <p>   Si te registras en el sistema SIESSOC, podras completar la solicitud para aplicar a una beca universitaria, siguiendo los siguientes pasos:</p>
                    <br>
                    <p>1. Completa el formulario de la derecha y registrate en el sistema.</p>
                    <br>
                    <p>2. Cuando se cree la convocatoria para el año correspondiente, el sistema te habilitará el formulario de solicitud de la beca. Donde podras ingresar todos los datos requeridos para aplicar.</p>
                    <br>
                    <p>3. Recibiras un correo por parte de los administradores del proyecto ESSOC, indicandote los pasos a seguir una vez hayan aprobado tu solicitud.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class=\"col col-md-7\">
            <div  style=\"width:80%; margin-top: 2%; margin-left: 10%\" class=\"\"> 

                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
            </div>
        </div>

    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

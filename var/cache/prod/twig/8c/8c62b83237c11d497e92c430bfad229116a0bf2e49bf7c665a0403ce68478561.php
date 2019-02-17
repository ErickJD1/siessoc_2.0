<?php

/* FOSUserBundle:Registration:registerPatrocina.html.twig */
class __TwigTemplate_fa35d765f353abe8f6b02da7e1684be3bce9e6999b5a660a7180d1cf8e8f9258 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"col col-md-12\" align=\"center\" > 
            <img style=\"width:90px;\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\"></img>
        </div>   
        <div class=\"col col-md-12 \" align=\"center\" style=\" \"> 
            <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Aspirante Patrocinador</h2>
            <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body\">Registraté para ser parte del equipo de colaboradores.</h5>
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
        // line 39
        $this->loadTemplate("FOSUserBundle:Registration:register_content_patrocina.html.twig", "FOSUserBundle:Registration:registerPatrocina.html.twig", 39)->display($context);
        // line 40
        echo "            </div>
        </div>

    </div>
";
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
        return array (  82 => 40,  80 => 39,  47 => 9,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:registerPatrocina.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/registerPatrocina.html.twig");
    }
}

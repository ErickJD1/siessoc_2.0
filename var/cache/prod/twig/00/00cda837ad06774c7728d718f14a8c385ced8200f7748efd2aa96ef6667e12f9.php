<?php

/* tipomovimiento/TipoMovimientonew.html.twig */
class __TwigTemplate_72d8d9082b115eb2ad24ddb9ec6cd1afbe0fc690a68aadb1a8b9198ae0c97544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientonew.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Tipo De Movimiento | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Registrar Tipo De Movimiento ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Tipo De Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new"), "method" => "POST"));
        echo "
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre Tipo Movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombretipo", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombretipo", array()), 'errors');
        echo "
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripciontipomov", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripciontipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                    
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estadotipomov", array()), 'widget');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estadotipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                    
                    
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


";
    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  116 => 52,  106 => 45,  102 => 44,  91 => 36,  87 => 35,  77 => 28,  73 => 27,  66 => 23,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tipomovimiento/TipoMovimientonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientonew.html.twig");
    }
}

<?php

/* :cuenta:Cuentanew.html.twig */
class __TwigTemplate_603e3999978781416427d3f8233653cb486dc9175f35b4ad1de796d8ad1cb730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentanew.html.twig", 1);
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
        echo " Cuentas | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Registrar Cuenta ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
 
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
             <hr>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numcuenta", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numcuenta", array()), 'errors');
        echo "
                    </div>

                    <br>
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomcuenta", array()), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomcuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-9\">
                        <label for=\"form_descripcion\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcioncuenta", array()), 'errors');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcioncuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-3\" >
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estadocuenta", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "estadocuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "saldocuenta", array()), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "saldocuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_banco\">Banco<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idbanco", array()), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idbanco", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_cuenta\">Tipo de Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idtipocuenta", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idtipocuenta", array()), 'widget');
        echo "
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
        <br>
        <br>

    </div>




";
    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentanew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 77,  161 => 73,  151 => 66,  147 => 65,  140 => 61,  136 => 60,  129 => 56,  125 => 55,  115 => 48,  111 => 47,  104 => 43,  100 => 42,  90 => 35,  86 => 34,  77 => 28,  73 => 27,  66 => 23,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cuenta:Cuentanew.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentanew.html.twig");
    }
}

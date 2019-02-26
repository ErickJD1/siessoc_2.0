<?php

/* cuenta/Cuentaedit.html.twig */
class __TwigTemplate_dd47129b4e34ae846a046e85818f3b2f217a20c23d3c8271241c08a743c464aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaedit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
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
        echo "Modificar Cuentas ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">
            <div class=\"col col-md-12\" align=\"center\" >
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6 hidden\" align=\"left\">
                        <label for=\"form_ncuenta\">Número de Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "numcuenta", array()), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "numcuenta", array()), 'errors');
        echo "
                    </div>

                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_nomcuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nomcuenta", array()), 'widget');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nomcuenta", array()), 'errors');
        echo "
                    </div>
                </div>

                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4 hidden\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "saldocuenta", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "saldocuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_banco\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idbanco", array()), 'widget');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idbanco", array()), 'errors');
        echo "

                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idbanco\"  disabled=\"disabled\"/>
                    </div>

                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_cuenta\">Tipo de Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idtipocuenta", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idtipocuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Tipo de Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idcuenta\"  disabled=\"disabled\"/>
                    </div>

                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-10\">
                        <label for=\"form_descripcion\">Descripción</label>
                        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcioncuenta", array()), 'errors');
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcioncuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-2\" align=\"right\">
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estadocuenta", array()), 'widget');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estadocuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
        echo " \" class=\"btn btn-danger btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>


";
    }

    // line 96
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 97
        echo "    <script>
        \$(document).ready(function(){
           \$(\"#idcuenta\").val(\$('#appbundle_cuenta_idtipocuenta option:selected').text());
           \$(\"#idbanco\").val(\$('#appbundle_cuenta_idbanco option:selected').text());
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 97,  192 => 96,  178 => 86,  171 => 82,  162 => 76,  158 => 75,  151 => 71,  147 => 70,  132 => 58,  128 => 57,  115 => 47,  111 => 46,  104 => 42,  100 => 41,  89 => 33,  85 => 32,  77 => 27,  73 => 26,  66 => 22,  53 => 12,  46 => 7,  43 => 6,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cuenta/Cuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaedit.html.twig");
    }
}

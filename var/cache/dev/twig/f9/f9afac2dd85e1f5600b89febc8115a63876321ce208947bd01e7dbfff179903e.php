<?php

/* movimiento/Movimientonew.html.twig */
class __TwigTemplate_fa4bd04e3587343a9fbdbcf7d6c285613c2fe00149b0cc558731725664edad21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientonew.html.twig", 1);
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
        $__internal_c6b626297ce3fe4847e5fc7e9958fad064d1761c2b4204ac8a9070b808749d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b626297ce3fe4847e5fc7e9958fad064d1761c2b4204ac8a9070b808749d5c->enter($__internal_c6b626297ce3fe4847e5fc7e9958fad064d1761c2b4204ac8a9070b808749d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b626297ce3fe4847e5fc7e9958fad064d1761c2b4204ac8a9070b808749d5c->leave($__internal_c6b626297ce3fe4847e5fc7e9958fad064d1761c2b4204ac8a9070b808749d5c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dd34b9430e007966838a6fb878a1fea2ac6b82b49314bcf188210136e0952b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd34b9430e007966838a6fb878a1fea2ac6b82b49314bcf188210136e0952b71->enter($__internal_dd34b9430e007966838a6fb878a1fea2ac6b82b49314bcf188210136e0952b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_dd34b9430e007966838a6fb878a1fea2ac6b82b49314bcf188210136e0952b71->leave($__internal_dd34b9430e007966838a6fb878a1fea2ac6b82b49314bcf188210136e0952b71_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_75423aa79c83b607927fcb349ed6ff12c7f0ff4ca88a9772d8d0d8cbf0c6071c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75423aa79c83b607927fcb349ed6ff12c7f0ff4ca88a9772d8d0d8cbf0c6071c->enter($__internal_75423aa79c83b607927fcb349ed6ff12c7f0ff4ca88a9772d8d0d8cbf0c6071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Movimientos ";
        
        $__internal_75423aa79c83b607927fcb349ed6ff12c7f0ff4ca88a9772d8d0d8cbf0c6071c->leave($__internal_75423aa79c83b607927fcb349ed6ff12c7f0ff4ca88a9772d8d0d8cbf0c6071c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c295dea4e8b5b8384b7ff916d6efce2eb75cfdcbf2f1029857e77e779ec5aa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c295dea4e8b5b8384b7ff916d6efce2eb75cfdcbf2f1029857e77e779ec5aa06->enter($__internal_c295dea4e8b5b8384b7ff916d6efce2eb75cfdcbf2f1029857e77e779ec5aa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento De Fondos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta</label>
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'widget');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento</label>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion</label>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-xs-4\" align=\"left\">
                        <label for=\"form_monto\">Monto</label>
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'widget');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-xs-4\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'widget');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-xs-4\" align=\"right\">
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomov", array()), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 70
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>


</div>
</br>
</div>
<br>
<br>
</div>


";
        
        $__internal_c295dea4e8b5b8384b7ff916d6efce2eb75cfdcbf2f1029857e77e779ec5aa06->leave($__internal_c295dea4e8b5b8384b7ff916d6efce2eb75cfdcbf2f1029857e77e779ec5aa06_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  169 => 66,  160 => 60,  156 => 59,  149 => 55,  145 => 54,  138 => 50,  134 => 49,  124 => 42,  120 => 41,  110 => 34,  106 => 33,  99 => 29,  95 => 28,  88 => 24,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %} Movimientos | {% endblock %}
{% block page_subtitle %}Lista De Movimientos {% endblock %}

{% block page_content %}
    
 <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento De Fondos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta</label>
                        {{ form_widget(form.idcuenta) }}
                        {{ form_errors(form.idcuenta) }}
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento</label>
                        {{ form_widget(form.idtipomov) }}
                        {{ form_errors(form.idtipomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion</label>
                        {{ form_widget(form.descripcionmov) }}
                        {{ form_errors(form.descripcionmov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-xs-4\" align=\"left\">
                        <label for=\"form_monto\">Monto</label>
                        {{ form_widget(form.monto) }}
                        {{ form_errors(form.monto) }}
                    </div>
                    <div class=\"col col-xs-4\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        {{ form_widget(form.comprobante_file) }}
                        {{ form_errors(form.comprobante_file) }}
                    </div>
                    <div class=\"col col-xs-4\" align=\"right\">
                        <label for=\"form_estado\">Estado</label>
                        {{ form_widget(form.estadomov) }}
                        {{ form_errors(form.estadomov) }}
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                {{ form_end(form) }}

            </div>
        </div>
        <br>
        <br>
    </div>


</div>
</br>
</div>
<br>
<br>
</div>


{% endblock %}", "movimiento/Movimientonew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientonew.html.twig");
    }
}

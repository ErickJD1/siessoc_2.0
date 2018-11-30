<?php

/* :cuenta:Cuentaedit.html.twig */
class __TwigTemplate_21c5606570f4d6b43f85135f0ee007b94425d2e1c27dcc4c24f980a103fb03fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentaedit.html.twig", 1);
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
        $__internal_faeaa830443e522ba7e738e152a2007023f41b87d84bc53a7782f771c9303f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faeaa830443e522ba7e738e152a2007023f41b87d84bc53a7782f771c9303f8c->enter($__internal_faeaa830443e522ba7e738e152a2007023f41b87d84bc53a7782f771c9303f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faeaa830443e522ba7e738e152a2007023f41b87d84bc53a7782f771c9303f8c->leave($__internal_faeaa830443e522ba7e738e152a2007023f41b87d84bc53a7782f771c9303f8c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5f04aef54d10da8cb5ebf356a4f685e25b60f4c9c2524d45cd738d3ad727f6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f04aef54d10da8cb5ebf356a4f685e25b60f4c9c2524d45cd738d3ad727f6b4->enter($__internal_5f04aef54d10da8cb5ebf356a4f685e25b60f4c9c2524d45cd738d3ad727f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_5f04aef54d10da8cb5ebf356a4f685e25b60f4c9c2524d45cd738d3ad727f6b4->leave($__internal_5f04aef54d10da8cb5ebf356a4f685e25b60f4c9c2524d45cd738d3ad727f6b4_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ea083322cf947b3e0fb80c0d1169ff64bec2f512a408a84d62556d546f21d4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea083322cf947b3e0fb80c0d1169ff64bec2f512a408a84d62556d546f21d4c5->enter($__internal_ea083322cf947b3e0fb80c0d1169ff64bec2f512a408a84d62556d546f21d4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuenta ";
        
        $__internal_ea083322cf947b3e0fb80c0d1169ff64bec2f512a408a84d62556d546f21d4c5->leave($__internal_ea083322cf947b3e0fb80c0d1169ff64bec2f512a408a84d62556d546f21d4c5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e4bb255d662984fad6f2865ec37c3714a597796fd93595e57c8accad0128b662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bb255d662984fad6f2865ec37c3714a597796fd93595e57c8accad0128b662->enter($__internal_e4bb255d662984fad6f2865ec37c3714a597796fd93595e57c8accad0128b662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    

                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_e4bb255d662984fad6f2865ec37c3714a597796fd93595e57c8accad0128b662->leave($__internal_e4bb255d662984fad6f2865ec37c3714a597796fd93595e57c8accad0128b662_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  99 => 29,  92 => 25,  88 => 24,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Modificar Cuenta {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    

                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     {{ form_end(edit_form) }}
                     
                
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}", ":cuenta:Cuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaedit.html.twig");
    }
}

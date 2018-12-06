<?php

/* banco/Banconew.html.twig */
class __TwigTemplate_a1ae1eadc9ce372f5d4f8b3f23a1a3552e3a1e598b02445107af1eb3b8897da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "banco/Banconew.html.twig", 1);
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
        $__internal_8219ae0f4e92d77b34209f84e637fea69a93728be97e7501a5cf10df97d22d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8219ae0f4e92d77b34209f84e637fea69a93728be97e7501a5cf10df97d22d17->enter($__internal_8219ae0f4e92d77b34209f84e637fea69a93728be97e7501a5cf10df97d22d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Banconew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8219ae0f4e92d77b34209f84e637fea69a93728be97e7501a5cf10df97d22d17->leave($__internal_8219ae0f4e92d77b34209f84e637fea69a93728be97e7501a5cf10df97d22d17_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2b46d167cc5aadc30a707131f82473980eb9bcd38237d456f49f5de66ec217c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b46d167cc5aadc30a707131f82473980eb9bcd38237d456f49f5de66ec217c3->enter($__internal_2b46d167cc5aadc30a707131f82473980eb9bcd38237d456f49f5de66ec217c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_2b46d167cc5aadc30a707131f82473980eb9bcd38237d456f49f5de66ec217c3->leave($__internal_2b46d167cc5aadc30a707131f82473980eb9bcd38237d456f49f5de66ec217c3_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_132a5a529b0c1812655f1ee0fb2138784549ce22418e83282d071f36dd3a8b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132a5a529b0c1812655f1ee0fb2138784549ce22418e83282d071f36dd3a8b67->enter($__internal_132a5a529b0c1812655f1ee0fb2138784549ce22418e83282d071f36dd3a8b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_132a5a529b0c1812655f1ee0fb2138784549ce22418e83282d071f36dd3a8b67->leave($__internal_132a5a529b0c1812655f1ee0fb2138784549ce22418e83282d071f36dd3a8b67_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cd6cdca8e08ab8640dddc26ef6c65db8215492f8a0a2ad664d5e83558bf6acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6cdca8e08ab8640dddc26ef6c65db8215492f8a0a2ad664d5e83558bf6acc6->enter($__internal_cd6cdca8e08ab8640dddc26ef6c65db8215492f8a0a2ad664d5e83558bf6acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new"), "method" => "POST"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_cd6cdca8e08ab8640dddc26ef6c65db8215492f8a0a2ad664d5e83558bf6acc6->leave($__internal_cd6cdca8e08ab8640dddc26ef6c65db8215492f8a0a2ad664d5e83558bf6acc6_prof);

    }

    public function getTemplateName()
    {
        return "banco/Banconew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  98 => 28,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Bancos | {% endblock %}
{% block page_subtitle %}Catalogo De Bancos {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('banco_new'), 'method': 'POST'}) }}
                {{ form_widget(form) }}

                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                {{ form_end(form) }}
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", "banco/Banconew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\Banconew.html.twig");
    }
}

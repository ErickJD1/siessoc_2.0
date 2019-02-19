<?php

/* menu/menuSolicitud.html.twig */
class __TwigTemplate_1bfbbfcd6d71bc190b1cd7f94b9f5362a0b33c28518b23406c7d776aab18e96d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "menu/menuSolicitud.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68768524f6c822af16abe5a59812e167b54bfbb8729aeab6da8e3c99868ff5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68768524f6c822af16abe5a59812e167b54bfbb8729aeab6da8e3c99868ff5f8->enter($__internal_68768524f6c822af16abe5a59812e167b54bfbb8729aeab6da8e3c99868ff5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuSolicitud.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68768524f6c822af16abe5a59812e167b54bfbb8729aeab6da8e3c99868ff5f8->leave($__internal_68768524f6c822af16abe5a59812e167b54bfbb8729aeab6da8e3c99868ff5f8_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2ed47f33ab337be1b0d698755f4cddff381139745d3dae9bb4ca53f151f83bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed47f33ab337be1b0d698755f4cddff381139745d3dae9bb4ca53f151f83bf2->enter($__internal_2ed47f33ab337be1b0d698755f4cddff381139745d3dae9bb4ca53f151f83bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Solicitud ";
        
        $__internal_2ed47f33ab337be1b0d698755f4cddff381139745d3dae9bb4ca53f151f83bf2->leave($__internal_2ed47f33ab337be1b0d698755f4cddff381139745d3dae9bb4ca53f151f83bf2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_264c71a197f9da8866af535075671043692ca23389aff06df215fa038a78bb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264c71a197f9da8866af535075671043692ca23389aff06df215fa038a78bb54->enter($__internal_264c71a197f9da8866af535075671043692ca23389aff06df215fa038a78bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>  
        @media only screen and (max-width: 400px) {
             h3.menuT{
                font-size: 25px;
            }
        }
    </style>
";
        
        $__internal_264c71a197f9da8866af535075671043692ca23389aff06df215fa038a78bb54->leave($__internal_264c71a197f9da8866af535075671043692ca23389aff06df215fa038a78bb54_prof);

    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_44e0830a08cb0fd208245ea8243af4676577479dd89da6f66512212feeaa9062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e0830a08cb0fd208245ea8243af4676577479dd89da6f66512212feeaa9062->enter($__internal_44e0830a08cb0fd208245ea8243af4676577479dd89da6f66512212feeaa9062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 16
        echo "

    <div class=\"box box-primary\" style=\"min-height: 400px; min-width: 300px;\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_BECARIO"), "method")) {
            echo "      
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Solicitud Becario</h3>

                                <p>Ingresar Solicitud</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\">

                                </i>
                            </div>
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
            echo "\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "
                ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_PATROCINADOR"), "method")) {
            echo " 
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Solicitud Patrocinador</h3>

                                <p>Ingresar Solicitud</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudpatrocinador_index");
            echo "\" class=\"small-box-footer\">Ingresar<i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        // line 57
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_44e0830a08cb0fd208245ea8243af4676577479dd89da6f66512212feeaa9062->leave($__internal_44e0830a08cb0fd208245ea8243af4676577479dd89da6f66512212feeaa9062_prof);

    }

    public function getTemplateName()
    {
        return "menu/menuSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  127 => 53,  111 => 40,  108 => 39,  101 => 35,  84 => 21,  77 => 16,  71 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block page_title %} Menu | Solicitud {% endblock %}

{% block stylesheets %}
    {{parent()}}
    <style>  
        @media only screen and (max-width: 400px) {
             h3.menuT{
                font-size: 25px;
            }
        }
    </style>
{% endblock  %}
{% block page_content %}


    <div class=\"box box-primary\" style=\"min-height: 400px; min-width: 300px;\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                {% if app.user.hasRole('ROLE_ASPIRANTE_BECARIO') %}      
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Solicitud Becario</h3>

                                <p>Ingresar Solicitud</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\">

                                </i>
                            </div>
                            <a href=\"{{path('solicitudbecario_index')}}\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}

                {% if app.user.hasRole('ROLE_ASPIRANTE_PATROCINADOR') %} 
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Solicitud Patrocinador</h3>

                                <p>Ingresar Solicitud</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"{{path('solicitudpatrocinador_index')}}\" class=\"small-box-footer\">Ingresar<i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}", "menu/menuSolicitud.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuSolicitud.html.twig");
    }
}

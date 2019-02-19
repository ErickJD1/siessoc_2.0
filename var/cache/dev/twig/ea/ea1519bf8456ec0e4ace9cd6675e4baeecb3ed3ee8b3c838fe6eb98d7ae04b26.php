<?php

/* menu/menuColaboracion.html.twig */
class __TwigTemplate_44dbbd262d41822dfcd4ebf4d91c606d9b633082f60c8869ff0e11165df002be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "menu/menuColaboracion.html.twig", 1);
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
        $__internal_34e55cd4e4de4058df18e96407ff5aac2f201113d599db0c6da173633180ca03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e55cd4e4de4058df18e96407ff5aac2f201113d599db0c6da173633180ca03->enter($__internal_34e55cd4e4de4058df18e96407ff5aac2f201113d599db0c6da173633180ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuColaboracion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e55cd4e4de4058df18e96407ff5aac2f201113d599db0c6da173633180ca03->leave($__internal_34e55cd4e4de4058df18e96407ff5aac2f201113d599db0c6da173633180ca03_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cdca0a3f50455f0608370a21bac18d075727c7bd97e8c4a0711f426961e2693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdca0a3f50455f0608370a21bac18d075727c7bd97e8c4a0711f426961e2693d->enter($__internal_cdca0a3f50455f0608370a21bac18d075727c7bd97e8c4a0711f426961e2693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Colaboracion Monetaria ";
        
        $__internal_cdca0a3f50455f0608370a21bac18d075727c7bd97e8c4a0711f426961e2693d->leave($__internal_cdca0a3f50455f0608370a21bac18d075727c7bd97e8c4a0711f426961e2693d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ecd162807b156dcb28a89bf8d49febc0b88a0063756cbb04cac1dabf8c39c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecd162807b156dcb28a89bf8d49febc0b88a0063756cbb04cac1dabf8c39c6a->enter($__internal_4ecd162807b156dcb28a89bf8d49febc0b88a0063756cbb04cac1dabf8c39c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4ecd162807b156dcb28a89bf8d49febc0b88a0063756cbb04cac1dabf8c39c6a->leave($__internal_4ecd162807b156dcb28a89bf8d49febc0b88a0063756cbb04cac1dabf8c39c6a_prof);

    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d2d3b88cc6b88ed945ad82bc78e194d4b456366ce83dd2d2da097a780c025339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d3b88cc6b88ed945ad82bc78e194d4b456366ce83dd2d2da097a780c025339->enter($__internal_d2d3b88cc6b88ed945ad82bc78e194d4b456366ce83dd2d2da097a780c025339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 16
        echo "

    <div class=\"box box-primary\" style=\"min-height: 400px; min-width: 300px;\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                ";
        // line 21
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_STAFF"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method"))) {
            echo "      
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Colaboracion Monetaria</h3>

                                <p>Definir Colaboracion</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-money\">

                                </i>
                            </div>
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_index");
            echo "\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "
                ";
        // line 40
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_STAFF"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method"))) {
            echo "      
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Entrega de Colaboracion</h3>

                                <p>Entregar Colaboracion</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_index");
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
        
        $__internal_d2d3b88cc6b88ed945ad82bc78e194d4b456366ce83dd2d2da097a780c025339->leave($__internal_d2d3b88cc6b88ed945ad82bc78e194d4b456366ce83dd2d2da097a780c025339_prof);

    }

    public function getTemplateName()
    {
        return "menu/menuColaboracion.html.twig";
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

{% block page_title %} Menu | Colaboracion Monetaria {% endblock %}

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
                {% if app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_STAFF') or app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_FINANCIERO') %}      
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Colaboracion Monetaria</h3>

                                <p>Definir Colaboracion</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-money\">

                                </i>
                            </div>
                            <a href=\"{{path('colaboracionmonetaria_index')}}\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}

                {% if app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_STAFF') or app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_FINANCIERO') %}      
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Entrega de Colaboracion</h3>

                                <p>Entregar Colaboracion</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"{{path('colaboracionmonetaria_index')}}\" class=\"small-box-footer\">Ingresar<i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}", "menu/menuColaboracion.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuColaboracion.html.twig");
    }
}

<?php

/* menu/menuFondos.html.twig */
class __TwigTemplate_3d7d6d142a836bcf30a2cc7da6f53be2b52db3736e1423f0c133ea9c73aab9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "menu/menuFondos.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4074b99c357bf5525920de1eb5bad1fb0dc763e086cc9f219f542ef6a5435ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4074b99c357bf5525920de1eb5bad1fb0dc763e086cc9f219f542ef6a5435ada->enter($__internal_4074b99c357bf5525920de1eb5bad1fb0dc763e086cc9f219f542ef6a5435ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuFondos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4074b99c357bf5525920de1eb5bad1fb0dc763e086cc9f219f542ef6a5435ada->leave($__internal_4074b99c357bf5525920de1eb5bad1fb0dc763e086cc9f219f542ef6a5435ada_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_52f90f206c6ab4694289448b3e5233c7d330cc8bfff9ffd2caf48c5fb1793616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f90f206c6ab4694289448b3e5233c7d330cc8bfff9ffd2caf48c5fb1793616->enter($__internal_52f90f206c6ab4694289448b3e5233c7d330cc8bfff9ffd2caf48c5fb1793616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Fondos ";
        
        $__internal_52f90f206c6ab4694289448b3e5233c7d330cc8bfff9ffd2caf48c5fb1793616->leave($__internal_52f90f206c6ab4694289448b3e5233c7d330cc8bfff9ffd2caf48c5fb1793616_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e37eb09e380e752d392467165b48f11d5f93ab8b581bf9778cba2dc19e603143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37eb09e380e752d392467165b48f11d5f93ab8b581bf9778cba2dc19e603143->enter($__internal_e37eb09e380e752d392467165b48f11d5f93ab8b581bf9778cba2dc19e603143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                ";
        // line 12
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method"))) {
            echo "      
                    <div class=\"col-lg-6 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>Cuentas</h3>

                                <p>Administrar Cuentas</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                            <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
            echo "\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        // line 28
        echo "                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>Movimientos<sup style=\"font-size: 20px\"></sup></h3>

                            <p>Administrar Movimientos</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_index");
        echo "\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>Cheques</h3>

                            <p>Administrar Cheques</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-cash\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer\">Administrar<i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            <h3>Beca</h3>

                            <p>Entregar Beca</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-pie-graph\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer\">Consultar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </div>

";
        
        $__internal_e37eb09e380e752d392467165b48f11d5f93ab8b581bf9778cba2dc19e603143->leave($__internal_e37eb09e380e752d392467165b48f11d5f93ab8b581bf9778cba2dc19e603143_prof);

    }

    public function getTemplateName()
    {
        return "menu/menuFondos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  82 => 28,  75 => 24,  60 => 12,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

{% block page_title %} Menu | Fondos {% endblock %}


{% block page_content %}


    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                {% if app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_FINANCIERO') or app.user.hasRole('ROLE_COORDINADOR') %}      
                    <div class=\"col-lg-6 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>Cuentas</h3>

                                <p>Administrar Cuentas</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                            <a href=\"{{path('cuenta_index')}}\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>Movimientos<sup style=\"font-size: 20px\"></sup></h3>

                            <p>Administrar Movimientos</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"{{path('movimiento_index')}}\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>Cheques</h3>

                            <p>Administrar Cheques</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-cash\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer\">Administrar<i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            <h3>Beca</h3>

                            <p>Entregar Beca</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-pie-graph\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer\">Consultar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </div>

{% endblock %}", "menu/menuFondos.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuFondos.html.twig");
    }
}

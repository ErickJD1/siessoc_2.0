<?php

/* menu/menuCatalogos.html.twig */
class __TwigTemplate_fb3d08ec125ade4ba997fa417969a7d09fe030a489cf28f4e57f0e6c2a18dccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "menu/menuCatalogos.html.twig", 1);
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
        $__internal_952c76ac714b6b8ac76b9576ace95644dd787897f7751413ad5edeb80e5730d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952c76ac714b6b8ac76b9576ace95644dd787897f7751413ad5edeb80e5730d0->enter($__internal_952c76ac714b6b8ac76b9576ace95644dd787897f7751413ad5edeb80e5730d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuCatalogos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952c76ac714b6b8ac76b9576ace95644dd787897f7751413ad5edeb80e5730d0->leave($__internal_952c76ac714b6b8ac76b9576ace95644dd787897f7751413ad5edeb80e5730d0_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_33f41597658a80b8109fa45419874d02f747b1d2a65707c71fe7bd854aea954c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f41597658a80b8109fa45419874d02f747b1d2a65707c71fe7bd854aea954c->enter($__internal_33f41597658a80b8109fa45419874d02f747b1d2a65707c71fe7bd854aea954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Catalogos ";
        
        $__internal_33f41597658a80b8109fa45419874d02f747b1d2a65707c71fe7bd854aea954c->leave($__internal_33f41597658a80b8109fa45419874d02f747b1d2a65707c71fe7bd854aea954c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9c562376d6047bd5a457d36b8ec481c36ec9597b3b666d2042cc2f5001a62b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c562376d6047bd5a457d36b8ec481c36ec9597b3b666d2042cc2f5001a62b98->enter($__internal_9c562376d6047bd5a457d36b8ec481c36ec9597b3b666d2042cc2f5001a62b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                    <div class=\"col-lg-6 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>Tipo Cuenta</h3>

                                <p>Gestionar Tipo Cuenta</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>Tipo Movimiento<sup style=\"font-size: 20px\"></sup></h3>

                            <p>Gestionar Tipo Movimeinto</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_index");
        echo "\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>Banco</h3>

                            <p>Gestionar Bancos</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-briefcase\"></i>
                        </div>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_index");
        echo "\" class=\"small-box-footer\">Administrar<i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
";
        // line 71
        echo "                <!-- ./col -->
            </div>
        </div>
    </div>

";
        
        $__internal_9c562376d6047bd5a457d36b8ec481c36ec9597b3b666d2042cc2f5001a62b98->leave($__internal_9c562376d6047bd5a457d36b8ec481c36ec9597b3b666d2042cc2f5001a62b98_prof);

    }

    public function getTemplateName()
    {
        return "menu/menuCatalogos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 71,  107 => 53,  89 => 38,  71 => 23,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

{% block page_title %} Menu | Catalogos {% endblock %}


{% block page_content %}


    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                    <div class=\"col-lg-6 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>Tipo Cuenta</h3>

                                <p>Gestionar Tipo Cuenta</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                            <a href=\"{{path('tipocuenta_index')}}\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>Tipo Movimiento<sup style=\"font-size: 20px\"></sup></h3>

                            <p>Gestionar Tipo Movimeinto</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"{{path('tipomovimiento_index')}}\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>Banco</h3>

                            <p>Gestionar Bancos</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-briefcase\"></i>
                        </div>
                        <a href=\"{{path('banco_index')}}\" class=\"small-box-footer\">Administrar<i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <!-- ./col -->
{#                <div class=\"col-lg-6 col-xs-6\">
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
                </div>#}
                <!-- ./col -->
            </div>
        </div>
    </div>

{% endblock %}", "menu/menuCatalogos.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuCatalogos.html.twig");
    }
}

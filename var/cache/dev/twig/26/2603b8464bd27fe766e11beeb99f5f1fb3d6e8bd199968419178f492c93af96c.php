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
        $__internal_69f01a0face82f835d339b700b79a0d92fd2671898d1ee5699854078c664745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f01a0face82f835d339b700b79a0d92fd2671898d1ee5699854078c664745e->enter($__internal_69f01a0face82f835d339b700b79a0d92fd2671898d1ee5699854078c664745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuCatalogos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f01a0face82f835d339b700b79a0d92fd2671898d1ee5699854078c664745e->leave($__internal_69f01a0face82f835d339b700b79a0d92fd2671898d1ee5699854078c664745e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d0afcdfa4040afaadcf2a78cdfec5014886082fd85ebcff223aadd340d2dee49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0afcdfa4040afaadcf2a78cdfec5014886082fd85ebcff223aadd340d2dee49->enter($__internal_d0afcdfa4040afaadcf2a78cdfec5014886082fd85ebcff223aadd340d2dee49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Catalogos ";
        
        $__internal_d0afcdfa4040afaadcf2a78cdfec5014886082fd85ebcff223aadd340d2dee49->leave($__internal_d0afcdfa4040afaadcf2a78cdfec5014886082fd85ebcff223aadd340d2dee49_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6d92ef6652d6771097dc16200b0675605ac0a6002a4ef43a67352c4cf1d21d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d92ef6652d6771097dc16200b0675605ac0a6002a4ef43a67352c4cf1d21d61->enter($__internal_6d92ef6652d6771097dc16200b0675605ac0a6002a4ef43a67352c4cf1d21d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6d92ef6652d6771097dc16200b0675605ac0a6002a4ef43a67352c4cf1d21d61->leave($__internal_6d92ef6652d6771097dc16200b0675605ac0a6002a4ef43a67352c4cf1d21d61_prof);

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

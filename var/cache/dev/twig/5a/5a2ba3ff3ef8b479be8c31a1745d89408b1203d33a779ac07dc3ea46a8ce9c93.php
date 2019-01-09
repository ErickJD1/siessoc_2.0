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
        $__internal_1582b0b6c0cb8d578fb1886d6c2929413784cdc93c26f4937821b51349f2aa66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1582b0b6c0cb8d578fb1886d6c2929413784cdc93c26f4937821b51349f2aa66->enter($__internal_1582b0b6c0cb8d578fb1886d6c2929413784cdc93c26f4937821b51349f2aa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuFondos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1582b0b6c0cb8d578fb1886d6c2929413784cdc93c26f4937821b51349f2aa66->leave($__internal_1582b0b6c0cb8d578fb1886d6c2929413784cdc93c26f4937821b51349f2aa66_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6b3ead292b9740eb78cf153c7186f2ba166c4649b39c5e70735a6579d22a95b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3ead292b9740eb78cf153c7186f2ba166c4649b39c5e70735a6579d22a95b2->enter($__internal_6b3ead292b9740eb78cf153c7186f2ba166c4649b39c5e70735a6579d22a95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Fondos ";
        
        $__internal_6b3ead292b9740eb78cf153c7186f2ba166c4649b39c5e70735a6579d22a95b2->leave($__internal_6b3ead292b9740eb78cf153c7186f2ba166c4649b39c5e70735a6579d22a95b2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_80d0df2b135f2fbe41e26d054bca780fc6964f651d363488bd0025879e9074a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d0df2b135f2fbe41e26d054bca780fc6964f651d363488bd0025879e9074a7->enter($__internal_80d0df2b135f2fbe41e26d054bca780fc6964f651d363488bd0025879e9074a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
        echo "\" class=\"small-box-footer\">Administrar <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
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
                        <a href=\"";
        // line 38
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
        
        $__internal_80d0df2b135f2fbe41e26d054bca780fc6964f651d363488bd0025879e9074a7->leave($__internal_80d0df2b135f2fbe41e26d054bca780fc6964f651d363488bd0025879e9074a7_prof);

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
        return array (  89 => 38,  71 => 23,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

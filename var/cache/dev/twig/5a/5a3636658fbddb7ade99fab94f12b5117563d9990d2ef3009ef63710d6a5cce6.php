<?php

/* menu/menuExpediente.html.twig */
class __TwigTemplate_d7a0f896619410169be75533f6864cd7566f019117276c45269fe92fa6b43ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "menu/menuExpediente.html.twig", 1);
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
        $__internal_12bfc803012850f70cdfbfb37bb6d0c18dd4c2465d2a6e2ca1420ff23f0ab5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bfc803012850f70cdfbfb37bb6d0c18dd4c2465d2a6e2ca1420ff23f0ab5fe->enter($__internal_12bfc803012850f70cdfbfb37bb6d0c18dd4c2465d2a6e2ca1420ff23f0ab5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/menuExpediente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12bfc803012850f70cdfbfb37bb6d0c18dd4c2465d2a6e2ca1420ff23f0ab5fe->leave($__internal_12bfc803012850f70cdfbfb37bb6d0c18dd4c2465d2a6e2ca1420ff23f0ab5fe_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_656e3794bc921ae36dd51c98c9334efcc7fe1f97861155c1835295754397b019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656e3794bc921ae36dd51c98c9334efcc7fe1f97861155c1835295754397b019->enter($__internal_656e3794bc921ae36dd51c98c9334efcc7fe1f97861155c1835295754397b019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Menu | Expediente ";
        
        $__internal_656e3794bc921ae36dd51c98c9334efcc7fe1f97861155c1835295754397b019->leave($__internal_656e3794bc921ae36dd51c98c9334efcc7fe1f97861155c1835295754397b019_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7235a51068288fc15f01f7382aacc3766b92e5eca2e121d6884c8accd94d3e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7235a51068288fc15f01f7382aacc3766b92e5eca2e121d6884c8accd94d3e1f->enter($__internal_7235a51068288fc15f01f7382aacc3766b92e5eca2e121d6884c8accd94d3e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7235a51068288fc15f01f7382aacc3766b92e5eca2e121d6884c8accd94d3e1f->leave($__internal_7235a51068288fc15f01f7382aacc3766b92e5eca2e121d6884c8accd94d3e1f_prof);

    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_74f8e76056ec1d38fd389c954ef6a1aaa76e6368255b1ac45415f114930fa01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f8e76056ec1d38fd389c954ef6a1aaa76e6368255b1ac45415f114930fa01d->enter($__internal_74f8e76056ec1d38fd389c954ef6a1aaa76e6368255b1ac45415f114930fa01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 16
        echo "

    <div class=\"box box-primary\" style=\"min-height: 400px; min-width: 300px;\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                ";
        // line 21
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_STAFF"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
            echo " 
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Expedientes Becario</h3>

                                <p>Ver Expedientes</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\">

                                </i>
                            </div>
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expedientebecario_index");
            echo "\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "
                ";
        // line 40
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_STAFF"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
            echo " 
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Expedientes Patrocinador</h3>

                                <p>ver Expediente</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expedientebecario_index");
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
        
        $__internal_74f8e76056ec1d38fd389c954ef6a1aaa76e6368255b1ac45415f114930fa01d->leave($__internal_74f8e76056ec1d38fd389c954ef6a1aaa76e6368255b1ac45415f114930fa01d_prof);

    }

    public function getTemplateName()
    {
        return "menu/menuExpediente.html.twig";
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

{% block page_title %} Menu | Expediente {% endblock %}

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
                {% if app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_STAFF') or app.user.hasRole('ROLE_ADMIN')  %} 
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Expedientes Becario</h3>

                                <p>Ver Expedientes</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\">

                                </i>
                            </div>
                            <a href=\"{{path('expedientebecario_index')}}\" class=\"small-box-footer\">Ingresar <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}

                {% if app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_STAFF') or app.user.hasRole('ROLE_ADMIN')  %} 
                    <!-- ./col -->
                    <div class=\"col-lg-6 col-md-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3 class=\"menuT\">Expedientes Patrocinador</h3>

                                <p>ver Expediente</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <a href=\"{{path('expedientebecario_index')}}\" class=\"small-box-footer\">Ingresar<i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}", "menu/menuExpediente.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuExpediente.html.twig");
    }
}

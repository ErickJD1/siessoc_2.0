<?php

/* menu/menuSolicitud.html.twig */
class __TwigTemplate_7024ad2392de3bd5b611a3d4f566cfc2992d9d0eaa8f17960766f14b61c84865 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Menu | Fondos ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        // line 16
        echo "

    <div class=\"box box-primary\" style=\"min-height: 400px; min-width: 300px;\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
            <div class=\"row\">
                ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_BECARIO"), "method")) {
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
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_PATROCINADOR"), "method")) {
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
        return array (  113 => 57,  106 => 53,  90 => 40,  87 => 39,  80 => 35,  63 => 21,  56 => 16,  53 => 15,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/menuSolicitud.html.twig", "/home/ubuntu/workspace/app/Resources/views/menu/menuSolicitud.html.twig");
    }
}

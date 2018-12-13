<?php

/* :webSite:nosotros.html.twig */
class __TwigTemplate_2eabda0378363a523231f4ecb6f8bddaeea968f2921736f3e34e62a83c6e69fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:nosotros.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":webSite:nosotros.html.twig", 2);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Page Content -->
    <div class=\"container\" style=\"font-family: Palatino Header !important;\">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\" >ESSOC
            <small>Nuestro equipo</small>
        </h1>
        <hr>
        <!-- Image Header -->
        <img class=\"img-fluid rounded mb-4\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nosotros.png"), "html", null, true);
        echo "\" alt=\"\">

        <!-- Team Members -->

        <div class=\"row\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 19
            echo "            
                <div align=\"center\"  class=\"col-lg-4 mb-4\">
                    <div  class=\"card h-100 text-center\">
                        ";
            // line 23
            echo "                        <div class=\"user-panel\">
                            <div class=\"pull-center image\" >
                                ";
            // line 25
            $context["user_image"] = false;
            // line 26
            echo "                                ";
            if ( !twig_test_empty($this->getAttribute($context["u"], "getProfilePicture", array(), "method"))) {
                // line 27
                echo "                                    ";
                $context["user_image"] = ("images/profile/" . $this->getAttribute($context["u"], "getProfilePicture", array(), "method"));
                // line 28
                echo "                                ";
            }
            // line 29
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["user_image"]) ? $context["user_image"] : null)), "html", null, true);
            echo "\" style=\"width:150px; height:150px; align:center !important; margin-top: 2%; border-radius: 400px \" class=\"img-circle\"></img>
                            </div>
                        </div>
                        ";
            // line 33
            echo "                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["u"], "firstName", array()) . " ") . $this->getAttribute($context["u"], "lastName", array())), "html", null, true);
            echo "</h4>

                            <p class=\"card-text\" align=\"justify\" style=\"font-family: Palatino body !important; font-size:13pt;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "description", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"#\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
        <!-- /.row -->
    </div>
";
    }

    public function getTemplateName()
    {
        return ":webSite:nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  97 => 39,  91 => 36,  86 => 34,  83 => 33,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  65 => 25,  61 => 23,  56 => 19,  52 => 18,  44 => 13,  34 => 5,  31 => 4,  27 => 3,  25 => 2,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":webSite:nosotros.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/nosotros.html.twig");
    }
}

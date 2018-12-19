<?php

/* layout/breadcrumb.html.twig */
class __TwigTemplate_65f92d7c4eafcd358b893f31ac97f6dbc426e681f62fa24ad00af61688262bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !twig_test_empty($this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs();
            echo "
";
        } else {
            // line 4
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["active"]) ? $context["active"] : null)) > 0)) {
                // line 5
                echo "        <ol class=\"breadcrumb\">
            <li>
                <a href=\"";
                // line 7
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\">
                    <i class=\"fa fa-home\"></i>
                </a>
            </li>
            ";
                // line 11
                if ((isset($context["active"]) ? $context["active"] : null)) {
                    // line 12
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["active"]) ? $context["active"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 13
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["item"], "route", array()))) ? ("#") : (((twig_in_filter("/", $this->getAttribute($context["item"], "route", array()))) ? ($this->getAttribute($context["item"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "routeArgs", array())))))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            <li class=\"active\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</li>
        </ol>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "layout/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  48 => 13,  43 => 12,  41 => 11,  34 => 7,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/breadcrumb.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout/breadcrumb.html.twig");
    }
}

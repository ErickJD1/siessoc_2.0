<?php

/* :webSite:tapas.html.twig */
class __TwigTemplate_dd912cfc319712c2cd791ac870f0b9518ddce603cba467cbdf2e43b235ef795d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:tapas.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Todas nuestras tapas</h1>

  <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tapas"]) ? $context["tapas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tapa"]) {
            // line 11
            echo "    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
      <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/tapas/" . $this->getAttribute($context["tapa"], "foto", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapa", array("id" => $this->getAttribute($context["tapa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tapa"], "nombre", array()), "html", null, true);
            echo "</a>
          </h4>
          <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tapa"], "descripcion", array()), "html", null, true);
            echo "</p>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tapa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
  ";
        // line 24
        if (((isset($context["maxPages"]) ? $context["maxPages"] : null) > 1)) {
            // line 25
            echo "  <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
      ";
            // line 27
            if (((isset($context["thisPage"]) ? $context["thisPage"] : null) > 1)) {
                // line 28
                echo "      <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas", array("currentPage" => (((((isset($context["thisPage"]) ? $context["thisPage"] : null) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) ? $context["thisPage"] : null) - 1))))), "html", null, true);
                echo "\">Anterior</a></li>
      ";
            }
            // line 30
            echo "      ";
            // line 31
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "      <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas", array("currentPage" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      ";
            if (((isset($context["thisPage"]) ? $context["thisPage"] : null) < (isset($context["maxPages"]) ? $context["maxPages"] : null))) {
                // line 35
                echo "      <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas", array("currentPage" => (((((isset($context["thisPage"]) ? $context["thisPage"] : null) + 1) <= (isset($context["maxPages"]) ? $context["maxPages"] : null))) ? (((isset($context["thisPage"]) ? $context["thisPage"] : null) + 1)) : ((isset($context["thisPage"]) ? $context["thisPage"] : null))))), "html", null, true);
                echo "\">Siguiente</a></li>
      ";
            }
            // line 37
            echo "    </ul>
  </nav>
  ";
        }
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return ":webSite:tapas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  115 => 37,  109 => 35,  106 => 34,  95 => 32,  90 => 31,  88 => 30,  82 => 28,  80 => 27,  76 => 25,  74 => 24,  71 => 23,  60 => 18,  53 => 16,  47 => 13,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":webSite:tapas.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/tapas.html.twig");
    }
}

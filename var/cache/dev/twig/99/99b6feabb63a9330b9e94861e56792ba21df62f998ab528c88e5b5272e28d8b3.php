<?php

/* :webSite:tapas.html.twig */
class __TwigTemplate_1d034aee94dab342f32cb66cb5052d03ae3b2910f5ac9216d93f831f69ddce6d extends Twig_Template
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
        $__internal_a1c9a9cc64cd48fc52d0ec0335394839c92ee707352c7c231e885d28a68c2ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c9a9cc64cd48fc52d0ec0335394839c92ee707352c7c231e885d28a68c2ae1->enter($__internal_a1c9a9cc64cd48fc52d0ec0335394839c92ee707352c7c231e885d28a68c2ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:tapas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c9a9cc64cd48fc52d0ec0335394839c92ee707352c7c231e885d28a68c2ae1->leave($__internal_a1c9a9cc64cd48fc52d0ec0335394839c92ee707352c7c231e885d28a68c2ae1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_417d61568c25902f83295787eed4e375196e2280b3fe1ea03c4c96b8924be7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417d61568c25902f83295787eed4e375196e2280b3fe1ea03c4c96b8924be7c8->enter($__internal_417d61568c25902f83295787eed4e375196e2280b3fe1ea03c4c96b8924be7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Todas nuestras tapas</h1>

  <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tapas"]) ? $context["tapas"] : $this->getContext($context, "tapas")));
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
        if (((isset($context["maxPages"]) ? $context["maxPages"] : $this->getContext($context, "maxPages")) > 1)) {
            // line 25
            echo "  <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
      ";
            // line 27
            if (((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) > 1)) {
                // line 28
                echo "      <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas", array("currentPage" => (((((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) - 1))))), "html", null, true);
                echo "\">Anterior</a></li>
      ";
            }
            // line 30
            echo "      ";
            // line 31
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) ? $context["maxPages"] : $this->getContext($context, "maxPages"))));
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
            if (((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) < (isset($context["maxPages"]) ? $context["maxPages"] : $this->getContext($context, "maxPages")))) {
                // line 35
                echo "      <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas", array("currentPage" => (((((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) + 1) <= (isset($context["maxPages"]) ? $context["maxPages"] : $this->getContext($context, "maxPages")))) ? (((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")) + 1)) : ((isset($context["thisPage"]) ? $context["thisPage"] : $this->getContext($context, "thisPage")))))), "html", null, true);
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
        
        $__internal_417d61568c25902f83295787eed4e375196e2280b3fe1ea03c4c96b8924be7c8->leave($__internal_417d61568c25902f83295787eed4e375196e2280b3fe1ea03c4c96b8924be7c8_prof);

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
        return array (  129 => 40,  124 => 37,  118 => 35,  115 => 34,  104 => 32,  99 => 31,  97 => 30,  91 => 28,  89 => 27,  85 => 25,  83 => 24,  80 => 23,  69 => 18,  62 => 16,  56 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/blog/index.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Todas nuestras tapas</h1>

  <div class=\"row\">
    {% for tapa in tapas %}
    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
      <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('img/tapas/'~tapa.foto) }}\" alt=\"\"></a>
        <div class=\"card-body\">
          <h4 class=\"card-title\">
            <a href=\"{{path('home_tapa',{'id': tapa.id})}}\">{{tapa.nombre}}</a>
          </h4>
          <p class=\"card-text\">{{tapa.descripcion}}</p>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
  {% if maxPages > 1 %}
  <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
      {%if thisPage > 1 %}
      <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('home_tapas', {currentPage: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">Anterior</a></li>
      {% endif %}
      {# Render each page number #}
      {% for i in 1..maxPages %}
      <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('home_tapas', {currentPage: i}) }}\">{{ i }}</a></li>
      {% endfor %}
      {%if thisPage < maxPages %}
      <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('home_tapas', {currentPage: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">Siguiente</a></li>
      {% endif %}
    </ul>
  </nav>
  {% endif %}
</div>
{% endblock %}
", ":webSite:tapas.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/webSite/tapas.html.twig");
    }
}

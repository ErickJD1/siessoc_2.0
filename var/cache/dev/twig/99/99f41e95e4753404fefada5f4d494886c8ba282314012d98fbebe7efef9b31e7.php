<?php

/* :webSite:tapa.html.twig */
class __TwigTemplate_4a210b0c2149675ae015f0068587ce0ff10695b073d4a609b9b22b4bbd906335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:tapa.html.twig", 2);
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
        $__internal_f66085fd76b574e4c32290fd6c6569203d847635adbaf7f857211e0d02040e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66085fd76b574e4c32290fd6c6569203d847635adbaf7f857211e0d02040e1f->enter($__internal_f66085fd76b574e4c32290fd6c6569203d847635adbaf7f857211e0d02040e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:tapa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66085fd76b574e4c32290fd6c6569203d847635adbaf7f857211e0d02040e1f->leave($__internal_f66085fd76b574e4c32290fd6c6569203d847635adbaf7f857211e0d02040e1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19c929629e0181d680d69e0b475d458c02225b307cd73e6c379c73dc0a844720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c929629e0181d680d69e0b475d458c02225b307cd73e6c379c73dc0a844720->enter($__internal_19c929629e0181d680d69e0b475d458c02225b307cd73e6c379c73dc0a844720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Todas nuestras tapas</h1>

  <!-- Portfolio Item Row -->
  <div class=\"row\">

    <div class=\"col-md-8\">
      <img class=\"img-fluid\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/tapas/" . $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : $this->getContext($context, "tapa")), "foto", array()))), "html", null, true);
        echo "\" alt=\"\">
    </div>

    <div class=\"col-md-4\">
      <h3 class=\"my-3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : $this->getContext($context, "tapa")), "nombre", array()), "html", null, true);
        echo "</h3>
      <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : $this->getContext($context, "tapa")), "descripcion", array()), "html", null, true);
        echo "</p>
      <h3 class=\"my-3\">Ingredientes</h3>
      ";
        // line 20
        echo $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : $this->getContext($context, "tapa")), "ingredientes", array());
        echo "
      ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_nueva_tapa", array("id" => $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : $this->getContext($context, "tapa")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Editar</a>
      ";
        }
        // line 24
        echo "    </div>

  </div>
  <!-- /.row -->
  <!-- Related Projects Row -->
  <h3 class=\"my-4\">Otras tapas</h3>

  <div class=\"row\">

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

  </div>
  <!-- /.row -->
</div>
";
        
        $__internal_19c929629e0181d680d69e0b475d458c02225b307cd73e6c379c73dc0a844720->leave($__internal_19c929629e0181d680d69e0b475d458c02225b307cd73e6c379c73dc0a844720_prof);

    }

    public function getTemplateName()
    {
        return ":webSite:tapa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  73 => 22,  71 => 21,  67 => 20,  62 => 18,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 2,);
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

  <!-- Portfolio Item Row -->
  <div class=\"row\">

    <div class=\"col-md-8\">
      <img class=\"img-fluid\" src=\"{{ asset('img/tapas/'~tapa.foto) }}\" alt=\"\">
    </div>

    <div class=\"col-md-4\">
      <h3 class=\"my-3\">{{tapa.nombre}}</h3>
      <p>{{tapa.descripcion}}</p>
      <h3 class=\"my-3\">Ingredientes</h3>
      {{tapa.ingredientes|raw}}
      {% if is_granted('ROLE_ADMIN') %}
      <a href=\"{{path('gestion_nueva_tapa',{'id': tapa.id})}}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Editar</a>
      {% endif %}
    </div>

  </div>
  <!-- /.row -->
  <!-- Related Projects Row -->
  <h3 class=\"my-4\">Otras tapas</h3>

  <div class=\"row\">

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

    <div class=\"col-md-3 col-sm-6 mb-4\">
      <a href=\"#\">
        <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
      </a>
    </div>

  </div>
  <!-- /.row -->
</div>
{% endblock %}
", ":webSite:tapa.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/tapa.html.twig");
    }
}

<?php

/* :webSite:nosotros.html.twig */
class __TwigTemplate_e0a54a97d801d24f3351b7ccb01e19ffe650ce395e704c14675e439772a4c412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:nosotros.html.twig", 2);
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
        $__internal_c6911d347cc99ad62b174507c987c5ad65f96d976525588766ceda2d2401ce97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6911d347cc99ad62b174507c987c5ad65f96d976525588766ceda2d2401ce97->enter($__internal_c6911d347cc99ad62b174507c987c5ad65f96d976525588766ceda2d2401ce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6911d347cc99ad62b174507c987c5ad65f96d976525588766ceda2d2401ce97->leave($__internal_c6911d347cc99ad62b174507c987c5ad65f96d976525588766ceda2d2401ce97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e4b4aa629077ff9179f3165ef9e438691585c75a0b917ec834837e6e6fc38d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4b4aa629077ff9179f3165ef9e438691585c75a0b917ec834837e6e6fc38d0->enter($__internal_6e4b4aa629077ff9179f3165ef9e438691585c75a0b917ec834837e6e6fc38d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page Content -->
<div class=\"container\">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class=\"mt-4 mb-3\">Bar de Paco
    <small>Nosotros</small>
  </h1>

  <!-- Image Header -->
  <img class=\"img-fluid rounded mb-4\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nosotros.png"), "html", null, true);
        echo "\" alt=\"\">

  <!-- Team Members -->
  <h2>Nuestro equipo</h2>

  <div class=\"row\">
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Chef</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Metre</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
";
        
        $__internal_6e4b4aa629077ff9179f3165ef9e438691585c75a0b917ec834837e6e6fc38d0->leave($__internal_6e4b4aa629077ff9179f3165ef9e438691585c75a0b917ec834837e6e6fc38d0_prof);

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
        return array (  93 => 46,  77 => 33,  61 => 20,  50 => 12,  40 => 4,  34 => 3,  11 => 2,);
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
<!-- Page Content -->
<div class=\"container\">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class=\"mt-4 mb-3\">Bar de Paco
    <small>Nosotros</small>
  </h1>

  <!-- Image Header -->
  <img class=\"img-fluid rounded mb-4\" src=\"{{ asset('img/nosotros.png') }}\" alt=\"\">

  <!-- Team Members -->
  <h2>Nuestro equipo</h2>

  <div class=\"row\">
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{ asset('img/paco.png') }}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{ asset('img/paco.png') }}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Chef</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{ asset('img/paco.png') }}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gomez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Metre</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
{% endblock %}
", ":webSite:nosotros.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/webSite/nosotros.html.twig");
    }
}

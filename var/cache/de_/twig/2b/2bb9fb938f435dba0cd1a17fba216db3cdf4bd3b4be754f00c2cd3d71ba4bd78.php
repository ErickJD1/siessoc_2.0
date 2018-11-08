<?php

/* webSite/index.html.twig */
class __TwigTemplate_52566daeacb6a7872967a4392a440dc1b8b58a197a0140c10302e4d25ca53d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "webSite/index.html.twig", 2);
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
        $__internal_668031b68700749fc00d9097b44e070a7ad93b22dc39ed8dca2c973dd4b20b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668031b68700749fc00d9097b44e070a7ad93b22dc39ed8dca2c973dd4b20b89->enter($__internal_668031b68700749fc00d9097b44e070a7ad93b22dc39ed8dca2c973dd4b20b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webSite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668031b68700749fc00d9097b44e070a7ad93b22dc39ed8dca2c973dd4b20b89->leave($__internal_668031b68700749fc00d9097b44e070a7ad93b22dc39ed8dca2c973dd4b20b89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1a898c7e88353a8ccc441d473ca6e9321a8659bf434bfa81455924d513a6a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a898c7e88353a8ccc441d473ca6e9321a8659bf434bfa81455924d513a6a4d->enter($__internal_d1a898c7e88353a8ccc441d473ca6e9321a8659bf434bfa81455924d513a6a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide01.jpg"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h2>SIESSOC</h2>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide02.jpg"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>SIESSOC</h3>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide03.jpg"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>SIESSOC</h3>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Nuestras Ultimas Actividades</h1>

  <div class=\"row\">
  
  </div>
</div>
";
        
        $__internal_d1a898c7e88353a8ccc441d473ca6e9321a8659bf434bfa81455924d513a6a4d->leave($__internal_d1a898c7e88353a8ccc441d473ca6e9321a8659bf434bfa81455924d513a6a4d_prof);

    }

    public function getTemplateName()
    {
        return "webSite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 2,);
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
<header>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class=\"carousel-item active\" style=\"background-image: url({{ asset('img/slide01.jpg') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h2>SIESSOC</h2>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slide02.jpg') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>SIESSOC</h3>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slide03.jpg') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>SIESSOC</h3>
          <p>Educational Scholarships For Students Of Chiltiupan</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Nuestras Ultimas Actividades</h1>

  <div class=\"row\">
  
  </div>
</div>
{% endblock %}
", "webSite/index.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\webSite\\index.html.twig");
    }
}

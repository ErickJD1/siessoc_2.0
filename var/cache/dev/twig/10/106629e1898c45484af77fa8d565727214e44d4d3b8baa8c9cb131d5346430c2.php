<?php

/* webSite/index.html.twig */
class __TwigTemplate_c644853f57d45a098865557e5abaeda7f60f9284f11046680492f89cf26f8453 extends Twig_Template
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
        $__internal_8f40adddf3f2cca4715950b62b7d63ad9b9cb261f83e14c3602de16d5669ca4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f40adddf3f2cca4715950b62b7d63ad9b9cb261f83e14c3602de16d5669ca4c->enter($__internal_8f40adddf3f2cca4715950b62b7d63ad9b9cb261f83e14c3602de16d5669ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webSite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f40adddf3f2cca4715950b62b7d63ad9b9cb261f83e14c3602de16d5669ca4c->leave($__internal_8f40adddf3f2cca4715950b62b7d63ad9b9cb261f83e14c3602de16d5669ca4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdc44331c0e592b1b6741a301c3d92b666e246f789a39d427d78cacbcf89385a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc44331c0e592b1b6741a301c3d92b666e246f789a39d427d78cacbcf89385a->enter($__internal_fdc44331c0e592b1b6741a301c3d92b666e246f789a39d427d78cacbcf89385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdc44331c0e592b1b6741a301c3d92b666e246f789a39d427d78cacbcf89385a->leave($__internal_fdc44331c0e592b1b6741a301c3d92b666e246f789a39d427d78cacbcf89385a_prof);

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
", "webSite/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\webSite\\index.html.twig");
    }
}
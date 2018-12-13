<?php

/* :webSite:tapa.html.twig */
class __TwigTemplate_d516f24854b41750752be40c4ce377fe4983dc631c223069678aa4fea2e94c27 extends Twig_Template
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

  <!-- Portfolio Item Row -->
  <div class=\"row\">

    <div class=\"col-md-8\">
      <img class=\"img-fluid\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/tapas/" . $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : null), "foto", array()))), "html", null, true);
        echo "\" alt=\"\">
    </div>

    <div class=\"col-md-4\">
      <h3 class=\"my-3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : null), "nombre", array()), "html", null, true);
        echo "</h3>
      <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : null), "descripcion", array()), "html", null, true);
        echo "</p>
      <h3 class=\"my-3\">Ingredientes</h3>
      ";
        // line 20
        echo $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : null), "ingredientes", array());
        echo "
      ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_nueva_tapa", array("id" => $this->getAttribute((isset($context["tapa"]) ? $context["tapa"] : null), "id", array()))), "html", null, true);
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
        return array (  70 => 24,  64 => 22,  62 => 21,  58 => 20,  53 => 18,  49 => 17,  42 => 13,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":webSite:tapa.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/tapa.html.twig");
    }
}

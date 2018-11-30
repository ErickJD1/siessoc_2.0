<?php

/* :default/inc:footer.html.twig */
class __TwigTemplate_46213ae217d596491af70f12a1290e417fcb2b27955c21c4ef2b99a255c8b06b extends Twig_Template
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
        $__internal_d2c1bebe2987da45a9e55bf3750fea72a7fa37508d0ca89d4ca15f01379b7291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c1bebe2987da45a9e55bf3750fea72a7fa37508d0ca89d4ca15f01379b7291->enter($__internal_d2c1bebe2987da45a9e55bf3750fea72a7fa37508d0ca89d4ca15f01379b7291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default/inc:footer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Inicio</title>
        <!--CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">

        <!--javascripts-->
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js")), "html", null, true);
        echo "\"></script>
        <script>
        \$(document).ready(function(){
           \$('[data-toggle=\"tooptip\"]').tooltip();
        });
        </script>

        <link rel=\"stylesheet\"  href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse\">
              <div class=\"container-fluid\">
                <div class=\"navbar-header\">

                  <a class=\"navbar-brand\" href=\"#\">Symfony CRUD</a>
              </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">

        </div>
      </div>
    </nav>
  </div class=\"container\">
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 39
            echo "  <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["success_message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </body>
</html>
";
        
        $__internal_d2c1bebe2987da45a9e55bf3750fea72a7fa37508d0ca89d4ca15f01379b7291->leave($__internal_d2c1bebe2987da45a9e55bf3750fea72a7fa37508d0ca89d4ca15f01379b7291_prof);

    }

    public function getTemplateName()
    {
        return ":default/inc:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  86 => 39,  82 => 38,  62 => 21,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Inicio</title>
        <!--CSS-->
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/dataTables.bootstrap.min.css'))}}\">
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/fonts/font-awesome.css'))}}\">

        <!--javascripts-->
        <script src=\"{{absolute_url(asset('js/jquery-1.10.2.js'))}}\"></script>
        <script src=\"{{absolute_url(asset('js/jquery.dataTables.min.js'))}}\"></script>
        <script src=\"{{absolute_url(asset('js/dataTables.bootstrap.min.js'))}}\"></script>
        <script src=\"{{absolute_url(asset('js/bootstrap.js'))}}\"></script>
        <script>
        \$(document).ready(function(){
           \$('[data-toggle=\"tooptip\"]').tooltip();
        });
        </script>

        <link rel=\"stylesheet\"  href=\"{{ absolute_url(asset('css/bootstrap.css'))}}\" />
    </head>
    <body>
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse\">
              <div class=\"container-fluid\">
                <div class=\"navbar-header\">

                  <a class=\"navbar-brand\" href=\"#\">Symfony CRUD</a>
              </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">

        </div>
      </div>
    </nav>
  </div class=\"container\">
  {% for success_message in app.session.flashbag.get('message') %}
  <div class=\"alert alert-success\">{{ success_message }}</div>
  {% endfor %}
  </body>
</html>
", ":default/inc:footer.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/inc/footer.html.twig");
    }
}

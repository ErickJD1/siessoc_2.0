<?php

/* default/dashboard.html.twig */
class __TwigTemplate_5a2534516940c4a2855320bc89022434c7d9b281483482876248620284adea75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dddfd1f4f3939f6ac6baa197a8d36fe9937fc2628b1ddbd1ddb042760783dad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddfd1f4f3939f6ac6baa197a8d36fe9937fc2628b1ddbd1ddb042760783dad1->enter($__internal_dddfd1f4f3939f6ac6baa197a8d36fe9937fc2628b1ddbd1ddb042760783dad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dddfd1f4f3939f6ac6baa197a8d36fe9937fc2628b1ddbd1ddb042760783dad1->leave($__internal_dddfd1f4f3939f6ac6baa197a8d36fe9937fc2628b1ddbd1ddb042760783dad1_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9b0b45a0e12c0e924a7fbeaffb39a36daa5b23e925d27836f31d99f99cdb6a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0b45a0e12c0e924a7fbeaffb39a36daa5b23e925d27836f31d99f99cdb6a18->enter($__internal_9b0b45a0e12c0e924a7fbeaffb39a36daa5b23e925d27836f31d99f99cdb6a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_9b0b45a0e12c0e924a7fbeaffb39a36daa5b23e925d27836f31d99f99cdb6a18->leave($__internal_9b0b45a0e12c0e924a7fbeaffb39a36daa5b23e925d27836f31d99f99cdb6a18_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_254f18ee04f09357fa3a4aad8b34bcebbcc0ba6fbfd770ecbf7c2b9229ac8cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254f18ee04f09357fa3a4aad8b34bcebbcc0ba6fbfd770ecbf7c2b9229ac8cea->enter($__internal_254f18ee04f09357fa3a4aad8b34bcebbcc0ba6fbfd770ecbf7c2b9229ac8cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"box box-primary\" align=\"center\" style=\"\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\"><STRONG>Bienvenido ";
        // line 6
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        }
        echo "</STRONG></h2>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\" width=\"25%\"></img>
        <h3 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\">Sistema Informático Para La Gestión De Becas Universitarias Del Proyecto Educational Scholarships For Students Of Chiltiupan</h3>
        </p>
        <br></br>
        <br></br>
    </div>
";
        
        $__internal_254f18ee04f09357fa3a4aad8b34bcebbcc0ba6fbfd770ecbf7c2b9229ac8cea->leave($__internal_254f18ee04f09357fa3a4aad8b34bcebbcc0ba6fbfd770ecbf7c2b9229ac8cea_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
    <div class=\"box box-primary\" align=\"center\" style=\"\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\"><STRONG>Bienvenido {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}{{app.user.getName()}}{% endif %}</STRONG></h2>
        <img src=\"{{ asset('bundles/app/images/logo.jpg') }}\" width=\"25%\"></img>
        <h3 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\">Sistema Informático Para La Gestión De Becas Universitarias Del Proyecto Educational Scholarships For Students Of Chiltiupan</h3>
        </p>
        <br></br>
        <br></br>
    </div>
{% endblock %}", "default/dashboard.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/dashboard.html.twig");
    }
}

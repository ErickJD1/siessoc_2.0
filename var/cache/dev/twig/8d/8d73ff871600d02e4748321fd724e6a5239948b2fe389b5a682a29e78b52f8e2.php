<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb72122a0c85e6753d97ede4d4b300c0b145a6d17c8b83801aa9358ef4cc83f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de81e9e207b1a2463707b1588dc2721d6dd07902bc0d4313a033afae1423a0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de81e9e207b1a2463707b1588dc2721d6dd07902bc0d4313a033afae1423a0df->enter($__internal_de81e9e207b1a2463707b1588dc2721d6dd07902bc0d4313a033afae1423a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de81e9e207b1a2463707b1588dc2721d6dd07902bc0d4313a033afae1423a0df->leave($__internal_de81e9e207b1a2463707b1588dc2721d6dd07902bc0d4313a033afae1423a0df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_857dc16bb685649c30139a62878b0bc9da262c1001f74ed99d2b238fd8f0f9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857dc16bb685649c30139a62878b0bc9da262c1001f74ed99d2b238fd8f0f9ce->enter($__internal_857dc16bb685649c30139a62878b0bc9da262c1001f74ed99d2b238fd8f0f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_857dc16bb685649c30139a62878b0bc9da262c1001f74ed99d2b238fd8f0f9ce->leave($__internal_857dc16bb685649c30139a62878b0bc9da262c1001f74ed99d2b238fd8f0f9ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc5271aa1e484a63b20ac44accb0a8c1dd801e851fccfcc7da701bc30e3bf7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5271aa1e484a63b20ac44accb0a8c1dd801e851fccfcc7da701bc30e3bf7aa->enter($__internal_dc5271aa1e484a63b20ac44accb0a8c1dd801e851fccfcc7da701bc30e3bf7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc5271aa1e484a63b20ac44accb0a8c1dd801e851fccfcc7da701bc30e3bf7aa->leave($__internal_dc5271aa1e484a63b20ac44accb0a8c1dd801e851fccfcc7da701bc30e3bf7aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b239ada50a61032bc4eab1be0bdeed4c0d1cb26f6b52c59450e3512a78a120e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b239ada50a61032bc4eab1be0bdeed4c0d1cb26f6b52c59450e3512a78a120e4->enter($__internal_b239ada50a61032bc4eab1be0bdeed4c0d1cb26f6b52c59450e3512a78a120e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b239ada50a61032bc4eab1be0bdeed4c0d1cb26f6b52c59450e3512a78a120e4->leave($__internal_b239ada50a61032bc4eab1be0bdeed4c0d1cb26f6b52c59450e3512a78a120e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

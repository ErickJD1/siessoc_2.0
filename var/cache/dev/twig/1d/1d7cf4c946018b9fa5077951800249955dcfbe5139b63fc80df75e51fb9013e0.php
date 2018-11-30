<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8ee3647f568d62b8432004d830a34b88af5bde6fafb0d777d8c0241891b28a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e73cf45ce451aba17120669096f7e23fd0e62abd593b7337eec001ffa865d004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73cf45ce451aba17120669096f7e23fd0e62abd593b7337eec001ffa865d004->enter($__internal_e73cf45ce451aba17120669096f7e23fd0e62abd593b7337eec001ffa865d004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73cf45ce451aba17120669096f7e23fd0e62abd593b7337eec001ffa865d004->leave($__internal_e73cf45ce451aba17120669096f7e23fd0e62abd593b7337eec001ffa865d004_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0f5421168f40ba18980ab1617d726df4013605797312828463f4a1e1ecc0cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f5421168f40ba18980ab1617d726df4013605797312828463f4a1e1ecc0cde->enter($__internal_c0f5421168f40ba18980ab1617d726df4013605797312828463f4a1e1ecc0cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c0f5421168f40ba18980ab1617d726df4013605797312828463f4a1e1ecc0cde->leave($__internal_c0f5421168f40ba18980ab1617d726df4013605797312828463f4a1e1ecc0cde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6941fea6021e5c0220a45ccf2bb3f0964010532ff9a1705b06d5286fa2a40e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6941fea6021e5c0220a45ccf2bb3f0964010532ff9a1705b06d5286fa2a40e41->enter($__internal_6941fea6021e5c0220a45ccf2bb3f0964010532ff9a1705b06d5286fa2a40e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6941fea6021e5c0220a45ccf2bb3f0964010532ff9a1705b06d5286fa2a40e41->leave($__internal_6941fea6021e5c0220a45ccf2bb3f0964010532ff9a1705b06d5286fa2a40e41_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_146e1a32912ce9702575580378095364610c9545056a88237fdd5046d0bc4bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e1a32912ce9702575580378095364610c9545056a88237fdd5046d0bc4bbd->enter($__internal_146e1a32912ce9702575580378095364610c9545056a88237fdd5046d0bc4bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_146e1a32912ce9702575580378095364610c9545056a88237fdd5046d0bc4bbd->leave($__internal_146e1a32912ce9702575580378095364610c9545056a88237fdd5046d0bc4bbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

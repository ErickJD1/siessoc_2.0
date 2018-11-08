<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5c2d8b1aea804925193899019206f657fe1c578b6da0fd19439c95d4f9d0321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fd86b81599c4eb9b77640ee9532f8568cc1502c5993babdb18ba94b1c2ced07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd86b81599c4eb9b77640ee9532f8568cc1502c5993babdb18ba94b1c2ced07f->enter($__internal_fd86b81599c4eb9b77640ee9532f8568cc1502c5993babdb18ba94b1c2ced07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd86b81599c4eb9b77640ee9532f8568cc1502c5993babdb18ba94b1c2ced07f->leave($__internal_fd86b81599c4eb9b77640ee9532f8568cc1502c5993babdb18ba94b1c2ced07f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b4d7b18ec885d20370685c3c21083fa1f88048e4258b3a1f30f5aa4f934664e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4d7b18ec885d20370685c3c21083fa1f88048e4258b3a1f30f5aa4f934664e->enter($__internal_4b4d7b18ec885d20370685c3c21083fa1f88048e4258b3a1f30f5aa4f934664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4b4d7b18ec885d20370685c3c21083fa1f88048e4258b3a1f30f5aa4f934664e->leave($__internal_4b4d7b18ec885d20370685c3c21083fa1f88048e4258b3a1f30f5aa4f934664e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a93eaf1a8afe3dad5c6f5898e731be93eaaa8b023386767865cd0c9bae71bd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93eaf1a8afe3dad5c6f5898e731be93eaaa8b023386767865cd0c9bae71bd69->enter($__internal_a93eaf1a8afe3dad5c6f5898e731be93eaaa8b023386767865cd0c9bae71bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a93eaf1a8afe3dad5c6f5898e731be93eaaa8b023386767865cd0c9bae71bd69->leave($__internal_a93eaf1a8afe3dad5c6f5898e731be93eaaa8b023386767865cd0c9bae71bd69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

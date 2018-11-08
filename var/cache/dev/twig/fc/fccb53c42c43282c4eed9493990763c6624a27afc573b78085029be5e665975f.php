<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_65096b0d28ddb2625a195ecc78d09faf9d54575df16d629122bc2f5dcc5073b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6820c1ff8d311b26fb13d032b829d147be5a761c2930a8dcfa079826a952a0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6820c1ff8d311b26fb13d032b829d147be5a761c2930a8dcfa079826a952a0a2->enter($__internal_6820c1ff8d311b26fb13d032b829d147be5a761c2930a8dcfa079826a952a0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6820c1ff8d311b26fb13d032b829d147be5a761c2930a8dcfa079826a952a0a2->leave($__internal_6820c1ff8d311b26fb13d032b829d147be5a761c2930a8dcfa079826a952a0a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e73a0288263675b60517122d2ec019f377632448e2472f9f21604b50e6f82e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73a0288263675b60517122d2ec019f377632448e2472f9f21604b50e6f82e43->enter($__internal_e73a0288263675b60517122d2ec019f377632448e2472f9f21604b50e6f82e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e73a0288263675b60517122d2ec019f377632448e2472f9f21604b50e6f82e43->leave($__internal_e73a0288263675b60517122d2ec019f377632448e2472f9f21604b50e6f82e43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

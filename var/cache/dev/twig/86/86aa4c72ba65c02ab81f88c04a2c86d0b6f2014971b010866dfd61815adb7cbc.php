<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_32cf6b1672149af6ffb21fbfa7d997861f5eeec2ed480fcd8ce6c81baf394aa5 extends Twig_Template
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
        $__internal_0eb52c911f7f0ee0bf30c6964757dd1cfafdb74ad851a5c7851d6f3a2cb81533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb52c911f7f0ee0bf30c6964757dd1cfafdb74ad851a5c7851d6f3a2cb81533->enter($__internal_0eb52c911f7f0ee0bf30c6964757dd1cfafdb74ad851a5c7851d6f3a2cb81533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb52c911f7f0ee0bf30c6964757dd1cfafdb74ad851a5c7851d6f3a2cb81533->leave($__internal_0eb52c911f7f0ee0bf30c6964757dd1cfafdb74ad851a5c7851d6f3a2cb81533_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65e4e53994d70551cfb23a424b9b67a5e6b7c2a87de47a09ecd376c097d529c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e4e53994d70551cfb23a424b9b67a5e6b7c2a87de47a09ecd376c097d529c4->enter($__internal_65e4e53994d70551cfb23a424b9b67a5e6b7c2a87de47a09ecd376c097d529c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_65e4e53994d70551cfb23a424b9b67a5e6b7c2a87de47a09ecd376c097d529c4->leave($__internal_65e4e53994d70551cfb23a424b9b67a5e6b7c2a87de47a09ecd376c097d529c4_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

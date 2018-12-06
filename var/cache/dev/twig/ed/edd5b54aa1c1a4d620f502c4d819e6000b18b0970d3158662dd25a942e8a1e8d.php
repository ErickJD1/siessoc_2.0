<?php

/* @SalexUser/Security/login.html.twig */
class __TwigTemplate_e7eb33d1a48b0898ee8e3b46a1341d65eb908aa40dd4d9a1c03c5ab11043d51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Security/login.html.twig", 2);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecfbc0f68becd7fae0bd8b8b1bd90a6feb289fdefd3407c7be55a5aded3d9ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfbc0f68becd7fae0bd8b8b1bd90a6feb289fdefd3407c7be55a5aded3d9ce7->enter($__internal_ecfbc0f68becd7fae0bd8b8b1bd90a6feb289fdefd3407c7be55a5aded3d9ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfbc0f68becd7fae0bd8b8b1bd90a6feb289fdefd3407c7be55a5aded3d9ce7->leave($__internal_ecfbc0f68becd7fae0bd8b8b1bd90a6feb289fdefd3407c7be55a5aded3d9ce7_prof);

    }

    // line 6
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_a07254aa39508ba6b82f9cfd69beede7d57c6926f8dc7c63254e3b6b7136e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07254aa39508ba6b82f9cfd69beede7d57c6926f8dc7c63254e3b6b7136e3f8->enter($__internal_a07254aa39508ba6b82f9cfd69beede7d57c6926f8dc7c63254e3b6b7136e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t\t  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t  </div>
\t\t\t</div><!-- /.col -->
\t\t\t<div class=\"col-xs-4\">
\t\t\t  <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t</div><!-- /.col -->
\t\t</div>
\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">I forgot my password</a>
\t</form>
";
        
        $__internal_a07254aa39508ba6b82f9cfd69beede7d57c6926f8dc7c63254e3b6b7136e3f8->leave($__internal_a07254aa39508ba6b82f9cfd69beede7d57c6926f8dc7c63254e3b6b7136e3f8_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  86 => 29,  79 => 25,  69 => 18,  60 => 14,  54 => 11,  49 => 10,  43 => 8,  40 => 7,  34 => 6,  11 => 2,);
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
{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents  %}
    {% if error %}
\t\t<div class=\"alert alert-danger alert-dismissible\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" />
\t\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t\t  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> {{ 'security.login.remember_me'|trans }}
\t\t\t  </div>
\t\t\t</div><!-- /.col -->
\t\t\t<div class=\"col-xs-4\">
\t\t\t  <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"{{ 'security.login.submit'|trans }}\">
\t\t\t</div><!-- /.col -->
\t\t</div>
\t\t<a href=\"{{ path('fos_user_resetting_request') }}\">I forgot my password</a>
\t</form>
{% endblock user_auth_contents %}
", "@SalexUser/Security/login.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

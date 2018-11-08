<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7a684f9e77bf0b1f58a278360e89cc43a63553849a4a7ffbafb6d67200fdb8f3 extends Twig_Template
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
        $__internal_9ec5da765396246ecb9cda3d900ddbf2772bdff38ae7954ed89ca812a6a6791d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec5da765396246ecb9cda3d900ddbf2772bdff38ae7954ed89ca812a6a6791d->enter($__internal_9ec5da765396246ecb9cda3d900ddbf2772bdff38ae7954ed89ca812a6a6791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <div class=\"alert alert-danger alert-dismissible\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        <p>Enter your username or email address to reset the password. </p>
        <div class=\"form-group has-feedback\">
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
        </div>
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\" />
    </div>
</form>";
        
        $__internal_9ec5da765396246ecb9cda3d900ddbf2772bdff38ae7954ed89ca812a6a6791d->leave($__internal_9ec5da765396246ecb9cda3d900ddbf2772bdff38ae7954ed89ca812a6a6791d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  42 => 10,  38 => 8,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        {% if invalid_username is defined %}
            <div class=\"alert alert-danger alert-dismissible\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</div>
        {% endif %}
        <p>Enter your username or email address to reset the password. </p>
        <div class=\"form-group has-feedback\">
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"{{ 'resetting.request.username'|trans }}\" />
            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
        </div>
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" class=\"btn btn-primary btn-block btn-flat\" />
    </div>
</form>", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}

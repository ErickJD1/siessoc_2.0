<?php

/* @SalexUser/Resetting/request_content.html.twig */
class __TwigTemplate_a8c6f794dfab52021d5957f62a6403b7247a156e28019fc0d50555e4a57ba1ac extends Twig_Template
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
        $__internal_45f1de72f6c4455864f83c4c97cceccd2d035f6906b133eb59aeec328470abcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f1de72f6c4455864f83c4c97cceccd2d035f6906b133eb59aeec328470abcf->enter($__internal_45f1de72f6c4455864f83c4c97cceccd2d035f6906b133eb59aeec328470abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/request_content.html.twig"));

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
        
        $__internal_45f1de72f6c4455864f83c4c97cceccd2d035f6906b133eb59aeec328470abcf->leave($__internal_45f1de72f6c4455864f83c4c97cceccd2d035f6906b133eb59aeec328470abcf_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/request_content.html.twig";
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
</form>", "@SalexUser/Resetting/request_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}

<?php

/* @AvanzuAdminTheme/Security/login.html.twig */
class __TwigTemplate_3ebccc6e21e6fa8f60e8a5800bb16156fd35fb3ead68b4dd7ab609a65bcd4f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_796524a0861cef87a332d267e9450e79e5aaf4613da4b6cc5e08cd2a6cb84d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796524a0861cef87a332d267e9450e79e5aaf4613da4b6cc5e08cd2a6cb84d11->enter($__internal_796524a0861cef87a332d267e9450e79e5aaf4613da4b6cc5e08cd2a6cb84d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"bg-black\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3ca43a5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3ca43a5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3ca43a5_part_1.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // asset "3ca43a5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3ca43a5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3ca43a5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class=\"bg-black\">

<div class=\"form-box\" id=\"login-box\">
    <div class=\"header\">Sign In</div>
    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
            </div>
            ";
        // line 35
        echo "        </div>
        <div class=\"footer\">
            <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>

            <p><a href=\"#\">I forgot my password</a></p>

            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
        </div>
    </form>

    <div class=\"margin text-center\">
        <span>Sign in using social networks</span>
        <br/>
        <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
        <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
        <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

</body>
</html>";
        
        $__internal_796524a0861cef87a332d267e9450e79e5aaf4613da4b6cc5e08cd2a6cb84d11->leave($__internal_796524a0861cef87a332d267e9450e79e5aaf4613da4b6cc5e08cd2a6cb84d11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20f54365caa06fa30ef27e3e46780ee72fc14550eaed7be1bdfd5d7dcf13a836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f54365caa06fa30ef27e3e46780ee72fc14550eaed7be1bdfd5d7dcf13a836->enter($__internal_20f54365caa06fa30ef27e3e46780ee72fc14550eaed7be1bdfd5d7dcf13a836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Log in ";
        
        $__internal_20f54365caa06fa30ef27e3e46780ee72fc14550eaed7be1bdfd5d7dcf13a836->leave($__internal_20f54365caa06fa30ef27e3e46780ee72fc14550eaed7be1bdfd5d7dcf13a836_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 5,  80 => 35,  72 => 25,  66 => 22,  53 => 11,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
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
<html class=\"bg-black\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} Log in {% endblock %}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    {% stylesheets '@admin_lte_css' %}
    <link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
    {% endstylesheets %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class=\"bg-black\">

<div class=\"form-box\" id=\"login-box\">
    <div class=\"header\">Sign In</div>
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"{{ last_username }}\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
            </div>
            {#
            <div class=\"form-group\">
                <input type=\"checkbox\" name=\"remember_me\"/> Remember me
            </div>
            #}
        </div>
        <div class=\"footer\">
            <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>

            <p><a href=\"#\">I forgot my password</a></p>

            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
        </div>
    </form>

    <div class=\"margin text-center\">
        <span>Sign in using social networks</span>
        <br/>
        <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
        <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
        <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

</body>
</html>", "@AvanzuAdminTheme/Security/login.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}

<?php

/* :layout:user.html.twig */
class __TwigTemplate_1b3a85a46da9de012b9841e5e5d20d7dca75ee1b6485dd58097489b925d88284 extends Twig_Template
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
        // line 1
        echo "<!-- User Account: style can be found in dropdown.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":layout:user.html.twig", 2);
        // line 3
        $context["user_image"] = false;
        // line 4
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"))) {
            // line 5
            echo "    ";
            $context["user_image"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"));
        }
        // line 7
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 9
        echo $context["macro"]->getavatar((isset($context["user_image"]) ? $context["user_image"] : null), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "user-image");
        echo "
        <span class=\"hidden-xs\">";
        // line 10
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 15
        echo $context["macro"]->getavatar((isset($context["user_image"]) ? $context["user_image"] : null), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()));
        echo "
            <p>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo "
                <small>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Login %date%", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastLogin", array()), "d.m.Y g:i A")), "AvanzuAdminTheme"), "html", null, true);
        echo "</small>
            </p>
        </li>
        <!-- Menu Body -->
       ";
        // line 33
        echo "        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_profile");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
        </li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return ":layout:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  69 => 36,  64 => 33,  57 => 18,  53 => 17,  48 => 15,  40 => 10,  36 => 9,  32 => 7,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":layout:user.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout/user.html.twig");
    }
}

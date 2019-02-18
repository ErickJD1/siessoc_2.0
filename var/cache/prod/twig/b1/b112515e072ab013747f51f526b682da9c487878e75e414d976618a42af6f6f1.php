<?php

/* layout/user-panel.html.twig */
class __TwigTemplate_6eaae9194fa70da9e766ee179514a6c00a1506d9c7f0c7d81457df5297145143 extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        $context["user_image"] = false;
        // line 6
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"))) {
            // line 7
            echo "        ";
            $context["user_image"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"));
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        echo $context["macro"]->getavatar((isset($context["user_image"]) ? $context["user_image"] : null), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>Username&nbsp;|&nbsp;";
        // line 12
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserName", array(), "method")), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  37 => 9,  34 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/user-panel.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout/user-panel.html.twig");
    }
}

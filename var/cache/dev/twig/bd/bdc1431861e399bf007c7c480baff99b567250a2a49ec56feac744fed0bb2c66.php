<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_328ea913e784af767d2564220eb8bb73b24175ed195d97a8eec0b30ff0b59957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_221f93b3535f697ac32bacd22b2ba79f111c31e02118953bf2d21559adb4f1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221f93b3535f697ac32bacd22b2ba79f111c31e02118953bf2d21559adb4f1c0->enter($__internal_221f93b3535f697ac32bacd22b2ba79f111c31e02118953bf2d21559adb4f1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221f93b3535f697ac32bacd22b2ba79f111c31e02118953bf2d21559adb4f1c0->leave($__internal_221f93b3535f697ac32bacd22b2ba79f111c31e02118953bf2d21559adb4f1c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d02f9d7c8ad9dd3e2cc66c7244ba0e1b219d3a5137103adbcfd39f5fac53eeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02f9d7c8ad9dd3e2cc66c7244ba0e1b219d3a5137103adbcfd39f5fac53eeeb->enter($__internal_d02f9d7c8ad9dd3e2cc66c7244ba0e1b219d3a5137103adbcfd39f5fac53eeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d02f9d7c8ad9dd3e2cc66c7244ba0e1b219d3a5137103adbcfd39f5fac53eeeb->leave($__internal_d02f9d7c8ad9dd3e2cc66c7244ba0e1b219d3a5137103adbcfd39f5fac53eeeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

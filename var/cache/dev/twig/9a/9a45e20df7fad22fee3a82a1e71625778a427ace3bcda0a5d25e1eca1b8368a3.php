<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8789ebc0821a9d529f6ac62995719f74c0ce364ac98df9fcc0eb2049c5be4f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_73cb28ff4c91fa5ea1a339d586e93a65c00707b983b97251b78d1558c7b0867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cb28ff4c91fa5ea1a339d586e93a65c00707b983b97251b78d1558c7b0867a->enter($__internal_73cb28ff4c91fa5ea1a339d586e93a65c00707b983b97251b78d1558c7b0867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73cb28ff4c91fa5ea1a339d586e93a65c00707b983b97251b78d1558c7b0867a->leave($__internal_73cb28ff4c91fa5ea1a339d586e93a65c00707b983b97251b78d1558c7b0867a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_734e93eb146aadeb6e0499a26aef7c95f519e6b6ddaa8677c084411aba9eb7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734e93eb146aadeb6e0499a26aef7c95f519e6b6ddaa8677c084411aba9eb7ff->enter($__internal_734e93eb146aadeb6e0499a26aef7c95f519e6b6ddaa8677c084411aba9eb7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_734e93eb146aadeb6e0499a26aef7c95f519e6b6ddaa8677c084411aba9eb7ff->leave($__internal_734e93eb146aadeb6e0499a26aef7c95f519e6b6ddaa8677c084411aba9eb7ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

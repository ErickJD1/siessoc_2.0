<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8e53eb094d7cbd45657e2e29f9fb7ad8f5334357d3c78fbeb4327b17b42ee817 extends Twig_Template
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
        $__internal_01f66070b7ede50bd2f39cbe3c9e2bdda26b4634e99cb6f5c991d8ce47709864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f66070b7ede50bd2f39cbe3c9e2bdda26b4634e99cb6f5c991d8ce47709864->enter($__internal_01f66070b7ede50bd2f39cbe3c9e2bdda26b4634e99cb6f5c991d8ce47709864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f66070b7ede50bd2f39cbe3c9e2bdda26b4634e99cb6f5c991d8ce47709864->leave($__internal_01f66070b7ede50bd2f39cbe3c9e2bdda26b4634e99cb6f5c991d8ce47709864_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a17536d43dd081e64b2af9b676b392810450430dc21e04ed587061835afce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a17536d43dd081e64b2af9b676b392810450430dc21e04ed587061835afce02->enter($__internal_1a17536d43dd081e64b2af9b676b392810450430dc21e04ed587061835afce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1a17536d43dd081e64b2af9b676b392810450430dc21e04ed587061835afce02->leave($__internal_1a17536d43dd081e64b2af9b676b392810450430dc21e04ed587061835afce02_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}

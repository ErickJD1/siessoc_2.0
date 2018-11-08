<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_aef9ffc83b25c30cf27cdeb16810763fa1018df079961f1b2dd28bc8bfd14910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_dd7d00a5762837cc03931bae2f395293bd90049991f0f5e52124eb18d1d6bcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7d00a5762837cc03931bae2f395293bd90049991f0f5e52124eb18d1d6bcb5->enter($__internal_dd7d00a5762837cc03931bae2f395293bd90049991f0f5e52124eb18d1d6bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7d00a5762837cc03931bae2f395293bd90049991f0f5e52124eb18d1d6bcb5->leave($__internal_dd7d00a5762837cc03931bae2f395293bd90049991f0f5e52124eb18d1d6bcb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b31998785f4af6433ca0f3fbe58c22af7d0245f5f902630bb7748e18d7d48a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31998785f4af6433ca0f3fbe58c22af7d0245f5f902630bb7748e18d7d48a28->enter($__internal_b31998785f4af6433ca0f3fbe58c22af7d0245f5f902630bb7748e18d7d48a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b31998785f4af6433ca0f3fbe58c22af7d0245f5f902630bb7748e18d7d48a28->leave($__internal_b31998785f4af6433ca0f3fbe58c22af7d0245f5f902630bb7748e18d7d48a28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}

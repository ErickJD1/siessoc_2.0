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
        $__internal_8674e6d3d58c87e19f05956a78d3293a7c61c45c3e731685351c6f6d6de28d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8674e6d3d58c87e19f05956a78d3293a7c61c45c3e731685351c6f6d6de28d1e->enter($__internal_8674e6d3d58c87e19f05956a78d3293a7c61c45c3e731685351c6f6d6de28d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8674e6d3d58c87e19f05956a78d3293a7c61c45c3e731685351c6f6d6de28d1e->leave($__internal_8674e6d3d58c87e19f05956a78d3293a7c61c45c3e731685351c6f6d6de28d1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64fab8f8901986a34999852c3474a32d4b2604cd9fa279dd20c8da9402dccc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fab8f8901986a34999852c3474a32d4b2604cd9fa279dd20c8da9402dccc06->enter($__internal_64fab8f8901986a34999852c3474a32d4b2604cd9fa279dd20c8da9402dccc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_64fab8f8901986a34999852c3474a32d4b2604cd9fa279dd20c8da9402dccc06->leave($__internal_64fab8f8901986a34999852c3474a32d4b2604cd9fa279dd20c8da9402dccc06_prof);

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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}

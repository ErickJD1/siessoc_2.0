<?php

/* SalexUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_14d54a4e23b58a7d794e911d5c1173cfcbcc09ef8930deab6fb7331d884ed120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22e5478c586efaab66f610ca23f15bff40c00ebe39a41a1c90671e7dd76b63da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e5478c586efaab66f610ca23f15bff40c00ebe39a41a1c90671e7dd76b63da->enter($__internal_22e5478c586efaab66f610ca23f15bff40c00ebe39a41a1c90671e7dd76b63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e5478c586efaab66f610ca23f15bff40c00ebe39a41a1c90671e7dd76b63da->leave($__internal_22e5478c586efaab66f610ca23f15bff40c00ebe39a41a1c90671e7dd76b63da_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_197bac127112eb375cf544423a9166480cfbfb2f85e38f9c9d30a68de37b6bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197bac127112eb375cf544423a9166480cfbfb2f85e38f9c9d30a68de37b6bc1->enter($__internal_197bac127112eb375cf544423a9166480cfbfb2f85e38f9c9d30a68de37b6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_197bac127112eb375cf544423a9166480cfbfb2f85e38f9c9d30a68de37b6bc1->leave($__internal_197bac127112eb375cf544423a9166480cfbfb2f85e38f9c9d30a68de37b6bc1_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e0a4f79546670aefb951d516db6ada42ac0f1110c9bc1280cb19f5e81d427c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a4f79546670aefb951d516db6ada42ac0f1110c9bc1280cb19f5e81d427c92->enter($__internal_e0a4f79546670aefb951d516db6ada42ac0f1110c9bc1280cb19f5e81d427c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_e0a4f79546670aefb951d516db6ada42ac0f1110c9bc1280cb19f5e81d427c92->leave($__internal_e0a4f79546670aefb951d516db6ada42ac0f1110c9bc1280cb19f5e81d427c92_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f9786a4b3e9596c623b59f5e9db651a585ddd2ebb2e4082a4d9bfcd06def741f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9786a4b3e9596c623b59f5e9db651a585ddd2ebb2e4082a4d9bfcd06def741f->enter($__internal_f9786a4b3e9596c623b59f5e9db651a585ddd2ebb2e4082a4d9bfcd06def741f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_f9786a4b3e9596c623b59f5e9db651a585ddd2ebb2e4082a4d9bfcd06def741f->leave($__internal_f9786a4b3e9596c623b59f5e9db651a585ddd2ebb2e4082a4d9bfcd06def741f_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 11,  68 => 8,  62 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %}Change Password  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}


{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                {% include \"SalexUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
{% endblock %}", "SalexUserBundle:ChangePassword:changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}

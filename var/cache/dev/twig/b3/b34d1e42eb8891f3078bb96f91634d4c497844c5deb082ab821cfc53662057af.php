<?php

/* @SalexUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c6f57de351d5809e5bcedb14ba1854c8202585e62219a032ec7584eaaf7a7670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_7ef1e931ed7a0a0435e968fb1fd16bda436dc7d98f6c81f65800e874a92bfb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef1e931ed7a0a0435e968fb1fd16bda436dc7d98f6c81f65800e874a92bfb86->enter($__internal_7ef1e931ed7a0a0435e968fb1fd16bda436dc7d98f6c81f65800e874a92bfb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef1e931ed7a0a0435e968fb1fd16bda436dc7d98f6c81f65800e874a92bfb86->leave($__internal_7ef1e931ed7a0a0435e968fb1fd16bda436dc7d98f6c81f65800e874a92bfb86_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8bf38e346d0b53fe350cc8cd479113dac333dbc1678c04ef085e287b14e9cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf38e346d0b53fe350cc8cd479113dac333dbc1678c04ef085e287b14e9cc36->enter($__internal_8bf38e346d0b53fe350cc8cd479113dac333dbc1678c04ef085e287b14e9cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_8bf38e346d0b53fe350cc8cd479113dac333dbc1678c04ef085e287b14e9cc36->leave($__internal_8bf38e346d0b53fe350cc8cd479113dac333dbc1678c04ef085e287b14e9cc36_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_372d0244187cf9e72620c25174624fbc98afb51c39b8a4dcb782e3a3b4c970c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372d0244187cf9e72620c25174624fbc98afb51c39b8a4dcb782e3a3b4c970c2->enter($__internal_372d0244187cf9e72620c25174624fbc98afb51c39b8a4dcb782e3a3b4c970c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_372d0244187cf9e72620c25174624fbc98afb51c39b8a4dcb782e3a3b4c970c2->leave($__internal_372d0244187cf9e72620c25174624fbc98afb51c39b8a4dcb782e3a3b4c970c2_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dc72710058b54ab726cd99fe020dcaf3e93f95e9d2dc40958265733ccd60eb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc72710058b54ab726cd99fe020dcaf3e93f95e9d2dc40958265733ccd60eb90->enter($__internal_dc72710058b54ab726cd99fe020dcaf3e93f95e9d2dc40958265733ccd60eb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_dc72710058b54ab726cd99fe020dcaf3e93f95e9d2dc40958265733ccd60eb90->leave($__internal_dc72710058b54ab726cd99fe020dcaf3e93f95e9d2dc40958265733ccd60eb90_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/ChangePassword/changePassword.html.twig";
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
{% endblock %}", "@SalexUser/ChangePassword/changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}

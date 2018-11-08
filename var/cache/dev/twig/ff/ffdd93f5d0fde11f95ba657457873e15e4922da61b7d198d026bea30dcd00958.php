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
        $__internal_042c668e2edf06f44a0f0c940001a13bb26da74fbc06c94739f534f12abaaae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042c668e2edf06f44a0f0c940001a13bb26da74fbc06c94739f534f12abaaae9->enter($__internal_042c668e2edf06f44a0f0c940001a13bb26da74fbc06c94739f534f12abaaae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042c668e2edf06f44a0f0c940001a13bb26da74fbc06c94739f534f12abaaae9->leave($__internal_042c668e2edf06f44a0f0c940001a13bb26da74fbc06c94739f534f12abaaae9_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a3763e38b80be8c43eb107fb95158606581e825abd6f8ce60ddaa2b9b9206146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3763e38b80be8c43eb107fb95158606581e825abd6f8ce60ddaa2b9b9206146->enter($__internal_a3763e38b80be8c43eb107fb95158606581e825abd6f8ce60ddaa2b9b9206146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_a3763e38b80be8c43eb107fb95158606581e825abd6f8ce60ddaa2b9b9206146->leave($__internal_a3763e38b80be8c43eb107fb95158606581e825abd6f8ce60ddaa2b9b9206146_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_949a5dccaf30ab7b9bae3fbb8d9a5869842da04f1efb6d1ef1868bc8ef414440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949a5dccaf30ab7b9bae3fbb8d9a5869842da04f1efb6d1ef1868bc8ef414440->enter($__internal_949a5dccaf30ab7b9bae3fbb8d9a5869842da04f1efb6d1ef1868bc8ef414440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_949a5dccaf30ab7b9bae3fbb8d9a5869842da04f1efb6d1ef1868bc8ef414440->leave($__internal_949a5dccaf30ab7b9bae3fbb8d9a5869842da04f1efb6d1ef1868bc8ef414440_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b1c692da300e998a9d59ba8fd6d81458153588e72c79e746e1d8e04f9102decd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c692da300e998a9d59ba8fd6d81458153588e72c79e746e1d8e04f9102decd->enter($__internal_b1c692da300e998a9d59ba8fd6d81458153588e72c79e746e1d8e04f9102decd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b1c692da300e998a9d59ba8fd6d81458153588e72c79e746e1d8e04f9102decd->leave($__internal_b1c692da300e998a9d59ba8fd6d81458153588e72c79e746e1d8e04f9102decd_prof);

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

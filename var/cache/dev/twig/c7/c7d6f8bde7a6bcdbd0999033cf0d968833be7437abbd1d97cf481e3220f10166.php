<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bed0c3b792b041e3b2a84942217257cd69ea596ff565507c62286ac3ed2f76e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_87909ee8db4f85a2486ba377a06a8a151a787bf312bb058485048c03e6dc9d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87909ee8db4f85a2486ba377a06a8a151a787bf312bb058485048c03e6dc9d14->enter($__internal_87909ee8db4f85a2486ba377a06a8a151a787bf312bb058485048c03e6dc9d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87909ee8db4f85a2486ba377a06a8a151a787bf312bb058485048c03e6dc9d14->leave($__internal_87909ee8db4f85a2486ba377a06a8a151a787bf312bb058485048c03e6dc9d14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e06e044cfd1b8e6bdc0f4bb86ebfd4bc2f985440faf60e125af82ef2bec35dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06e044cfd1b8e6bdc0f4bb86ebfd4bc2f985440faf60e125af82ef2bec35dd5->enter($__internal_e06e044cfd1b8e6bdc0f4bb86ebfd4bc2f985440faf60e125af82ef2bec35dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_e06e044cfd1b8e6bdc0f4bb86ebfd4bc2f985440faf60e125af82ef2bec35dd5->leave($__internal_e06e044cfd1b8e6bdc0f4bb86ebfd4bc2f985440faf60e125af82ef2bec35dd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}

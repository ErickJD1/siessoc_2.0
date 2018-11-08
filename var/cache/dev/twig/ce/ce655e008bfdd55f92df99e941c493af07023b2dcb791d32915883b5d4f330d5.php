<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4ed2f7ccf9860bc744466180f288794f94546fad289c06f9e85ca0bf00b5b1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09022c1f2d6712276f707737b582df5afae46d4cb13e8707c66c7d920e866c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09022c1f2d6712276f707737b582df5afae46d4cb13e8707c66c7d920e866c20->enter($__internal_09022c1f2d6712276f707737b582df5afae46d4cb13e8707c66c7d920e866c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09022c1f2d6712276f707737b582df5afae46d4cb13e8707c66c7d920e866c20->leave($__internal_09022c1f2d6712276f707737b582df5afae46d4cb13e8707c66c7d920e866c20_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_163b50af2b51090c7e9370634b7a3d4a17bfcdd6fade67e54236d91b07858d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163b50af2b51090c7e9370634b7a3d4a17bfcdd6fade67e54236d91b07858d4e->enter($__internal_163b50af2b51090c7e9370634b7a3d4a17bfcdd6fade67e54236d91b07858d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_163b50af2b51090c7e9370634b7a3d4a17bfcdd6fade67e54236d91b07858d4e->leave($__internal_163b50af2b51090c7e9370634b7a3d4a17bfcdd6fade67e54236d91b07858d4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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

{% block user_auth_contents %}
{% include \"SalexUserBundle:Resetting:request_content.html.twig\" %}
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}

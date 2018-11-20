<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2c7040d59617364c84a2060bd8fe9458c191d000226bb1ba6bb40c139413e237 extends Twig_Template
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
        $__internal_e5cef4140ace081bb03c2d4166f1cbda05c4c6036f355ef420dca10a4db26653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cef4140ace081bb03c2d4166f1cbda05c4c6036f355ef420dca10a4db26653->enter($__internal_e5cef4140ace081bb03c2d4166f1cbda05c4c6036f355ef420dca10a4db26653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5cef4140ace081bb03c2d4166f1cbda05c4c6036f355ef420dca10a4db26653->leave($__internal_e5cef4140ace081bb03c2d4166f1cbda05c4c6036f355ef420dca10a4db26653_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_d740f0d11771a9da1d5ba816333f1a6fb18ea6dc91f6d47b0d2a07ce965e2f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d740f0d11771a9da1d5ba816333f1a6fb18ea6dc91f6d47b0d2a07ce965e2f51->enter($__internal_d740f0d11771a9da1d5ba816333f1a6fb18ea6dc91f6d47b0d2a07ce965e2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d740f0d11771a9da1d5ba816333f1a6fb18ea6dc91f6d47b0d2a07ce965e2f51->leave($__internal_d740f0d11771a9da1d5ba816333f1a6fb18ea6dc91f6d47b0d2a07ce965e2f51_prof);

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

<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2226fb5ac3add648ee331f319c87afa189f888991654920a949374020f232aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d28eb569d66b39f34cabbfdfd896a77bc1189f858cd0240afd66a0c243c584c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28eb569d66b39f34cabbfdfd896a77bc1189f858cd0240afd66a0c243c584c9->enter($__internal_d28eb569d66b39f34cabbfdfd896a77bc1189f858cd0240afd66a0c243c584c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28eb569d66b39f34cabbfdfd896a77bc1189f858cd0240afd66a0c243c584c9->leave($__internal_d28eb569d66b39f34cabbfdfd896a77bc1189f858cd0240afd66a0c243c584c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9c33b18d265e2d2f69a8c0de7e5ac3aa80435b3ee6dce7d50c8276a6265a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c33b18d265e2d2f69a8c0de7e5ac3aa80435b3ee6dce7d50c8276a6265a939->enter($__internal_b9c33b18d265e2d2f69a8c0de7e5ac3aa80435b3ee6dce7d50c8276a6265a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b9c33b18d265e2d2f69a8c0de7e5ac3aa80435b3ee6dce7d50c8276a6265a939->leave($__internal_b9c33b18d265e2d2f69a8c0de7e5ac3aa80435b3ee6dce7d50c8276a6265a939_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}

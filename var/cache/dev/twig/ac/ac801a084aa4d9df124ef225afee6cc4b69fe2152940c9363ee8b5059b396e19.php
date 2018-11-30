<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ec01757e68daffb8d491cf84e95fb7ba7208e306d0a462e540e60168d1c8ac94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ac8af68ceff10a3b90c9f17717ac6ad1a10d8b804dc1ae304567c3b7446e6e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8af68ceff10a3b90c9f17717ac6ad1a10d8b804dc1ae304567c3b7446e6e80->enter($__internal_ac8af68ceff10a3b90c9f17717ac6ad1a10d8b804dc1ae304567c3b7446e6e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8af68ceff10a3b90c9f17717ac6ad1a10d8b804dc1ae304567c3b7446e6e80->leave($__internal_ac8af68ceff10a3b90c9f17717ac6ad1a10d8b804dc1ae304567c3b7446e6e80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12da9036574f7f55d12c89c69813be3e36f6894af23912df519cab287b445cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12da9036574f7f55d12c89c69813be3e36f6894af23912df519cab287b445cca->enter($__internal_12da9036574f7f55d12c89c69813be3e36f6894af23912df519cab287b445cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_12da9036574f7f55d12c89c69813be3e36f6894af23912df519cab287b445cca->leave($__internal_12da9036574f7f55d12c89c69813be3e36f6894af23912df519cab287b445cca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

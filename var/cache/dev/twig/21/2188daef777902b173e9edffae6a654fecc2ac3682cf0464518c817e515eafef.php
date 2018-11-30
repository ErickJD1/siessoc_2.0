<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_da42b9e53ca4b230f71174245242683d08f1880607a854631f3183c41a00f30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_45ed2bb87cb846a17eb06a353d9d7798f40e4201839d1b848ac0d50df4e69582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ed2bb87cb846a17eb06a353d9d7798f40e4201839d1b848ac0d50df4e69582->enter($__internal_45ed2bb87cb846a17eb06a353d9d7798f40e4201839d1b848ac0d50df4e69582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ed2bb87cb846a17eb06a353d9d7798f40e4201839d1b848ac0d50df4e69582->leave($__internal_45ed2bb87cb846a17eb06a353d9d7798f40e4201839d1b848ac0d50df4e69582_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41d568829d5584e8592cf6ccb159cddc0c527d41717441453c155b29eac3ffb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d568829d5584e8592cf6ccb159cddc0c527d41717441453c155b29eac3ffb6->enter($__internal_41d568829d5584e8592cf6ccb159cddc0c527d41717441453c155b29eac3ffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_41d568829d5584e8592cf6ccb159cddc0c527d41717441453c155b29eac3ffb6->leave($__internal_41d568829d5584e8592cf6ccb159cddc0c527d41717441453c155b29eac3ffb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}

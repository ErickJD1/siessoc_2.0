<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e1b839532624ebf4735ffbacf04d7f61b560e518415a80c3781732e6cf0fff6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa6abad82f9d80a260a7cf0e19d1d73c2400a42bde26f468fd3caacbc4d41bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6abad82f9d80a260a7cf0e19d1d73c2400a42bde26f468fd3caacbc4d41bd6->enter($__internal_fa6abad82f9d80a260a7cf0e19d1d73c2400a42bde26f468fd3caacbc4d41bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa6abad82f9d80a260a7cf0e19d1d73c2400a42bde26f468fd3caacbc4d41bd6->leave($__internal_fa6abad82f9d80a260a7cf0e19d1d73c2400a42bde26f468fd3caacbc4d41bd6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d2257ed2e3d6992728dd31d15e57807397f4890c1322168ee142fbf6dcb4b420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2257ed2e3d6992728dd31d15e57807397f4890c1322168ee142fbf6dcb4b420->enter($__internal_d2257ed2e3d6992728dd31d15e57807397f4890c1322168ee142fbf6dcb4b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d2257ed2e3d6992728dd31d15e57807397f4890c1322168ee142fbf6dcb4b420->leave($__internal_d2257ed2e3d6992728dd31d15e57807397f4890c1322168ee142fbf6dcb4b420_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ec75127b3387db1571dfc60d2479861cb2822cf5d51c47211c99d5d0aad1f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec75127b3387db1571dfc60d2479861cb2822cf5d51c47211c99d5d0aad1f8c->enter($__internal_6ec75127b3387db1571dfc60d2479861cb2822cf5d51c47211c99d5d0aad1f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ec75127b3387db1571dfc60d2479861cb2822cf5d51c47211c99d5d0aad1f8c->leave($__internal_6ec75127b3387db1571dfc60d2479861cb2822cf5d51c47211c99d5d0aad1f8c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9a2d29587a49b7b6d66a82695520618afe82b116de82cd6044db2d7267a706db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2d29587a49b7b6d66a82695520618afe82b116de82cd6044db2d7267a706db->enter($__internal_9a2d29587a49b7b6d66a82695520618afe82b116de82cd6044db2d7267a706db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a2d29587a49b7b6d66a82695520618afe82b116de82cd6044db2d7267a706db->leave($__internal_9a2d29587a49b7b6d66a82695520618afe82b116de82cd6044db2d7267a706db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}

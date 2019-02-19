<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_20f29e7c41e408ed154ab1eca7aeebab0bd67040ef73f39388b57d58c7ce072b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e635770f2695ee2e6e5a940b1ec2bbc5505d3037d537884889ff160af1e7251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e635770f2695ee2e6e5a940b1ec2bbc5505d3037d537884889ff160af1e7251->enter($__internal_5e635770f2695ee2e6e5a940b1ec2bbc5505d3037d537884889ff160af1e7251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class=\"row\">
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Correo<span style=\"font-size: 25;color: red\" >*</span></label>
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Nombre de Usuario<span style=\"font-size: 25;color: red\" >*</span></label>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Nombres<span style=\"font-size: 25;color: red\" >*</span></label>
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Apellidos<span style=\"font-size: 25;color: red\" >*</span></label>
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
</div>

</div>
<div align=\"right\">
    <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5e635770f2695ee2e6e5a940b1ec2bbc5505d3037d537884889ff160af1e7251->leave($__internal_5e635770f2695ee2e6e5a940b1ec2bbc5505d3037d537884889ff160af1e7251_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  91 => 36,  83 => 31,  79 => 30,  72 => 26,  68 => 25,  60 => 20,  56 => 19,  48 => 14,  44 => 13,  36 => 8,  32 => 7,  25 => 3,  22 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
<div class=\"row\">
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Correo<span style=\"font-size: 25;color: red\" >*</span></label>
    {{ form_widget(form.email) }}
    {{ form_errors(form.email) }}
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Nombre de Usuario<span style=\"font-size: 25;color: red\" >*</span></label>
    {{ form_widget(form.username) }}
    {{ form_errors(form.username) }}
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Nombres<span style=\"font-size: 25;color: red\" >*</span></label>
    {{ form_widget(form.firstName) }}
    {{ form_errors(form.firstName) }}
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    <label for=\"form_ncuenta\">Apellidos<span style=\"font-size: 25;color: red\" >*</span></label>
    {{ form_widget(form.lastName) }}
    {{ form_errors(form.lastName) }}
</div>
<br>
<div class=\"col col-md-12\" align=\"left\">
    {{ form_widget(form.plainPassword) }}
    {{ form_errors(form.plainPassword) }}
</div>

</div>
<div align=\"right\">
    <input type=\"submit\" class=\"btn btn-success\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}

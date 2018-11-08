<?php

/* SalexUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_b36bccc51bed481e07080e6ac786f19b81d4e3cce7231210d4f78ade6941d814 extends Twig_Template
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
        $__internal_9bb9122830bf06fb6fe93bd137d4c1503f18ec8bbb6d6a0e41effd81dd07f65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb9122830bf06fb6fe93bd137d4c1503f18ec8bbb6d6a0e41effd81dd07f65e->enter($__internal_9bb9122830bf06fb6fe93bd137d4c1503f18ec8bbb6d6a0e41effd81dd07f65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    <div class=\"box-body\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
    <!-- End of box-body-->
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Cancel </a>
    </div>
<!-- End of box-footer-->
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9bb9122830bf06fb6fe93bd137d4c1503f18ec8bbb6d6a0e41effd81dd07f65e->leave($__internal_9bb9122830bf06fb6fe93bd137d4c1503f18ec8bbb6d6a0e41effd81dd07f65e_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 10,  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    <div class=\"box-body\">
        {{ form_widget(form) }}
    </div>
    <!-- End of box-body-->
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" class=\"btn btn-success\" />
        <a class=\"btn btn-danger pull-right\" href=\"{{ path('fos_user_profile_show') }}\">Cancel </a>
    </div>
<!-- End of box-footer-->
{{ form_end(form) }}
", "SalexUserBundle:ChangePassword:changePassword_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}

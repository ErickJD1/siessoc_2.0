<?php

/* @SalexUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_a9129b37331cd564627b4a217703ba05fd7ccfca0696449a300740233d0f819a extends Twig_Template
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
        $__internal_ad0bf296b3eead60ea666cca33c8b5f06fb65ea076f276f44282f1c53fe15319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0bf296b3eead60ea666cca33c8b5f06fb65ea076f276f44282f1c53fe15319->enter($__internal_ad0bf296b3eead60ea666cca33c8b5f06fb65ea076f276f44282f1c53fe15319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/ChangePassword/changePassword_content.html.twig"));

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
        
        $__internal_ad0bf296b3eead60ea666cca33c8b5f06fb65ea076f276f44282f1c53fe15319->leave($__internal_ad0bf296b3eead60ea666cca33c8b5f06fb65ea076f276f44282f1c53fe15319_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/ChangePassword/changePassword_content.html.twig";
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
", "@SalexUser/ChangePassword/changePassword_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}

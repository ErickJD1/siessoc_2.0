<?php

/* user/edit.html.twig */
class __TwigTemplate_d916a1d7b6a569200f864392ceeed9eee935e65596265fd2612f00c433353726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "user/edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f5a549bee9d6c293810a97c452d7f060a4b7d6e2a8fc87df19063417682b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f5a549bee9d6c293810a97c452d7f060a4b7d6e2a8fc87df19063417682b99->enter($__internal_b7f5a549bee9d6c293810a97c452d7f060a4b7d6e2a8fc87df19063417682b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f5a549bee9d6c293810a97c452d7f060a4b7d6e2a8fc87df19063417682b99->leave($__internal_b7f5a549bee9d6c293810a97c452d7f060a4b7d6e2a8fc87df19063417682b99_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_86f22d1eb95f283cb8a9d8a670c4eea0de71fe428db080b6270ea2a5c70f3ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f22d1eb95f283cb8a9d8a670c4eea0de71fe428db080b6270ea2a5c70f3ae0->enter($__internal_86f22d1eb95f283cb8a9d8a670c4eea0de71fe428db080b6270ea2a5c70f3ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_86f22d1eb95f283cb8a9d8a670c4eea0de71fe428db080b6270ea2a5c70f3ae0->leave($__internal_86f22d1eb95f283cb8a9d8a670c4eea0de71fe428db080b6270ea2a5c70f3ae0_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_89100d6eac856c8af863885fc7867cdd35b347186a14a8c133b2bf6893747218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89100d6eac856c8af863885fc7867cdd35b347186a14a8c133b2bf6893747218->enter($__internal_89100d6eac856c8af863885fc7867cdd35b347186a14a8c133b2bf6893747218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de usuarios ";
        
        $__internal_89100d6eac856c8af863885fc7867cdd35b347186a14a8c133b2bf6893747218->leave($__internal_89100d6eac856c8af863885fc7867cdd35b347186a14a8c133b2bf6893747218_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3f07dd7402d6b4da69072c8546e9ca8213b747dd6c75fc278403d0edc961d45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f07dd7402d6b4da69072c8546e9ca8213b747dd6c75fc278403d0edc961d45b->enter($__internal_3f07dd7402d6b4da69072c8546e9ca8213b747dd6c75fc278403d0edc961d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                ";
        // line 23
        echo "
                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                <div class=\"box-body\">

                    <div class=\"row\">
                        <label for=\"form_username\">Usuario</label>
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
                    </div>

                    <div class=\"row\">
                        <label for=\"form_firstname\">Nombres</label>
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "
                    </div>

                    <div class=\"row\">
                        <label for=\"form_lastname\">Apellidos</label>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "
                    </div>

                    <div class=\"row\">
                        <label for=\"form_email\">Email</label>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    </div>

                    <div class=\"row\">
                        <label for=\"form_profile_picture\">Foto Perfil</label>
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'widget');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'errors');
        echo "
                    </div>

                    <div class=\"row\">
                        <label for=\"form_profile_picture\">Roles</label>
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'errors');
        echo "
                    </div>





                </div>
                <!-- End of box-body-->
                <div class=\"box-footer\">
                    <input type=\"submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " profile\" name=\"submit\" class=\"btn btn-success\" />
                    <a class=\"btn btn-danger pull-right\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Cancel</a>
                </div>
                <!-- End of box-footer-->
                ";
        // line 74
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>

";
        
        $__internal_3f07dd7402d6b4da69072c8546e9ca8213b747dd6c75fc278403d0edc961d45b->leave($__internal_3f07dd7402d6b4da69072c8546e9ca8213b747dd6c75fc278403d0edc961d45b_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 74,  178 => 71,  174 => 70,  161 => 60,  157 => 59,  149 => 54,  145 => 53,  137 => 48,  133 => 47,  125 => 42,  121 => 41,  113 => 36,  109 => 35,  101 => 30,  97 => 29,  89 => 24,  86 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %} Usuarios | {% endblock %}
{% block page_subtitle %}Gestion de usuarios {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                {% trans_default_domain 'FOSUserBundle' %}

                {{ form_start(edit_form, { 'action': path('user_edit',{'id':user.id}), 'attr': { 'class': 'fos_user_profile_edit'} }) }}
                <div class=\"box-body\">

                    <div class=\"row\">
                        <label for=\"form_username\">Usuario</label>
                        {{ form_widget(edit_form.username) }}
                        {{ form_errors(edit_form.username) }}
                    </div>

                    <div class=\"row\">
                        <label for=\"form_firstname\">Nombres</label>
                        {{ form_widget(edit_form.firstName) }}
                        {{ form_errors(edit_form.firstName) }}
                    </div>

                    <div class=\"row\">
                        <label for=\"form_lastname\">Apellidos</label>
                        {{ form_widget(edit_form.lastName) }}
                        {{ form_errors(edit_form.lastName) }}
                    </div>

                    <div class=\"row\">
                        <label for=\"form_email\">Email</label>
                        {{ form_widget(edit_form.email) }}
                        {{ form_errors(edit_form.email) }}
                    </div>

                    <div class=\"row\">
                        <label for=\"form_profile_picture\">Foto Perfil</label>
                        {{ form_widget(edit_form.profile_picture_file) }}
                        {{ form_errors(edit_form.profile_picture_file) }}
                    </div>

                    <div class=\"row\">
                        <label for=\"form_profile_picture\">Roles</label>
                        {{ form_widget(edit_form.roles) }}
                        {{ form_errors(edit_form.roles) }}
                    </div>





                </div>
                <!-- End of box-body-->
                <div class=\"box-footer\">
                    <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }} profile\" name=\"submit\" class=\"btn btn-success\" />
                    <a class=\"btn btn-danger pull-right\" href=\"{{ path('user_index') }}\">Cancel</a>
                </div>
                <!-- End of box-footer-->
                {{ form_end(edit_form) }}
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>

{% endblock %}", "user/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\edit.html.twig");
    }
}

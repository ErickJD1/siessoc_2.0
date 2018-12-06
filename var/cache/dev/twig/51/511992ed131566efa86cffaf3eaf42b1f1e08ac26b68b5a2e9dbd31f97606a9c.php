<?php

/* :user:edit.html.twig */
class __TwigTemplate_7d2669ed6228ced05a7940e880960452b2e146d2f5bb9b616cc29803ef1a4c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bd9d4f9e76ebc4f25ea508a7c57a24600cc6d7542d8e0addc7bd93910570a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd9d4f9e76ebc4f25ea508a7c57a24600cc6d7542d8e0addc7bd93910570a5d->enter($__internal_0bd9d4f9e76ebc4f25ea508a7c57a24600cc6d7542d8e0addc7bd93910570a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd9d4f9e76ebc4f25ea508a7c57a24600cc6d7542d8e0addc7bd93910570a5d->leave($__internal_0bd9d4f9e76ebc4f25ea508a7c57a24600cc6d7542d8e0addc7bd93910570a5d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a3596d8c8e2a70f597027bc15c903a318b91cfcbca246d42488cffc314bc9e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3596d8c8e2a70f597027bc15c903a318b91cfcbca246d42488cffc314bc9e69->enter($__internal_a3596d8c8e2a70f597027bc15c903a318b91cfcbca246d42488cffc314bc9e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_a3596d8c8e2a70f597027bc15c903a318b91cfcbca246d42488cffc314bc9e69->leave($__internal_a3596d8c8e2a70f597027bc15c903a318b91cfcbca246d42488cffc314bc9e69_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_31ed8d38138abff2bf4b5816397675a9ffb941d89b72aa00374d8811b45a3d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ed8d38138abff2bf4b5816397675a9ffb941d89b72aa00374d8811b45a3d03->enter($__internal_31ed8d38138abff2bf4b5816397675a9ffb941d89b72aa00374d8811b45a3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de usuarios ";
        
        $__internal_31ed8d38138abff2bf4b5816397675a9ffb941d89b72aa00374d8811b45a3d03->leave($__internal_31ed8d38138abff2bf4b5816397675a9ffb941d89b72aa00374d8811b45a3d03_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8907d16923d44704341bc0ec034ad914f48583331e2fecab85cc83ed15ac64de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8907d16923d44704341bc0ec034ad914f48583331e2fecab85cc83ed15ac64de->enter($__internal_8907d16923d44704341bc0ec034ad914f48583331e2fecab85cc83ed15ac64de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:90%; margin-top: 2%; margin-left: 5%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <i style=\"font-size:90px; color:#04537C; margin-top: 2%;margin-bottom: 2%\" class=\"fa fa-user-circle\" ></i>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 90%; margin-top: 3%; margin-bottom: 3%\">
                ";
        // line 23
        echo "
                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                <div class=\"box-body\">


                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            <label for=\"form_firstname\">Nombres</label>
                            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_lastname\">Apellidos</label>
                            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col col-md-6\">

                            <label for=\"form_username\">Usuario</label>
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "

                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_email\">Email</label>
                            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col col-md-12\">
                        <label for=\"form_descripcion\">Descripcion</label>
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                        </div>
                    </div>


                    <div class=\"row\" align=\"center\">
                        <label for=\"form_profile_picture\">Foto Perfil</label>
                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'widget');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'errors');
        echo "
                        ";
        // line 68
        $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
        // line 69
        echo "                        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "avatar", array(0 => (isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), 1 => "", 2 => "profile-user-img img-responsive img-circle"), "method"), "html", null, true);
        echo "
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                    <div class=\"tab-pane\" id=\"roles-and-permission\">
                        ";
        // line 75
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"))) {
            // line 76
            echo "                            <table class=\"table table-bordered\">
                                <tbody>
                                    <tr>
                                        <th>Roles Actuales</th>
                                        <th>Enabled</th>
                                    </tr>
                                    ";
            // line 82
            $context["i"] = 0;
            // line 83
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 84
                echo "                                        <tr>
                                            <td id=\"";
                // line 85
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) . "val"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                        </tr>
                                        ";
                // line 88
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 89
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                </tbody>
                            </table>
                        ";
        }
        // line 93
        echo "                    </div>
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_profile_picture\">Roles</label>
                        ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'errors');
        echo "
                    </div>
                    </div>


                    ";
        // line 106
        echo "




                </div>
                <!-- End of box-body-->
                <div class=\"box-footer\">
                    <div class=\"row\" align=\"right\">
                    <input type=\"submit\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " profile\" name=\"submit\" class=\"btn btn-success\" />
                    <a class=\"btn btn-danger pull-right\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" style=\"margin-left: 1px\">Cancel</a>
                    </div>
                    </div>
                <!-- End of box-footer-->
                ";
        // line 120
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
        
        $__internal_8907d16923d44704341bc0ec034ad914f48583331e2fecab85cc83ed15ac64de->leave($__internal_8907d16923d44704341bc0ec034ad914f48583331e2fecab85cc83ed15ac64de_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfeaba5cc2c249e0cb12c8cd3953acf3f94e83f97d70825a746c2be609cc8fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfeaba5cc2c249e0cb12c8cd3953acf3f94e83f97d70825a746c2be609cc8fd6->enter($__internal_cfeaba5cc2c249e0cb12c8cd3953acf3f94e83f97d70825a746c2be609cc8fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$(\"#roles-and-permission\").click(function () {
                for (i = 0; i < 2; i++) {
                    alert(document.getElementById('\"#' + i + 'val\"').val)
                }
            });
        }
        );
    </script>
";
        
        $__internal_cfeaba5cc2c249e0cb12c8cd3953acf3f94e83f97d70825a746c2be609cc8fd6->leave($__internal_cfeaba5cc2c249e0cb12c8cd3953acf3f94e83f97d70825a746c2be609cc8fd6_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 132,  281 => 131,  263 => 120,  256 => 116,  252 => 115,  241 => 106,  233 => 98,  229 => 97,  223 => 93,  218 => 90,  212 => 89,  210 => 88,  202 => 85,  199 => 84,  194 => 83,  192 => 82,  184 => 76,  182 => 75,  172 => 69,  170 => 68,  166 => 67,  162 => 66,  152 => 59,  148 => 58,  139 => 52,  135 => 51,  127 => 46,  123 => 45,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  87 => 24,  84 => 23,  67 => 7,  61 => 6,  49 => 4,  37 => 3,  11 => 1,);
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

        <div  style=\"width:90%; margin-top: 2%; margin-left: 5%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <i style=\"font-size:90px; color:#04537C; margin-top: 2%;margin-bottom: 2%\" class=\"fa fa-user-circle\" ></i>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 90%; margin-top: 3%; margin-bottom: 3%\">
                {% trans_default_domain 'FOSUserBundle' %}

                {{ form_start(edit_form, { 'action': path('user_edit',{'id':user.id}), 'attr': { 'class': 'fos_user_profile_edit'} }) }}
                <div class=\"box-body\">


                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            <label for=\"form_firstname\">Nombres</label>
                            {{ form_widget(edit_form.firstName) }}
                            {{ form_errors(edit_form.firstName) }}
                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_lastname\">Apellidos</label>
                            {{ form_widget(edit_form.lastName) }}
                            {{ form_errors(edit_form.lastName) }}
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col col-md-6\">

                            <label for=\"form_username\">Usuario</label>
                            {{ form_widget(edit_form.username) }}
                            {{ form_errors(edit_form.username) }}

                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_email\">Email</label>
                            {{ form_widget(edit_form.email) }}
                            {{ form_errors(edit_form.email) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col col-md-12\">
                        <label for=\"form_descripcion\">Descripcion</label>
                        {{ form_widget(edit_form.description) }}
                        {{ form_errors(edit_form.description) }}
                        </div>
                    </div>


                    <div class=\"row\" align=\"center\">
                        <label for=\"form_profile_picture\">Foto Perfil</label>
                        {{ form_widget(edit_form.profile_picture_file) }}
                        {{ form_errors(edit_form.profile_picture_file) }}
                        {% set profile_picture_path = 'images/profile/'~ user.getProfilePicture() %}
                        {{ macro.avatar(profile_picture_path, '', 'profile-user-img img-responsive img-circle') }}
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                    <div class=\"tab-pane\" id=\"roles-and-permission\">
                        {% if user.getRoles() is not empty %}
                            <table class=\"table table-bordered\">
                                <tbody>
                                    <tr>
                                        <th>Roles Actuales</th>
                                        <th>Enabled</th>
                                    </tr>
                                    {%set i=0%}
                                    {% for role in user.getRoles() %}
                                        <tr>
                                            <td id=\"{{i~'val'}}\">{{ role|upper }}</td>
                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                        </tr>
                                        {% set i=i+1 %}
                                    {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_profile_picture\">Roles</label>
                        {{ form_widget(edit_form.roles,{'attr':{'class':'form-control form-control-sm'}}) }}
                        {{ form_errors(edit_form.roles) }}
                    </div>
                    </div>


                    {#<select id=\"form_active\" name=\"edit_form[roles]\">
                        <option value=\"ROLE_ADMIN\">ADMINISTRADOR</option>
                    </select>#}





                </div>
                <!-- End of box-body-->
                <div class=\"box-footer\">
                    <div class=\"row\" align=\"right\">
                    <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }} profile\" name=\"submit\" class=\"btn btn-success\" />
                    <a class=\"btn btn-danger pull-right\" href=\"{{ path('user_index') }}\" style=\"margin-left: 1px\">Cancel</a>
                    </div>
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

{% endblock %}
{%block javascripts %}
    {{parent()}}
    <script>
        \$(document).ready(function () {
            \$(\"#roles-and-permission\").click(function () {
                for (i = 0; i < 2; i++) {
                    alert(document.getElementById('\"#' + i + 'val\"').val)
                }
            });
        }
        );
    </script>
{% endblock %}", ":user:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/user/edit.html.twig");
    }
}

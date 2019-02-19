<?php

/* user/show.html.twig */
class __TwigTemplate_e9ce60c1cbb3fe579e693cac64061acc9e05e8033947ee220bca33863f8cbbd7 extends Twig_Template
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
        $__internal_8e47a943193280eab04725c0a1cd8ebf72db45f8ae922d0c6061685ddbde8415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e47a943193280eab04725c0a1cd8ebf72db45f8ae922d0c6061685ddbde8415->enter($__internal_8e47a943193280eab04725c0a1cd8ebf72db45f8ae922d0c6061685ddbde8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/show.html.twig", 2);
        // line 3
        echo "
<div class=\"modal fade\" id=\"show";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:90% !important\" >
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <a href=\"show.html.twig\"></a>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    ";
        // line 19
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-3\">

                            <!-- Profile Image -->
                            <div class=\"box box-primary\">
                                <div class=\"box-body box-profile\">
                                    ";
        // line 26
        $context["profile_picture_path"] = false;
        // line 27
        echo "                                    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"))) {
            // line 28
            echo "                                        ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
            // line 29
            echo "                                    ";
        }
        // line 30
        echo "
                                    ";
        // line 31
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                                    <h3 class=\"profile-username text-center\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col -->


                        <div class=\"col-md-9\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#activity";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Account Details</a></li>
                                    <li><a href=\"#roles-and-permission";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Roles and Permissions</a></li>
                                        ";
        // line 45
        echo "                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"active tab-pane\" id=\"activity";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
                                        <div class=\"form-horizontal\">
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                                                <div class=\"col-sm-10\">
                                                    ";
        // line 70
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isEnabled", array(), "method")) {
            // line 71
            echo "                                                        <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                                                        ";
        } else {
            // line 73
            echo "                                                        <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                                                    ";
        }
        // line 75
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"input-group\">
                                                        <div class=\"input-group-addon\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                        </div>
                                                        <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div class=\"tab-pane\" id=\"roles-and-permission";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
                                        ";
        // line 95
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"))) {
            // line 96
            echo "                                            <table class=\"table table-bordered\">
                                                <tbody>
                                                    <tr>
                                                        <th>Role</th>
                                                        <th>Enabled</th>
                                                    </tr>
                                                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 103
                echo "                                                        <tr>
                                                            <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                                </tbody>
                                            </table>
                                        ";
        }
        // line 111
        echo "                                    </div>

                                    ";
        // line 117
        echo "
                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!--modal-->
                </div>
                
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                    <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        ";
        // line 130
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input class=\"btn btn-danger \" type=\"submit\" value=\"Delete\">
                        ";
        // line 132
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_8e47a943193280eab04725c0a1cd8ebf72db45f8ae922d0c6061685ddbde8415->leave($__internal_8e47a943193280eab04725c0a1cd8ebf72db45f8ae922d0c6061685ddbde8415_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 132,  223 => 130,  208 => 117,  204 => 111,  199 => 108,  189 => 104,  186 => 103,  182 => 102,  174 => 96,  172 => 95,  168 => 94,  155 => 84,  144 => 75,  140 => 73,  136 => 71,  134 => 70,  125 => 64,  116 => 58,  107 => 52,  99 => 47,  95 => 45,  91 => 43,  87 => 42,  74 => 32,  70 => 31,  67 => 30,  64 => 29,  61 => 28,  58 => 27,  56 => 26,  47 => 19,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

<div class=\"modal fade\" id=\"show{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:90% !important\" >
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <a href=\"show.html.twig\"></a>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    {% trans_default_domain 'FOSUserBundle' %}

                    <div class=\"row\">
                        <div class=\"col-md-3\">

                            <!-- Profile Image -->
                            <div class=\"box box-primary\">
                                <div class=\"box-body box-profile\">
                                    {% set profile_picture_path = false %}
                                    {% if user.getProfilePicture() is not empty %}
                                        {% set profile_picture_path = 'images/profile/'~ user.getProfilePicture() %}
                                    {% endif %}

                                    {{ macro.avatar(profile_picture_path, user.username, 'profile-user-img img-responsive img-circle') }}
                                    <h3 class=\"profile-username text-center\"> {{ user.getName() }}</h3>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col -->


                        <div class=\"col-md-9\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#activity{{user.id}}\" data-toggle=\"tab\">Account Details</a></li>
                                    <li><a href=\"#roles-and-permission{{user.id}}\" data-toggle=\"tab\">Roles and Permissions</a></li>
                                        {#                                    <li><a href=\"#change-password{{user.id}}\" data-toggle=\"tab\">Change Password</a></li>
                                        #}                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"active tab-pane\" id=\"activity{{user.id}}\">
                                        <div class=\"form-horizontal\">
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"{{ user.getUsername() }}\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"{{ user.getName() }}\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control active\" placeholder=\"{{ user.getEmail() }}\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                                                <div class=\"col-sm-10\">
                                                    {% if user.isEnabled() %}
                                                        <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                                                        {% else %}
                                                        <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                                                    {% endif %}
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"input-group\">
                                                        <div class=\"input-group-addon\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                        </div>
                                                        <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"{{ user.getMemberSince()|date('Y-m-d') }}\" readonly>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div class=\"tab-pane\" id=\"roles-and-permission{{user.id}}\">
                                        {% if user.getRoles() is not empty %}
                                            <table class=\"table table-bordered\">
                                                <tbody>
                                                    <tr>
                                                        <th>Role</th>
                                                        <th>Enabled</th>
                                                    </tr>
                                                    {% for role in user.getRoles() %}
                                                        <tr>
                                                            <td>{{ role|upper }}</td>
                                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        {% endif %}
                                    </div>

                                    {#<div class=\"tab-pane\" id=\"change-password{{user.id}}\">
                                        <p class=\"text-aqua\">Please click the link below to change your current password</p>
                                        <div><a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                                    </div>#}

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!--modal-->
                </div>
                
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                    <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        {{ form_start(delete_form) }}
                        <input class=\"btn btn-danger \" type=\"submit\" value=\"Delete\">
                        {{ form_end(delete_form) }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

", "user/show.html.twig", "/home/ubuntu/workspace/app/Resources/views/user/show.html.twig");
    }
}

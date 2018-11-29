<?php

/* user/show.html.twig */
class __TwigTemplate_e93273f37eda674f6b894310ad5201040f508a1d200e1aed7cc8d4e3a44f23f2 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/show.html.twig", 2);
        // line 3
        echo "
<div class=\"modal fade\" id=\"show";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:90% !important\" >
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    ";
        // line 18
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-3\">

                            <!-- Profile Image -->
                            <div class=\"box box-primary\">
                                <div class=\"box-body box-profile\">
                                    ";
        // line 25
        $context["profile_picture_path"] = false;
        // line 26
        echo "                                    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"))) {
            // line 27
            echo "                                        ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"));
            // line 28
            echo "                                    ";
        }
        // line 29
        echo "
                                    ";
        // line 30
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : null), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                                    <h3 class=\"profile-username text-center\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col -->


                        <div class=\"col-md-9\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#activity";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Account Details</a></li>
                                    <li><a href=\"#roles-and-permission";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Roles and Permissions</a></li>
                                    <li><a href=\"#change-password";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Change Password</a></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"active tab-pane\" id=\"activity";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
                                        <div class=\"form-horizontal\">
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                                                <div class=\"col-sm-10\">
                                                    ";
        // line 69
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isEnabled", array(), "method")) {
            // line 70
            echo "                                                        <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                                                        ";
        } else {
            // line 72
            echo "                                                        <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                                                    ";
        }
        // line 74
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
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <div class=\"col-sm-offset-2 col-sm-10\">
                                                    ";
        // line 90
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                                                         <input class=\"btn btn-danger \" type=\"submit\" value=\"Delete\">
                                                    ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div class=\"tab-pane\" id=\"roles-and-permission";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
                                        ";
        // line 100
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"))) {
            // line 101
            echo "                                            <table class=\"table table-bordered\">
                                                <tbody>
                                                    <tr>
                                                        <th>Role</th>
                                                        <th>Enabled</th>
                                                    </tr>
                                                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 108
                echo "                                                        <tr>
                                                            <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                                </tbody>
                                            </table>
                                        ";
        }
        // line 116
        echo "                                    </div>

                                    <div class=\"tab-pane\" id=\"change-password";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
                                        <p class=\"text-aqua\">Please click the link below to change your current password</p>
                                        <div><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                                    </div>

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

";
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
        return array (  223 => 120,  218 => 118,  214 => 116,  209 => 113,  199 => 109,  196 => 108,  192 => 107,  184 => 101,  182 => 100,  178 => 99,  168 => 92,  163 => 90,  153 => 83,  142 => 74,  138 => 72,  134 => 70,  132 => 69,  123 => 63,  114 => 57,  105 => 51,  97 => 46,  91 => 43,  87 => 42,  83 => 41,  70 => 31,  66 => 30,  63 => 29,  60 => 28,  57 => 27,  54 => 26,  52 => 25,  43 => 18,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/show.html.twig", "/home/ubuntu/workspace/app/Resources/views/user/show.html.twig");
    }
}

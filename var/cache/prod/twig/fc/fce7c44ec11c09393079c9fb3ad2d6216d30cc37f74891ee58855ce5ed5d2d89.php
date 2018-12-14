<?php

/* user/edit.html.twig */
class __TwigTemplate_a1e97e5ee19bf7d63a75236204f98cf64fe041d7419bc8a9ef031c2443c94b88 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Usuarios | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Gestion de usuarios ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                <div class=\"box-body\">


                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            <label for=\"form_firstname\">Nombres</label>
                            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "firstName", array()), 'widget');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "firstName", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_lastname\">Apellidos</label>
                            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lastName", array()), 'widget');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lastName", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col col-md-6\">

                            <label for=\"form_username\">Usuario</label>
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username", array()), 'widget');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username", array()), 'errors');
        echo "

                        </div>
                        <div class=\"col col-md-6\">
                            <label for=\"form_email\">Email</label>
                            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col col-md-12\">
                        <label for=\"form_descripcion\">Descripcion</label>
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "description", array()), 'widget');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "description", array()), 'errors');
        echo "
                        </div>
                    </div>


                    <div class=\"row\" align=\"center\">
                        <label for=\"form_profile_picture\">Foto Perfil</label>
                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "profile_picture_file", array()), 'widget');
        echo "
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "profile_picture_file", array()), 'errors');
        echo "
                        ";
        // line 68
        $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"));
        // line 69
        echo "                        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "avatar", array(0 => (isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : null), 1 => "", 2 => "profile-user-img img-responsive img-circle"), "method"), "html", null, true);
        echo "
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                    <div class=\"tab-pane\" id=\"roles-and-permission\">
                        ";
        // line 75
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 84
                echo "                                        <tr>
                                            <td id=\"";
                // line 85
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) . "val"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                                            <td><span class=\"badge bg-green\">Enabled</span></td>
                                        </tr>
                                        ";
                // line 88
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "roles", array()), 'widget', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "roles", array()), 'errors');
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
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
    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  260 => 132,  257 => 131,  242 => 120,  235 => 116,  231 => 115,  220 => 106,  212 => 98,  208 => 97,  202 => 93,  197 => 90,  191 => 89,  189 => 88,  181 => 85,  178 => 84,  173 => 83,  171 => 82,  163 => 76,  161 => 75,  151 => 69,  149 => 68,  145 => 67,  141 => 66,  131 => 59,  127 => 58,  118 => 52,  114 => 51,  106 => 46,  102 => 45,  91 => 37,  87 => 36,  80 => 32,  76 => 31,  66 => 24,  63 => 23,  46 => 7,  43 => 6,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/edit.html.twig", "/home/ubuntu/workspace/app/Resources/views/user/edit.html.twig");
    }
}

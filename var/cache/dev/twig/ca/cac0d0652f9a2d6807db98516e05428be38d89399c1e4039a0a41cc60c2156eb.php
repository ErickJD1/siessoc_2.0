<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_06db92b977c329587e07e6388879ac10c272a41e43e04eac536275df7791d4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_837bfb6408b039e7c5a2f3fa9a5ce72ce286c6927aa4266e9beccc289a0c7300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837bfb6408b039e7c5a2f3fa9a5ce72ce286c6927aa4266e9beccc289a0c7300->enter($__internal_837bfb6408b039e7c5a2f3fa9a5ce72ce286c6927aa4266e9beccc289a0c7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "FOSUserBundle:Profile:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837bfb6408b039e7c5a2f3fa9a5ce72ce286c6927aa4266e9beccc289a0c7300->leave($__internal_837bfb6408b039e7c5a2f3fa9a5ce72ce286c6927aa4266e9beccc289a0c7300_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7541138c949efb4a50f65fd5acc93083404cbd8936edd091abd23f9d0497fdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7541138c949efb4a50f65fd5acc93083404cbd8936edd091abd23f9d0497fdac->enter($__internal_7541138c949efb4a50f65fd5acc93083404cbd8936edd091abd23f9d0497fdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Profile ";
        
        $__internal_7541138c949efb4a50f65fd5acc93083404cbd8936edd091abd23f9d0497fdac->leave($__internal_7541138c949efb4a50f65fd5acc93083404cbd8936edd091abd23f9d0497fdac_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bf877bb9f33e10f1895806003c82c89ab3cd4e5d8fcf8739309d67513424c54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf877bb9f33e10f1895806003c82c89ab3cd4e5d8fcf8739309d67513424c54a->enter($__internal_bf877bb9f33e10f1895806003c82c89ab3cd4e5d8fcf8739309d67513424c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_bf877bb9f33e10f1895806003c82c89ab3cd4e5d8fcf8739309d67513424c54a->leave($__internal_bf877bb9f33e10f1895806003c82c89ab3cd4e5d8fcf8739309d67513424c54a_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_253fe666e3f178c9e005b9aab689f4c8d64fb4c9e4940ac5d7813bc552b7d81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253fe666e3f178c9e005b9aab689f4c8d64fb4c9e4940ac5d7813bc552b7d81c->enter($__internal_253fe666e3f178c9e005b9aab689f4c8d64fb4c9e4940ac5d7813bc552b7d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "
";
        // line 11
        echo "
    <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  ";
        // line 18
        $context["profile_picture_path"] = false;
        // line 19
        echo "                  ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"))) {
            // line 20
            echo "                    ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
            // line 21
            echo "                  ";
        }
        // line 22
        echo "
                  ";
        // line 23
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                  <h3 class=\"profile-username text-center\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLastLogin", array(0 => true), "method"), "html", null, true);
        echo "</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Account Details</a></li>
                  <li><a href=\"#roles-and-permission\" data-toggle=\"tab\">Roles and Permissions</a></li>
                  <li><a href=\"#change-password\" data-toggle=\"tab\">Change Password</a></li>
                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          ";
        // line 63
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isEnabled", array(), "method")) {
            // line 64
            echo "                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          ";
        } else {
            // line 66
            echo "                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          ";
        }
        // line 68
        echo "                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                          </div>
                        </div>
                      </div>
              
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <a class=\"btn btn-primary\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i>Edit</a>
                        </div>
                      </div>

                    </div>
                  </div><!-- /.tab-pane -->

                  <div class=\"tab-pane\" id=\"roles-and-permission\">
                      ";
        // line 92
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"))) {
            // line 93
            echo "                      <table class=\"table table-bordered\">
                        <tbody>
                          <tr>
                            <th>Role</th>
                            <th>Enabled</th>
                          </tr>
                          ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 100
                echo "                            <tr>
                              <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                              <td><span class=\"badge bg-green\">Enabled</span></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                        </tbody>
                      </table>
                      ";
        }
        // line 108
        echo "                  </div>

                   <div class=\"tab-pane\" id=\"change-password\">
                      <p class=\"text-aqua\">Please click the link below to change your current password</p>
                     <div><a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                  </div>
              
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
";
        
        $__internal_253fe666e3f178c9e005b9aab689f4c8d64fb4c9e4940ac5d7813bc552b7d81c->leave($__internal_253fe666e3f178c9e005b9aab689f4c8d64fb4c9e4940ac5d7813bc552b7d81c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 112,  229 => 108,  224 => 105,  214 => 101,  211 => 100,  207 => 99,  199 => 93,  197 => 92,  186 => 84,  176 => 77,  165 => 68,  161 => 66,  157 => 64,  155 => 63,  146 => 57,  137 => 51,  128 => 45,  105 => 25,  101 => 24,  97 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  83 => 18,  74 => 11,  71 => 9,  65 => 8,  51 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

{% block page_title %} Profile {% endblock %}
{% block page_subtitle %} {{ user.getName() }} {% endblock %}

{% block page_content %}

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
                  <p class=\"text-muted text-center\"><b>Last login </b>{{ user.getLastLogin(true) }}</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Account Details</a></li>
                  <li><a href=\"#roles-and-permission\" data-toggle=\"tab\">Roles and Permissions</a></li>
                  <li><a href=\"#change-password\" data-toggle=\"tab\">Change Password</a></li>
                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity\">
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
              
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-fw fa-edit\"></i>Edit</a>
                        </div>
                      </div>

                    </div>
                  </div><!-- /.tab-pane -->

                  <div class=\"tab-pane\" id=\"roles-and-permission\">
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

                   <div class=\"tab-pane\" id=\"change-password\">
                      <p class=\"text-aqua\">Please click the link below to change your current password</p>
                     <div><a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                  </div>
              
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
{% endblock %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/show.html.twig");
    }
}

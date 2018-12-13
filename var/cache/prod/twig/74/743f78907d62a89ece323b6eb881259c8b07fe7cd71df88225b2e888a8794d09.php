<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f78e16738066cf74f665475acd210e5bbedce5adac1da2fe7f3eb0d0115b3389 extends Twig_Template
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
        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "FOSUserBundle:Profile:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo " Profile ";
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
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
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"))) {
            // line 20
            echo "                    ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getProfilePicture", array(), "method"));
            // line 21
            echo "                  ";
        }
        // line 22
        echo "
                  ";
        // line 23
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : null), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                  <h3 class=\"profile-username text-center\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getLastLogin", array(0 => true), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          ";
        // line 63
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isEnabled", array(), "method")) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
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
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRoles", array(), "method"));
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
        return array (  214 => 112,  208 => 108,  203 => 105,  193 => 101,  190 => 100,  186 => 99,  178 => 93,  176 => 92,  165 => 84,  155 => 77,  144 => 68,  140 => 66,  136 => 64,  134 => 63,  125 => 57,  116 => 51,  107 => 45,  84 => 25,  80 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  62 => 18,  53 => 11,  50 => 9,  47 => 8,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Profile:show.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Profile/show.html.twig");
    }
}

<?php

/* :user:edit.html.twig */
class __TwigTemplate_7d2669ed6228ced05a7940e880960452b2e146d2f5bb9b616cc29803ef1a4c16 extends Twig_Template
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
        $__internal_7624e10fd8aa69cfe035ff48b943bbe6e7852f8c3983702652b914293cd9cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7624e10fd8aa69cfe035ff48b943bbe6e7852f8c3983702652b914293cd9cb0a->enter($__internal_7624e10fd8aa69cfe035ff48b943bbe6e7852f8c3983702652b914293cd9cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Modificar de Usuario</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"list-group\">
                    <!--modal-->

                    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "Method" => "POST"));
        echo "


                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">First Name</label>
                                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                                
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Last Name</label>
                                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                             
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Picture Profile</label>
                                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'errors');
        echo "
                                <div align=\"center\"  class=\"col-md-4\">
                                 ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'widget', array("attr" => array("class" => "form-control"), "style" => array("width" => "200px")));
        echo "
                                </div>
                            </div>
                        </div>        
                          
                                
                                
                        <input type=\"submit\" class=\"btn btn-success btn-xl\" value=\"Edit\" />
                        ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                    </div>
                    <ul>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
                        </li>
                        <li>
                            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\">
                            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>
                    </ul>
                    </br>
                    <ul>
                        <li>
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
                        </li>
                    </ul>
                </div>
                </br>    
            </div>

            <!--modal-->
        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
        </div>
    </div>
</div>
</div>

";
        
        $__internal_7624e10fd8aa69cfe035ff48b943bbe6e7852f8c3983702652b914293cd9cb0a->leave($__internal_7624e10fd8aa69cfe035ff48b943bbe6e7852f8c3983702652b914293cd9cb0a_prof);

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
        return array (  123 => 65,  114 => 59,  109 => 57,  103 => 54,  96 => 50,  85 => 42,  80 => 40,  69 => 32,  64 => 30,  53 => 22,  48 => 20,  38 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"edit{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Modificar de Usuario</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"list-group\">
                    <!--modal-->

                    {{ form_start(edit_form, {'action': path('user_edit', {'id': user.id}), 'Method': 'POST' }) }}


                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">First Name</label>
                                {{ form_errors(edit_form.firstName) }}
                                <div class=\"col-md-4\">
                                    {{ form_widget(edit_form.firstName) }}
                                </div>
                            </div>
                        </div>
                                
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Last Name</label>
                                {{ form_errors(edit_form.lastName) }}
                                <div class=\"col-md-4\">
                                    {{ form_widget(edit_form.lastName) }}
                                </div>
                            </div>
                        </div>
                             
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Picture Profile</label>
                                {{ form_errors(edit_form.profile_picture_file) }}
                                <div align=\"center\"  class=\"col-md-4\">
                                 {{ form_widget(edit_form.profile_picture_file,{'attr': {'class': 'form-control' },'style':{'width':'200px'}}) }}
                                </div>
                            </div>
                        </div>        
                          
                                
                                
                        <input type=\"submit\" class=\"btn btn-success btn-xl\" value=\"Edit\" />
                        {{ form_end(edit_form) }}
                    </div>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_index') }}\">Back to the list</a>
                        </li>
                        <li>
                            {{ form_start(delete_form) }}
                            <input type=\"submit\" value=\"Delete\">
                            {{ form_end(delete_form) }}
                        </li>
                    </ul>
                    </br>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_index') }}\">Back to the list</a>
                        </li>
                    </ul>
                </div>
                </br>    
            </div>

            <!--modal-->
        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
        </div>
    </div>
</div>
</div>

", ":user:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/user/edit.html.twig");
    }
}

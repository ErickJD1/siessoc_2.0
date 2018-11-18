<?php

/* user/edit.html.twig */
class __TwigTemplate_d916a1d7b6a569200f864392ceeed9eee935e65596265fd2612f00c433353726 extends Twig_Template
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
        $__internal_bb301dfd9e4bd2475a29b78cb00adac1c7d4e009d3cec891b4783006a06e5091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb301dfd9e4bd2475a29b78cb00adac1c7d4e009d3cec891b4783006a06e5091->enter($__internal_bb301dfd9e4bd2475a29b78cb00adac1c7d4e009d3cec891b4783006a06e5091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/edit.html.twig", 1);
        // line 2
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
                <div class=\"list-group\" align=\"center\">
                    <!--modal-->

                    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "Method" => "POST", "attr" => array("class" => "fos_user_profile_edit")));
        echo "


                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">First Name</label>
                                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Last Name</label>
                                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Email</label>
                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Picture Profile</label>
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'errors');
        echo "
                                <div  class=\"vich-image\">
                                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile_picture_file", array()), 'widget');
        echo "

                                </div>
                            </div>
                        </div>        

<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
";
        // line 62
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
</div>
</div>
</div>
</div>
";
        
        $__internal_bb301dfd9e4bd2475a29b78cb00adac1c7d4e009d3cec891b4783006a06e5091->leave($__internal_bb301dfd9e4bd2475a29b78cb00adac1c7d4e009d3cec891b4783006a06e5091_prof);

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
        return array (  115 => 62,  103 => 53,  98 => 51,  87 => 43,  82 => 41,  71 => 33,  66 => 31,  55 => 23,  50 => 21,  40 => 14,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<div class=\"modal fade\" id=\"edit{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Modificar de Usuario</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"list-group\" align=\"center\">
                    <!--modal-->

                    {{ form_start(edit_form, {'action': path('user_edit', {'id': user.id}), 'Method': 'POST', 'attr': { 'class': 'fos_user_profile_edit'} }) }}


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
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Email</label>
                                {{ form_errors(edit_form.email) }}
                                <div class=\"col-md-4\">
                                    {{ form_widget(edit_form.email) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group-item\">
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"textinput\">Picture Profile</label>
                                {{ form_errors(edit_form.profile_picture_file) }}
                                <div  class=\"vich-image\">
                                    {{ form_widget(edit_form.profile_picture_file) }}

                                </div>
                            </div>
                        </div>        

<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
{{ form_end(edit_form) }}
</div>
</div>
</div>
</div>
</div>
", "user/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\edit.html.twig");
    }
}

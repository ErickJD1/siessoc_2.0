<?php

/* user/edit.html.twig */
class __TwigTemplate_7e0dbc6333e48b2a4593e16724774b59a267c94a07687d467ee1100997db49c6 extends Twig_Template
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
        $__internal_c8db99e97500c22116420c3e2f4b014ddc640915cb7e662ddeb364a41b199307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8db99e97500c22116420c3e2f4b014ddc640915cb7e662ddeb364a41b199307->enter($__internal_c8db99e97500c22116420c3e2f4b014ddc640915cb7e662ddeb364a41b199307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

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

                    <div class=\"box box-success\" style=\"width: 100%\">
                        <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "method" => "POST"));
        echo "
                            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                            <input type=\"submit\" class=\"btn btn-success btn-xl\" value=\"Edit\" />
                            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                            <ul>
                                <li>
                                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
                                </li>
                                <li>
                                    ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                    <input type=\"submit\" value=\"Delete\">
                                    ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                </li>
                            </ul>
                            </br>
                            <ul>
                                <li>
                                    <a href=\"";
        // line 33
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
        
        $__internal_c8db99e97500c22116420c3e2f4b014ddc640915cb7e662ddeb364a41b199307->leave($__internal_c8db99e97500c22116420c3e2f4b014ddc640915cb7e662ddeb364a41b199307_prof);

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
        return array (  76 => 33,  67 => 27,  62 => 25,  56 => 22,  49 => 18,  44 => 16,  40 => 15,  22 => 1,);
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

                    <div class=\"box box-success\" style=\"width: 100%\">
                        <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                            {{ form_start(edit_form,{'action': path('user_edit',{'id':user.id}), 'method': 'POST'}) }}
                            {{ form_widget(edit_form) }}
                            <input type=\"submit\" class=\"btn btn-success btn-xl\" value=\"Edit\" />
                            {{ form_end(edit_form) }}

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

", "user/edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\user\\edit.html.twig");
    }
}

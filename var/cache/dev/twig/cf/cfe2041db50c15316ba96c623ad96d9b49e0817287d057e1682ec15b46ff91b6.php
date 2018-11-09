<?php

/* user/new.html.twig */
class __TwigTemplate_fc650dde2278ab02c2308f5e717e249bc9e44f92014c2a3a1996ab584d157b98 extends Twig_Template
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
        $__internal_3f304f33a5d04e6d279ff1985b477130b9b29d0554f3d32d1c80aa8816e65d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f304f33a5d04e6d279ff1985b477130b9b29d0554f3d32d1c80aa8816e65d15->enter($__internal_3f304f33a5d04e6d279ff1985b477130b9b29d0554f3d32d1c80aa8816e65d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new"), "method" => "POST"));
        echo "
                                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <input class=\"btn btn-success btn-xl\" type=\"submit\" value=\"Create\" />
                                ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </br>
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 23
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
        
        $__internal_3f304f33a5d04e6d279ff1985b477130b9b29d0554f3d32d1c80aa8816e65d15->leave($__internal_3f304f33a5d04e6d279ff1985b477130b9b29d0554f3d32d1c80aa8816e65d15_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  48 => 19,  43 => 17,  39 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                {{ form_start(form, {'action': path('user_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                <input class=\"btn btn-success btn-xl\" type=\"submit\" value=\"Create\" />
                                {{ form_end(form) }}
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
", "user/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\new.html.twig");
    }
}

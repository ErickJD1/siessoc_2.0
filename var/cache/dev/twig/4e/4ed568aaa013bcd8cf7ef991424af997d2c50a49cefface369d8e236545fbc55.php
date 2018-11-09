<?php

/* :tipocuenta:TipoCuentaindex.html.twig */
class __TwigTemplate_bb5e94e9423996323bb483fd0f54288b14787eeb5bc8ed7defba9edd9c45f045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:TipoCuentaindex.html.twig", 1);
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
        $__internal_201fa88408461c822cc85666385f66451d9ffdf3a6d2d61ce90a84a0fab16885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201fa88408461c822cc85666385f66451d9ffdf3a6d2d61ce90a84a0fab16885->enter($__internal_201fa88408461c822cc85666385f66451d9ffdf3a6d2d61ce90a84a0fab16885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201fa88408461c822cc85666385f66451d9ffdf3a6d2d61ce90a84a0fab16885->leave($__internal_201fa88408461c822cc85666385f66451d9ffdf3a6d2d61ce90a84a0fab16885_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5ccbf6395b80d303d2c63d688b6d1aef079e04afdb25f7123846e2e14a75cefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccbf6395b80d303d2c63d688b6d1aef079e04afdb25f7123846e2e14a75cefc->enter($__internal_5ccbf6395b80d303d2c63d688b6d1aef079e04afdb25f7123846e2e14a75cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_5ccbf6395b80d303d2c63d688b6d1aef079e04afdb25f7123846e2e14a75cefc->leave($__internal_5ccbf6395b80d303d2c63d688b6d1aef079e04afdb25f7123846e2e14a75cefc_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ddba3282a2e71444fa0ae8445db6ce01450972468032d4ab27397bff50af86c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddba3282a2e71444fa0ae8445db6ce01450972468032d4ab27397bff50af86c4->enter($__internal_ddba3282a2e71444fa0ae8445db6ce01450972468032d4ab27397bff50af86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo Tipo Cuenta ";
        
        $__internal_ddba3282a2e71444fa0ae8445db6ce01450972468032d4ab27397bff50af86c4->leave($__internal_ddba3282a2e71444fa0ae8445db6ce01450972468032d4ab27397bff50af86c4_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_97188778fabeb22f22b7ff0ebf703db52e74f872736f7980440f9f594f02cd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97188778fabeb22f22b7ff0ebf703db52e74f872736f7980440f9f594f02cd05->enter($__internal_97188778fabeb22f22b7ff0ebf703db52e74f872736f7980440f9f594f02cd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "Nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>




                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_97188778fabeb22f22b7ff0ebf703db52e74f872736f7980440f9f594f02cd05->leave($__internal_97188778fabeb22f22b7ff0ebf703db52e74f872736f7980440f9f594f02cd05_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  135 => 41,  131 => 40,  125 => 37,  121 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo Cuenta | {% endblock %}
{% block page_subtitle %}Catalogo Tipo Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     {{ render(controller('AppBundle:Tipocuenta:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipocuentum in tipocuentas %}
            <tr>
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>{{ tipocuentum.Nombrecuenta }}</td>
                <td>{{ tipocuentum.descripcion }}</td>
                <td>{% if tipocuentum.estadotipocuenta %}Yes{% else %}No{% endif %}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:edit', { 'id' : tipocuentum.idtipocuenta } )) }}
                  </div>




                </td>
            </tr>

          </div>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":tipocuenta:TipoCuentaindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipocuenta/TipoCuentaindex.html.twig");
    }
}

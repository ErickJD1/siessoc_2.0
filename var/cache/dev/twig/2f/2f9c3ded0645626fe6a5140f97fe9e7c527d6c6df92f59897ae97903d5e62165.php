<?php

/* :solicitudbecario:Solicitudbecarioshow.html.twig */
class __TwigTemplate_32d6e018118d6e2635666d65bbbea80987e02e47076e8f28b48a34b6313e2638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitudbecario:Solicitudbecarioshow.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b84cf76dfbd6cc0b41834998a9c83a5e17b15e84eafeae8f2cbe7f4402aee46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b84cf76dfbd6cc0b41834998a9c83a5e17b15e84eafeae8f2cbe7f4402aee46->enter($__internal_6b84cf76dfbd6cc0b41834998a9c83a5e17b15e84eafeae8f2cbe7f4402aee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudbecario:Solicitudbecarioshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b84cf76dfbd6cc0b41834998a9c83a5e17b15e84eafeae8f2cbe7f4402aee46->leave($__internal_6b84cf76dfbd6cc0b41834998a9c83a5e17b15e84eafeae8f2cbe7f4402aee46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5d012ae0aa39d7f831fc6829caf342f0357e6e9bc573ea8eab610a69b5da8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5d012ae0aa39d7f831fc6829caf342f0357e6e9bc573ea8eab610a69b5da8c->enter($__internal_0b5d012ae0aa39d7f831fc6829caf342f0357e6e9bc573ea8eab610a69b5da8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Solicitudbecario</h1>

    <table>
        <tbody>
            <tr>
                <th>Telefonosolibecario</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telefonosolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ingresossolifamiliabecario</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "ingresossolifamiliabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miembrossolifamiliabecario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "miembrossolifamiliabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tiposolicasabecario</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "tiposolicasabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carrerasoliestudiarbecario</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "carrerasoliestudiarbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Universidadsolibecario</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "universidadsolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montosolimatriculabecario</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "montosolimatriculabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuotasolimensualbecario</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "cuotasolimensualbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duracionsolicarrerabecario</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "duracionsolicarrerabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trabajosolibecario</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "trabajosolibecario", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Docsoliidentidadbecario</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "docsoliidentidadbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aniosoliingresobecario</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosoliingresobecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Aniosolifinalizacionbecario</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosolifinalizacionbecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cantsolihermanosbecario</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "cantsolihermanosbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsolipadrebecario</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "nomsolipadrebecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsolimadrebecario</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "nomsolimadrebecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telsoliemergenciabecario</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telsoliemergenciabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telsolipersonalbecario</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telsolipersonalbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miembrossolifamilibecario</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "miembrossolifamilibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccionsolibecario</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "direccionsolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadosolibecario</th>
                <td>";
        // line 90
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "estadosolibecario", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idsolibecario</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_edit", array("id" => $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 107
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 109
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0b5d012ae0aa39d7f831fc6829caf342f0357e6e9bc573ea8eab610a69b5da8c->leave($__internal_0b5d012ae0aa39d7f831fc6829caf342f0357e6e9bc573ea8eab610a69b5da8c_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudbecario:Solicitudbecarioshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 109,  229 => 107,  223 => 104,  217 => 101,  207 => 94,  196 => 90,  189 => 86,  182 => 82,  175 => 78,  168 => 74,  161 => 70,  154 => 66,  147 => 62,  138 => 58,  129 => 54,  122 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Solicitudbecario</h1>

    <table>
        <tbody>
            <tr>
                <th>Telefonosolibecario</th>
                <td>{{ solicitudbecario.telefonosolibecario }}</td>
            </tr>
            <tr>
                <th>Ingresossolifamiliabecario</th>
                <td>{{ solicitudbecario.ingresossolifamiliabecario }}</td>
            </tr>
            <tr>
                <th>Miembrossolifamiliabecario</th>
                <td>{{ solicitudbecario.miembrossolifamiliabecario }}</td>
            </tr>
            <tr>
                <th>Tiposolicasabecario</th>
                <td>{{ solicitudbecario.tiposolicasabecario }}</td>
            </tr>
            <tr>
                <th>Carrerasoliestudiarbecario</th>
                <td>{{ solicitudbecario.carrerasoliestudiarbecario }}</td>
            </tr>
            <tr>
                <th>Universidadsolibecario</th>
                <td>{{ solicitudbecario.universidadsolibecario }}</td>
            </tr>
            <tr>
                <th>Montosolimatriculabecario</th>
                <td>{{ solicitudbecario.montosolimatriculabecario }}</td>
            </tr>
            <tr>
                <th>Cuotasolimensualbecario</th>
                <td>{{ solicitudbecario.cuotasolimensualbecario }}</td>
            </tr>
            <tr>
                <th>Duracionsolicarrerabecario</th>
                <td>{{ solicitudbecario.duracionsolicarrerabecario }}</td>
            </tr>
            <tr>
                <th>Trabajosolibecario</th>
                <td>{% if solicitudbecario.trabajosolibecario %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Docsoliidentidadbecario</th>
                <td>{{ solicitudbecario.docsoliidentidadbecario }}</td>
            </tr>
            <tr>
                <th>Aniosoliingresobecario</th>
                <td>{% if solicitudbecario.aniosoliingresobecario %}{{ solicitudbecario.aniosoliingresobecario|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Aniosolifinalizacionbecario</th>
                <td>{% if solicitudbecario.aniosolifinalizacionbecario %}{{ solicitudbecario.aniosolifinalizacionbecario|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Cantsolihermanosbecario</th>
                <td>{{ solicitudbecario.cantsolihermanosbecario }}</td>
            </tr>
            <tr>
                <th>Nomsolipadrebecario</th>
                <td>{{ solicitudbecario.nomsolipadrebecario }}</td>
            </tr>
            <tr>
                <th>Nomsolimadrebecario</th>
                <td>{{ solicitudbecario.nomsolimadrebecario }}</td>
            </tr>
            <tr>
                <th>Telsoliemergenciabecario</th>
                <td>{{ solicitudbecario.telsoliemergenciabecario }}</td>
            </tr>
            <tr>
                <th>Telsolipersonalbecario</th>
                <td>{{ solicitudbecario.telsolipersonalbecario }}</td>
            </tr>
            <tr>
                <th>Miembrossolifamilibecario</th>
                <td>{{ solicitudbecario.miembrossolifamilibecario }}</td>
            </tr>
            <tr>
                <th>Direccionsolibecario</th>
                <td>{{ solicitudbecario.direccionsolibecario }}</td>
            </tr>
            <tr>
                <th>Estadosolibecario</th>
                <td>{% if solicitudbecario.estadosolibecario %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idsolibecario</th>
                <td>{{ solicitudbecario.idsolibecario }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('solicitudbecario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('solicitudbecario_edit', { 'id': solicitudbecario.idsolibecario }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":solicitudbecario:Solicitudbecarioshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/solicitudbecario/Solicitudbecarioshow.html.twig");
    }
}

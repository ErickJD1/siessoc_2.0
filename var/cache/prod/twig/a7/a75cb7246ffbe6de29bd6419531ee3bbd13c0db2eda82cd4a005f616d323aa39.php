<?php

/* :solicitudbecario:Solicitudbecarioshow.html.twig */
class __TwigTemplate_c9e95cbee9cef5a8df6f0a336b55f18f6e0ed4e139ee311a1d5c377c7abbdb30 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Solicitudbecario</h1>

    <table>
        <tbody>
            <tr>
                <th>Telefonosolibecario</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "telefonosolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ingresossolifamiliabecario</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "ingresossolifamiliabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miembrossolifamiliabecario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "miembrossolifamiliabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tiposolicasabecario</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "tiposolicasabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carrerasoliestudiarbecario</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "carrerasoliestudiarbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Universidadsolibecario</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "universidadsolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montosolimatriculabecario</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "montosolimatriculabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuotasolimensualbecario</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "cuotasolimensualbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duracionsolicarrerabecario</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "duracionsolicarrerabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trabajosolibecario</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "trabajosolibecario", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "docsoliidentidadbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aniosoliingresobecario</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "aniosoliingresobecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Aniosolifinalizacionbecario</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "aniosolifinalizacionbecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cantsolihermanosbecario</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "cantsolihermanosbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsolipadrebecario</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "nomsolipadrebecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsolimadrebecario</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "nomsolimadrebecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telsoliemergenciabecario</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "telsoliemergenciabecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telsolipersonalbecario</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "telsolipersonalbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miembrossolifamilibecario</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "miembrossolifamilibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccionsolibecario</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "direccionsolibecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadosolibecario</th>
                <td>";
        // line 90
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "estadosolibecario", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "idsolibecario", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_edit", array("id" => $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : null), "idsolibecario", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 107
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 109
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
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
        return array (  225 => 109,  220 => 107,  214 => 104,  208 => 101,  198 => 94,  187 => 90,  180 => 86,  173 => 82,  166 => 78,  159 => 74,  152 => 70,  145 => 66,  138 => 62,  129 => 58,  120 => 54,  113 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":solicitudbecario:Solicitudbecarioshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarioshow.html.twig");
    }
}

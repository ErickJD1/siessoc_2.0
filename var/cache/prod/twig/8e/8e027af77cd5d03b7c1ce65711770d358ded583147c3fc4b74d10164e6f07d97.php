<?php

/* :serviciosocial:show.html.twig */
class __TwigTemplate_79d9fe70ee159f9bce7b069a0998a7fa0be70dd241e08a509ce549867080c1ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "Servicio Social| ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Show";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Serviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Idexpbecario</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "idexpbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaaprovacionservicio</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechaaprovacionservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechaaprovacionservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicioservicio</th>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechainicioservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechainicioservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinservicio</th>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechafinservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "fechafinservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Estadoservicio</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "estadoservicio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idserviciosocial</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "idserviciosocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_edit", array("id" => $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : null), "idserviciosocial", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":serviciosocial:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  116 => 46,  110 => 43,  104 => 40,  94 => 33,  87 => 29,  78 => 25,  69 => 21,  60 => 17,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":serviciosocial:show.html.twig", "/home/ubuntu/workspace/app/Resources/views/serviciosocial/show.html.twig");
    }
}

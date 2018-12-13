<?php

/* :proyectoserviciosocial:show.html.twig */
class __TwigTemplate_cd0bacdffcaaab31501dc1b28d87bc040405e4c793c1c69a0e786cf1ab0f19ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":proyectoserviciosocial:show.html.twig", 1);
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
        echo " Proyeto Servicio Social| ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Show ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Proyectoserviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombreproyecto</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "nombreproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcionproyecto</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "descripcionproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Encargadoproyecto</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "encargadoproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lugarproyecto</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "lugarproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadoproyecto</th>
                <td>";
        // line 29
        if ($this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "estadoproyecto", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idproyectservisocial</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "idproyectservisocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_edit", array("id" => $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : null), "idproyectservisocial", array()))), "html", null, true);
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
        return ":proyectoserviciosocial:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  114 => 46,  108 => 43,  102 => 40,  92 => 33,  81 => 29,  74 => 25,  67 => 21,  60 => 17,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":proyectoserviciosocial:show.html.twig", "/home/ubuntu/workspace/app/Resources/views/proyectoserviciosocial/show.html.twig");
    }
}

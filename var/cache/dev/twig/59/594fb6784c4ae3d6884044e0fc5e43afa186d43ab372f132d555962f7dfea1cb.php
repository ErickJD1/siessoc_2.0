<?php

/* solicitudss/show.html.twig */
class __TwigTemplate_0c4196be68a89a99a10c56ad931cf518fb29ef8945d9433c654164c7c51615a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudss/show.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3beee023547a91eed4a9e6ae8b62cf3b5d134ec2e5002fd350008a705f2435b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beee023547a91eed4a9e6ae8b62cf3b5d134ec2e5002fd350008a705f2435b0->enter($__internal_3beee023547a91eed4a9e6ae8b62cf3b5d134ec2e5002fd350008a705f2435b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudss/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3beee023547a91eed4a9e6ae8b62cf3b5d134ec2e5002fd350008a705f2435b0->leave($__internal_3beee023547a91eed4a9e6ae8b62cf3b5d134ec2e5002fd350008a705f2435b0_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9b66b125aa27748cb043faf533b3d3c29298b8cf6db7736efebb9a9bbb257f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b66b125aa27748cb043faf533b3d3c29298b8cf6db7736efebb9a9bbb257f54->enter($__internal_9b66b125aa27748cb043faf533b3d3c29298b8cf6db7736efebb9a9bbb257f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9b66b125aa27748cb043faf533b3d3c29298b8cf6db7736efebb9a9bbb257f54->leave($__internal_9b66b125aa27748cb043faf533b3d3c29298b8cf6db7736efebb9a9bbb257f54_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c7cd1c37b790092c093f3f5f7200cde2c3e3c89cd2b166e47ee4b6267a70c947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cd1c37b790092c093f3f5f7200cde2c3e3c89cd2b166e47ee4b6267a70c947->enter($__internal_c7cd1c37b790092c093f3f5f7200cde2c3e3c89cd2b166e47ee4b6267a70c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Detalle Servicio Social</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombreproyecto</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "nombreproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Encargado</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "encargado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lugar</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "lugar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idsss</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "idsss", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_edit", array("id" => $this->getAttribute((isset($context["solicitudss"]) ? $context["solicitudss"] : $this->getContext($context, "solicitudss")), "idsss", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">Actualizar</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-xs\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
            ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
";
        
        $__internal_c7cd1c37b790092c093f3f5f7200cde2c3e3c89cd2b166e47ee4b6267a70c947->leave($__internal_c7cd1c37b790092c093f3f5f7200cde2c3e3c89cd2b166e47ee4b6267a70c947_prof);

    }

    public function getTemplateName()
    {
        return "solicitudss/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  114 => 39,  109 => 37,  105 => 36,  96 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block page_content %}
{% block body %}
    <h1>Detalle Servicio Social</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombreproyecto</th>
                <td>{{ solicitudss.nombreproyecto }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ solicitudss.descripcion }}</td>
            </tr>
            <tr>
                <th>Encargado</th>
                <td>{{ solicitudss.encargado }}</td>
            </tr>
            <tr>
                <th>Lugar</th>
                <td>{{ solicitudss.lugar }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ solicitudss.estado }}</td>
            </tr>
            <tr>
                <th>Idsss</th>
                <td>{{ solicitudss.idsss }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
            {{ form_start(delete_form) }}
                <a href=\"{{ path('servicio_social_edit', { 'id': solicitudss.idsss }) }}\" class=\"btn btn-primary btn-xs\">Actualizar</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-xs\">
                <a href=\"{{ path('servicio_social_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
            {{ form_end(delete_form) }}
    </ul>
{% endblock %}
{% endblock %}
", "solicitudss/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\solicitudss\\show.html.twig");
    }
}

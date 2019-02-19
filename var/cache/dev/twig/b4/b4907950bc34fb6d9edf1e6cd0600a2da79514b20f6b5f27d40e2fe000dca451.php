<?php

/* user/index.html.twig */
class __TwigTemplate_85e5f8350c341403208a3255e1e54da6260f6700a0c83e4ec89181cdb6dd6cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_c4dbf179dfa42d087cd77378b97df8f7ef5894baa50db7188aa9401f0ccd9373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dbf179dfa42d087cd77378b97df8f7ef5894baa50db7188aa9401f0ccd9373->enter($__internal_c4dbf179dfa42d087cd77378b97df8f7ef5894baa50db7188aa9401f0ccd9373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4dbf179dfa42d087cd77378b97df8f7ef5894baa50db7188aa9401f0ccd9373->leave($__internal_c4dbf179dfa42d087cd77378b97df8f7ef5894baa50db7188aa9401f0ccd9373_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53361baadbd58e58a95f6f309e1ab780c239672853c0a85d6e657746f1df34af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53361baadbd58e58a95f6f309e1ab780c239672853c0a85d6e657746f1df34af->enter($__internal_53361baadbd58e58a95f6f309e1ab780c239672853c0a85d6e657746f1df34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_53361baadbd58e58a95f6f309e1ab780c239672853c0a85d6e657746f1df34af->leave($__internal_53361baadbd58e58a95f6f309e1ab780c239672853c0a85d6e657746f1df34af_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1e2664e87e8d483a57fdbc882132cfb2b7207e6705ddcc3f1382cdf187fd9352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2664e87e8d483a57fdbc882132cfb2b7207e6705ddcc3f1382cdf187fd9352->enter($__internal_1e2664e87e8d483a57fdbc882132cfb2b7207e6705ddcc3f1382cdf187fd9352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_1e2664e87e8d483a57fdbc882132cfb2b7207e6705ddcc3f1382cdf187fd9352->leave($__internal_1e2664e87e8d483a57fdbc882132cfb2b7207e6705ddcc3f1382cdf187fd9352_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d95b7b3852d26da6f5cf1b0b9e90306d0a8269816287e31e8aeb775d04a0ba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95b7b3852d26da6f5cf1b0b9e90306d0a8269816287e31e8aeb775d04a0ba78->enter($__internal_d95b7b3852d26da6f5cf1b0b9e90306d0a8269816287e31e8aeb775d04a0ba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_d95b7b3852d26da6f5cf1b0b9e90306d0a8269816287e31e8aeb775d04a0ba78->leave($__internal_d95b7b3852d26da6f5cf1b0b9e90306d0a8269816287e31e8aeb775d04a0ba78_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a68e588e751d7b9bc009373b7874d79130e340c78e2247805c46fda139d0703f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68e588e751d7b9bc009373b7874d79130e340c78e2247805c46fda139d0703f->enter($__internal_a68e588e751d7b9bc009373b7874d79130e340c78e2247805c46fda139d0703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Usuario</a>
            </div>
            <br> </br>
            <table id=\"tabelMahasiswa\" style=\"width:100%;\"  align=\"center\" class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa\">
                <thead>
                    <tr role=\"row\">

                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                        <tr>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                            ";
            // line 41
            echo "                            <td align=\"center\">
                                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#show";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                                    ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:show", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "</div>
                                <div style=\"float:left;\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"\" style=\"background-color: transparent;  border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                                </div> 

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>

            </table>

        </div>

    </div>                    



";
        
        $__internal_a68e588e751d7b9bc009373b7874d79130e340c78e2247805c46fda139d0703f->leave($__internal_a68e588e751d7b9bc009373b7874d79130e340c78e2247805c46fda139d0703f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  152 => 44,  148 => 43,  144 => 42,  141 => 41,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  119 => 34,  116 => 33,  112 => 32,  93 => 16,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% block stylesheets %}
    {{ parent() }}
{%endblock%}
{% block page_title %} Usuarios | {% endblock %}
{% block page_subtitle %}Gestion de Usuarios {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('user_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Usuario</a>
            </div>
            <br> </br>
            <table id=\"tabelMahasiswa\" style=\"width:100%;\"  align=\"center\" class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa\">
                <thead>
                    <tr role=\"row\">

                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in pagination %}
                        <tr>
                            <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.username }}</td>
                            <td>{{ user.email }}</td>
                            {# <td>{% if user.createdAt %}{{ user.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                             <td>{% if user.updateAt %}{{ user.updateAt|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                            <td align=\"center\">
                                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#show{{ user.id }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                                    {{ render(controller('SalexUserBundle:User:show',{ 'id':user.id })) }}</div>
                                <div style=\"float:left;\"><a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"\" style=\"background-color: transparent;  border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                                </div> 

                            </td>
                        </tr>
                    {% endfor %}
                </tbody>

            </table>

        </div>

    </div>                    



{% endblock %}
", "user/index.html.twig", "/home/ubuntu/workspace/app/Resources/views/user/index.html.twig");
    }
}

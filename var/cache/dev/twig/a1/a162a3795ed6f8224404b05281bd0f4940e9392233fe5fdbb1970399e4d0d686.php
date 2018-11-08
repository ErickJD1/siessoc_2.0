<?php

/* user/index.html.twig */
class __TwigTemplate_4fce09e2fd03dc61732d8ae8fb20412c1e3a395e3ffd98a1f1f0f8aac7bf55eb extends Twig_Template
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
        $__internal_4c949b17ddafc398002f147d96ef6f409247fa88ed867eb37ca03e8ae357d3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c949b17ddafc398002f147d96ef6f409247fa88ed867eb37ca03e8ae357d3e7->enter($__internal_4c949b17ddafc398002f147d96ef6f409247fa88ed867eb37ca03e8ae357d3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c949b17ddafc398002f147d96ef6f409247fa88ed867eb37ca03e8ae357d3e7->leave($__internal_4c949b17ddafc398002f147d96ef6f409247fa88ed867eb37ca03e8ae357d3e7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c0e1242dc850d4790acb00f1b00de3441067ad3b4cbdfd1149bae376a90794e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0e1242dc850d4790acb00f1b00de3441067ad3b4cbdfd1149bae376a90794e->enter($__internal_4c0e1242dc850d4790acb00f1b00de3441067ad3b4cbdfd1149bae376a90794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_4c0e1242dc850d4790acb00f1b00de3441067ad3b4cbdfd1149bae376a90794e->leave($__internal_4c0e1242dc850d4790acb00f1b00de3441067ad3b4cbdfd1149bae376a90794e_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a20e5757d63416e69133d36a9e00c475f62e08f9e8b7376f0b1eb6485837ec7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20e5757d63416e69133d36a9e00c475f62e08f9e8b7376f0b1eb6485837ec7d->enter($__internal_a20e5757d63416e69133d36a9e00c475f62e08f9e8b7376f0b1eb6485837ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_a20e5757d63416e69133d36a9e00c475f62e08f9e8b7376f0b1eb6485837ec7d->leave($__internal_a20e5757d63416e69133d36a9e00c475f62e08f9e8b7376f0b1eb6485837ec7d_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_715186fcc53fca519634bd109edfa9049aa45afafe04c355702c5038b858a56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715186fcc53fca519634bd109edfa9049aa45afafe04c355702c5038b858a56d->enter($__internal_715186fcc53fca519634bd109edfa9049aa45afafe04c355702c5038b858a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_715186fcc53fca519634bd109edfa9049aa45afafe04c355702c5038b858a56d->leave($__internal_715186fcc53fca519634bd109edfa9049aa45afafe04c355702c5038b858a56d_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6cdde6a2e8b9b1a1f5a015448d8b3c53544b7d50abbf3dc1704c0df74f6deee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdde6a2e8b9b1a1f5a015448d8b3c53544b7d50abbf3dc1704c0df74f6deee2->enter($__internal_6cdde6a2e8b9b1a1f5a015448d8b3c53544b7d50abbf3dc1704c0df74f6deee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:new"));
        echo "
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                    <tr>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                       ";
            // line 42
            echo "                        <td align=\"center\">
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#show";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                            ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:show", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "</div>
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#edit";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                            ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:edit", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "</div> 
                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>

        </table>

        </div>

    </div>                    
    


";
        
        $__internal_6cdde6a2e8b9b1a1f5a015448d8b3c53544b7d50abbf3dc1704c0df74f6deee2->leave($__internal_6cdde6a2e8b9b1a1f5a015448d8b3c53544b7d50abbf3dc1704c0df74f6deee2_prof);

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
        return array (  168 => 51,  157 => 46,  153 => 45,  149 => 44,  145 => 43,  142 => 42,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  120 => 35,  117 => 34,  113 => 33,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         {{ render(controller('SalexUserBundle:User:new' )) }}
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
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#edit{{ user.id }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                            {{ render(controller('SalexUserBundle:User:edit',{ 'id':user.id })) }}</div> 
                            
                        </td>
                    </tr>
                {% endfor %}
            </tbody>

        </table>

        </div>

    </div>                    
    


{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\index.html.twig");
    }
}

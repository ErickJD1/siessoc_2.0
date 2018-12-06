<?php

/* webSite/nosotros.html.twig */
class __TwigTemplate_227b66347699db1d441a757d9376955fd34bd5aac5d1c67e305dec9b1b7fe56b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "webSite/nosotros.html.twig", 3);
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
        $__internal_95e5cb58e213d0de12e2ce6c8d4d37969d8f30650b7cfed17bf6db0c79b911f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e5cb58e213d0de12e2ce6c8d4d37969d8f30650b7cfed17bf6db0c79b911f6->enter($__internal_95e5cb58e213d0de12e2ce6c8d4d37969d8f30650b7cfed17bf6db0c79b911f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webSite/nosotros.html.twig"));

        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "webSite/nosotros.html.twig", 2);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e5cb58e213d0de12e2ce6c8d4d37969d8f30650b7cfed17bf6db0c79b911f6->leave($__internal_95e5cb58e213d0de12e2ce6c8d4d37969d8f30650b7cfed17bf6db0c79b911f6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced9dc3cca0a074045052bbb3bc742b4f410588fd4843dd81dda19ed3b64456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced9dc3cca0a074045052bbb3bc742b4f410588fd4843dd81dda19ed3b64456d->enter($__internal_ced9dc3cca0a074045052bbb3bc742b4f410588fd4843dd81dda19ed3b64456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Page Content -->
    <div class=\"container\" style=\"font-family: Palatino Header !important;\">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\" >ESSOC
            <small>Nuestro equipo</small>
        </h1>
        <hr>
        <!-- Image Header -->
        <img class=\"img-fluid rounded mb-4\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nosotros.png"), "html", null, true);
        echo "\" alt=\"\">

        <!-- Team Members -->

        <div class=\"row\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 19
            echo "            
                <div align=\"center\"  class=\"col-lg-4 mb-4\">
                    <div  class=\"card h-100 text-center\">
                        ";
            // line 23
            echo "                        <div class=\"user-panel\">
                            <div class=\"pull-center image\" >
                                ";
            // line 25
            $context["user_image"] = false;
            // line 26
            echo "                                ";
            if ( !twig_test_empty($this->getAttribute($context["u"], "getProfilePicture", array(), "method"))) {
                // line 27
                echo "                                    ";
                $context["user_image"] = ("images/profile/" . $this->getAttribute($context["u"], "getProfilePicture", array(), "method"));
                // line 28
                echo "                                ";
            }
            // line 29
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["user_image"]) ? $context["user_image"] : $this->getContext($context, "user_image"))), "html", null, true);
            echo "\" style=\"width:150px; height:150px; align:center !important; margin-top: 2%; border-radius: 400px \" class=\"img-circle\"></img>
                            </div>
                        </div>
                        ";
            // line 33
            echo "                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["u"], "firstName", array()) . " ") . $this->getAttribute($context["u"], "lastName", array())), "html", null, true);
            echo "</h4>

                            <p class=\"card-text\" align=\"justify\" style=\"font-family: Palatino body !important; font-size:13pt;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "description", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"#\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_ced9dc3cca0a074045052bbb3bc742b4f410588fd4843dd81dda19ed3b64456d->leave($__internal_ced9dc3cca0a074045052bbb3bc742b4f410588fd4843dd81dda19ed3b64456d_prof);

    }

    public function getTemplateName()
    {
        return "webSite/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  106 => 39,  100 => 36,  95 => 34,  92 => 33,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  74 => 25,  70 => 23,  65 => 19,  61 => 18,  53 => 13,  43 => 5,  37 => 4,  30 => 3,  28 => 2,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/blog/index.html.twig #}
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% extends 'base.html.twig' %}
{% block body %}
    <!-- Page Content -->
    <div class=\"container\" style=\"font-family: Palatino Header !important;\">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\" >ESSOC
            <small>Nuestro equipo</small>
        </h1>
        <hr>
        <!-- Image Header -->
        <img class=\"img-fluid rounded mb-4\" src=\"{{ asset('img/nosotros.png') }}\" alt=\"\">

        <!-- Team Members -->

        <div class=\"row\">
        {% for u in user %}
            
                <div align=\"center\"  class=\"col-lg-4 mb-4\">
                    <div  class=\"card h-100 text-center\">
                        {#Panel de equipo#}
                        <div class=\"user-panel\">
                            <div class=\"pull-center image\" >
                                {% set user_image = false %}
                                {% if u.getProfilePicture() is not empty %}
                                    {% set user_image = 'images/profile/'~ u.getProfilePicture() %}
                                {% endif %}
                                <img  src=\"{{asset(user_image)}}\" style=\"width:150px; height:150px; align:center !important; margin-top: 2%; border-radius: 400px \" class=\"img-circle\"></img>
                            </div>
                        </div>
                        {#Fin de panel de equipo#}
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">{{u.firstName~' '~u.lastName}}</h4>

                            <p class=\"card-text\" align=\"justify\" style=\"font-family: Palatino body !important; font-size:13pt;\">{{u.description}}</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"#\">{{u.email}}</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <!-- /.row -->
    </div>
{% endblock %}
", "webSite/nosotros.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\webSite\\nosotros.html.twig");
    }
}

<?php

/* @AvanzuAdminTheme/Exception/exception_full.html.twig */
class __TwigTemplate_e4e9900fff75840e88145fc9febd02380926870e7b1904d4a1d0d72f528d07fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db402c52fafccd146f62502f6bc45d106bc21b69a79d603a81eed4f13476d382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db402c52fafccd146f62502f6bc45d106bc21b69a79d603a81eed4f13476d382->enter($__internal_db402c52fafccd146f62502f6bc45d106bc21b69a79d603a81eed4f13476d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db402c52fafccd146f62502f6bc45d106bc21b69a79d603a81eed4f13476d382->leave($__internal_db402c52fafccd146f62502f6bc45d106bc21b69a79d603a81eed4f13476d382_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f99c1a263fd6c059c8fafdec0ddbf4b2261f6723856e50f27497a8e990a1dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99c1a263fd6c059c8fafdec0ddbf4b2261f6723856e50f27497a8e990a1dc39->enter($__internal_f99c1a263fd6c059c8fafdec0ddbf4b2261f6723856e50f27497a8e990a1dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Error ";
        
        $__internal_f99c1a263fd6c059c8fafdec0ddbf4b2261f6723856e50f27497a8e990a1dc39->leave($__internal_f99c1a263fd6c059c8fafdec0ddbf4b2261f6723856e50f27497a8e990a1dc39_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3346233da296b25581524b4f49c1e7c8ba27740cd9ee34106f9e5466c756a985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3346233da296b25581524b4f49c1e7c8ba27740cd9ee34106f9e5466c756a985->enter($__internal_3346233da296b25581524b4f49c1e7c8ba27740cd9ee34106f9e5466c756a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        
        $__internal_3346233da296b25581524b4f49c1e7c8ba27740cd9ee34106f9e5466c756a985->leave($__internal_3346233da296b25581524b4f49c1e7c8ba27740cd9ee34106f9e5466c756a985_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fd4c35e2bf5ca312223d458d74a84803d9d07e0f4e994184754207b9d820ad30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4c35e2bf5ca312223d458d74a84803d9d07e0f4e994184754207b9d820ad30->enter($__internal_fd4c35e2bf5ca312223d458d74a84803d9d07e0f4e994184754207b9d820ad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "    <div class=\"error-page\">
        <h2 class=\"headline\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</h2>

        <div class=\"error-content\">
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Something seems to have gone wrong"), "html", null, true);
        echo "</h3>

            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["n"] => $context["position"]) {
            // line 19
            echo "
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <i class=\"fa fa-warning\"></i>

                <h3 class=\"box-title\">";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["position"], "class", array()));
            echo "</h3>
            </div>
            <div class=\"box-body\">

                <div class=\"callout callout-danger\">
                    ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute($context["position"], "message", array()), "html", null, true)));
            echo "
                </div>

                <div class=\"box-group\" id=\"box-";
            // line 32
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\">


                    <!-- trace -->
                    <div class=\"panel box box-warning\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                <a data-toggle=\"collapse\" data-parent=\"box-";
            // line 39
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\"
                                   href=\"#trace-";
            // line 40
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\">
                                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stack Trace"), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"trace-";
            // line 45
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"box-body\">
                                <div class=\"panel\">
                                <ul class=\"timeline\">
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["position"], "trace", array()));
            foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
                // line 50
                echo "                                        <li class=\"time-label\">
                                                    <span class=\"bg-red\">
                                                        Stack #";
                // line 52
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                                    </span>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-code bg-blue\"></i>

                                            <div class=\"timeline-item\">
                                                <h3 class=\"timeline-header\">
                                                    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "file", array()), "html", null, true);
                echo "
                                                </h3>

                                                <div class=\"timeline-body\">
                                                    ";
                // line 64
                if ($this->getAttribute($context["trace"], "function", array())) {
                    // line 65
                    echo "                                                        at
                                                        <strong>
                                                            <abbr title=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "short_class", array()), "html", null, true);
                    echo "</abbr>
                                                            ";
                    // line 68
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["trace"], "type", array()) . $this->getAttribute($context["trace"], "function", array())), "html", null, true);
                    echo "
                                                        </strong>
                                                        (";
                    // line 70
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute($context["trace"], "args", array()));
                    echo ")
                                                    ";
                }
                // line 72
                echo "
                                                    ";
                // line 73
                if (((($this->getAttribute($context["trace"], "file", array(), "any", true, true) && $this->getAttribute($context["trace"], "file", array())) && $this->getAttribute($context["trace"], "line", array(), "any", true, true)) && $this->getAttribute($context["trace"], "line", array()))) {
                    // line 74
                    echo "                                                        ";
                    echo (($this->getAttribute($context["trace"], "function", array())) ? ("<br />") : (""));
                    echo "
                                                        in ";
                    // line 75
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "&nbsp;
                                                        ";
                    // line 76
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "

                                                    ";
                }
                // line 79
                echo "                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['n'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
";
        
        $__internal_fd4c35e2bf5ca312223d458d74a84803d9d07e0f4e994184754207b9d820ad30->leave($__internal_fd4c35e2bf5ca312223d458d74a84803d9d07e0f4e994184754207b9d820ad30_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 93,  225 => 83,  216 => 79,  210 => 76,  206 => 75,  201 => 74,  199 => 73,  196 => 72,  191 => 70,  186 => 68,  180 => 67,  176 => 65,  174 => 64,  167 => 60,  156 => 52,  152 => 50,  148 => 49,  141 => 45,  134 => 41,  130 => 40,  126 => 39,  116 => 32,  110 => 29,  102 => 24,  95 => 19,  91 => 18,  82 => 12,  77 => 10,  71 => 7,  68 => 6,  62 => 5,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}
{% block page_title %} Error {% endblock %}
{% block page_subtitle %} {{ status_code }} {% endblock %}

{% block page_content %}
    <div class=\"error-page\">
        <h2 class=\"headline\">{{ status_code }}</h2>

        <div class=\"error-content\">
            <h3>{{ 'Something seems to have gone wrong'|trans() }}</h3>

            <p>{{ exception.message }}</p>
        </div>
    </div>

    <div class=\"\">

    {% for n, position in exception.toarray %}

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <i class=\"fa fa-warning\"></i>

                <h3 class=\"box-title\">{{ position.class|abbr_class }}</h3>
            </div>
            <div class=\"box-body\">

                <div class=\"callout callout-danger\">
                    {{ position.message|nl2br|format_file_from_text }}
                </div>

                <div class=\"box-group\" id=\"box-{{ n }}\">


                    <!-- trace -->
                    <div class=\"panel box box-warning\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                <a data-toggle=\"collapse\" data-parent=\"box-{{ n }}\"
                                   href=\"#trace-{{ n }}\">
                                    {{ 'Stack Trace'|trans() }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"trace-{{ n }}\" class=\"panel-collapse collapse\">
                            <div class=\"box-body\">
                                <div class=\"panel\">
                                <ul class=\"timeline\">
                                    {% for i, trace in position.trace %}
                                        <li class=\"time-label\">
                                                    <span class=\"bg-red\">
                                                        Stack #{{ i }}
                                                    </span>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-code bg-blue\"></i>

                                            <div class=\"timeline-item\">
                                                <h3 class=\"timeline-header\">
                                                    {{ trace.file }}
                                                </h3>

                                                <div class=\"timeline-body\">
                                                    {% if trace.function %}
                                                        at
                                                        <strong>
                                                            <abbr title=\"{{ trace.class }}\">{{ trace.short_class }}</abbr>
                                                            {{ trace.type ~ trace.function }}
                                                        </strong>
                                                        ({{ trace.args|format_args }})
                                                    {% endif %}

                                                    {% if trace.file is defined and trace.file and trace.line is defined and trace.line %}
                                                        {{ trace.function ? '<br />' : '' }}
                                                        in {{ trace.file|format_file(trace.line) }}&nbsp;
                                                        {{ trace.file|file_excerpt(trace.line) }}

                                                    {% endif %}
                                                </div>
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    {% endfor %}

{% endblock %}", "@AvanzuAdminTheme/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

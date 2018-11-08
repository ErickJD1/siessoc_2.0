<?php

/* AvanzuAdminThemeBundle:layout:form-theme.html.twig */
class __TwigTemplate_7318d756b12b943ff842c81a73b2910f56094b5ca62327b4d181b9451c8476a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", 1);
        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae1f588d9c0b242e95cc2e8331e078400b3919df5de18cb69a6e5ab306595059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1f588d9c0b242e95cc2e8331e078400b3919df5de18cb69a6e5ab306595059->enter($__internal_ae1f588d9c0b242e95cc2e8331e078400b3919df5de18cb69a6e5ab306595059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1f588d9c0b242e95cc2e8331e078400b3919df5de18cb69a6e5ab306595059->leave($__internal_ae1f588d9c0b242e95cc2e8331e078400b3919df5de18cb69a6e5ab306595059_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_db37a40d4fbff3423e506f2215eecd11b218a239797d63a5cd60da4c69104247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db37a40d4fbff3423e506f2215eecd11b218a239797d63a5cd60da4c69104247->enter($__internal_db37a40d4fbff3423e506f2215eecd11b218a239797d63a5cd60da4c69104247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 4
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 5
        echo "
    ";
        // line 6
        if (twig_in_filter("checkbox", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")))) {
            // line 7
            echo "        ";
            $context["_class"] = " checkbox";
            // line 8
            echo "    ";
        } elseif (twig_in_filter("radio", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")))) {
            // line 9
            echo "        ";
            $context["_class"] = " radio";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["_class"] = " form-control";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . (isset($context["_class"]) ? $context["_class"] : $this->getContext($context, "_class")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["class"] = (isset($context["_class"]) ? $context["_class"] : $this->getContext($context, "_class"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))));
        // line 20
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_db37a40d4fbff3423e506f2215eecd11b218a239797d63a5cd60da4c69104247->leave($__internal_db37a40d4fbff3423e506f2215eecd11b218a239797d63a5cd60da4c69104247_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eefbc20cef33baec190bfe2f1ab93c5c599ac4a99cbc7761c7c1eaa4dea2a08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefbc20cef33baec190bfe2f1ab93c5c599ac4a99cbc7761c7c1eaa4dea2a08c->enter($__internal_eefbc20cef33baec190bfe2f1ab93c5c599ac4a99cbc7761c7c1eaa4dea2a08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eefbc20cef33baec190bfe2f1ab93c5c599ac4a99cbc7761c7c1eaa4dea2a08c->leave($__internal_eefbc20cef33baec190bfe2f1ab93c5c599ac4a99cbc7761c7c1eaa4dea2a08c_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2df6232491582c2ea94a479e32fe08bd117dcbcc952446d13654a3f02fbca596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df6232491582c2ea94a479e32fe08bd117dcbcc952446d13654a3f02fbca596->enter($__internal_2df6232491582c2ea94a479e32fe08bd117dcbcc952446d13654a3f02fbca596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["att"] => $context["val"]) {
            // line 36
            echo "        ";
            if (($context["att"] == "class")) {
                // line 37
                echo "            ";
                $context["att"] = ($context["val"] . " form-control");
                // line 38
                echo "        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['att'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_2df6232491582c2ea94a479e32fe08bd117dcbcc952446d13654a3f02fbca596->leave($__internal_2df6232491582c2ea94a479e32fe08bd117dcbcc952446d13654a3f02fbca596_prof);

    }

    // line 44
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c96329b7d2023db79ab48153aea8556dd2ab576dc71946586efdb18c4994ce12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96329b7d2023db79ab48153aea8556dd2ab576dc71946586efdb18c4994ce12->enter($__internal_c96329b7d2023db79ab48153aea8556dd2ab576dc71946586efdb18c4994ce12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 45
        echo "    <div class=\"checkbox\">
        ";
        // line 46
        ob_start();
        // line 47
        echo "            ";
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 48
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 49
            echo "            ";
        }
        // line 50
        echo "            ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 51
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 52
            echo "            ";
        }
        // line 53
        echo "            ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 54
            echo "                ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 55
            echo "            ";
        }
        // line 56
        echo "
            <label";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"checkbox\" ";
        // line 58
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 59
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 62
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "    </div>
";
        
        $__internal_c96329b7d2023db79ab48153aea8556dd2ab576dc71946586efdb18c4994ce12->leave($__internal_c96329b7d2023db79ab48153aea8556dd2ab576dc71946586efdb18c4994ce12_prof);

    }

    // line 67
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_58c4e03989e48c30f7ea18fcf943fad99dd5f522d9cc3d4f3c8ad0d5b60854aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c4e03989e48c30f7ea18fcf943fad99dd5f522d9cc3d4f3c8ad0d5b60854aa->enter($__internal_58c4e03989e48c30f7ea18fcf943fad99dd5f522d9cc3d4f3c8ad0d5b60854aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 68
        echo "    <div class=\"radio\">
        ";
        // line 69
        ob_start();
        // line 70
        echo "            ";
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 71
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 72
            echo "            ";
        }
        // line 73
        echo "            ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 74
            echo "                ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 75
            echo "            ";
        }
        // line 76
        echo "            ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 77
            echo "                ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 78
            echo "            ";
        }
        // line 79
        echo "            <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"radio\" ";
        // line 80
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 81
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 82
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 84
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 86
        echo "    </div>
";
        
        $__internal_58c4e03989e48c30f7ea18fcf943fad99dd5f522d9cc3d4f3c8ad0d5b60854aa->leave($__internal_58c4e03989e48c30f7ea18fcf943fad99dd5f522d9cc3d4f3c8ad0d5b60854aa_prof);

    }

    // line 89
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3f55970b815805f2963d97d1f17d83324ad1b2386610cc7b5210e5f0e6e20c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f55970b815805f2963d97d1f17d83324ad1b2386610cc7b5210e5f0e6e20c5e->enter($__internal_3f55970b815805f2963d97d1f17d83324ad1b2386610cc7b5210e5f0e6e20c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 90
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 91
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            ";
            // line 96
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 97
                echo "                ";
                $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 98
                echo "            ";
            } else {
                // line 99
                echo "                ";
                $context["class"] = " timepicker";
                // line 100
                echo "            ";
            }
            // line 101
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "data-datepicker" => "on"));
            // line 102
            echo "
            ";
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 106
            echo "        ";
            $context["date_pattern"] = (("<div class=\"row\">" . (isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern"))) . "</div>");
            // line 107
            echo "        ";
            echo twig_replace_filter(twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>")), array("{{ year }}" =>             // line 112
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 113
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 115
            echo "

    ";
        }
        
        $__internal_3f55970b815805f2963d97d1f17d83324ad1b2386610cc7b5210e5f0e6e20c5e->leave($__internal_3f55970b815805f2963d97d1f17d83324ad1b2386610cc7b5210e5f0e6e20c5e_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_af6793b811200ae12a53d65c26b803491206ed4af849b8fed405272cb56e5bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6793b811200ae12a53d65c26b803491206ed4af849b8fed405272cb56e5bc1->enter($__internal_af6793b811200ae12a53d65c26b803491206ed4af849b8fed405272cb56e5bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                ";
            // line 124
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 125
                echo "                    ";
                $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 126
                echo "                ";
            } else {
                // line 127
                echo "                    ";
                $context["class"] = " timepicker";
                // line 128
                echo "                ";
            }
            // line 129
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "data-timepicker" => "on"));
            // line 130
            echo "                ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 137
            echo "        ";
            $this->displayParentBlock("time_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_af6793b811200ae12a53d65c26b803491206ed4af849b8fed405272cb56e5bc1->leave($__internal_af6793b811200ae12a53d65c26b803491206ed4af849b8fed405272cb56e5bc1_prof);

    }

    // line 141
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bf40b783f78a5c4fd57a7ec0612b1d6e4ae1b4900be10be9920f636e84e9d5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf40b783f78a5c4fd57a7ec0612b1d6e4ae1b4900be10be9920f636e84e9d5aa->enter($__internal_bf40b783f78a5c4fd57a7ec0612b1d6e4ae1b4900be10be9920f636e84e9d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 142
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 143
        echo "    ";
        if ((twig_in_filter("checkbox", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types"))) || twig_in_filter("radio", (isset($context["types"]) ? $context["types"] : $this->getContext($context, "types"))))) {
            // line 144
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 149
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
            echo "
            ";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 152
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        
        $__internal_bf40b783f78a5c4fd57a7ec0612b1d6e4ae1b4900be10be9920f636e84e9d5aa->leave($__internal_bf40b783f78a5c4fd57a7ec0612b1d6e4ae1b4900be10be9920f636e84e9d5aa_prof);

    }

    // line 157
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_45fd4f8634da0051f966ad1db1e77f670b92c5567b3fd98a5b6bc5f3a693224f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fd4f8634da0051f966ad1db1e77f670b92c5567b3fd98a5b6bc5f3a693224f->enter($__internal_45fd4f8634da0051f966ad1db1e77f670b92c5567b3fd98a5b6bc5f3a693224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 158
        echo "
    ";
        // line 159
        if (array_key_exists("help", $context)) {
            // line 160
            echo "        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
            echo "\"><i class=\"fa fa-question-circle\"></i></a>
    ";
        }
        // line 162
        echo "
    ";
        // line 163
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
    ";
        // line 164
        if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 165
            echo "        <span class=\"required\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is a mandatory field", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "\">*</span>
    ";
        }
        // line 167
        echo "
";
        
        $__internal_45fd4f8634da0051f966ad1db1e77f670b92c5567b3fd98a5b6bc5f3a693224f->leave($__internal_45fd4f8634da0051f966ad1db1e77f670b92c5567b3fd98a5b6bc5f3a693224f_prof);

    }

    // line 170
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e240d86c0b2fb3f06dd17652cd2bb2414fc62c167371c976f7666f553e3f3cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e240d86c0b2fb3f06dd17652cd2bb2414fc62c167371c976f7666f553e3f3cc6->enter($__internal_e240d86c0b2fb3f06dd17652cd2bb2414fc62c167371c976f7666f553e3f3cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 171
        echo "    ";
        ob_start();
        // line 172
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 173
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 175
                echo "                    <li class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "            </ul>
        ";
        }
        // line 179
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e240d86c0b2fb3f06dd17652cd2bb2414fc62c167371c976f7666f553e3f3cc6->leave($__internal_e240d86c0b2fb3f06dd17652cd2bb2414fc62c167371c976f7666f553e3f3cc6_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:form-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 179,  587 => 177,  578 => 175,  574 => 174,  571 => 173,  568 => 172,  565 => 171,  559 => 170,  551 => 167,  545 => 165,  543 => 164,  539 => 163,  536 => 162,  530 => 160,  528 => 159,  525 => 158,  519 => 157,  508 => 152,  504 => 151,  500 => 150,  495 => 149,  489 => 146,  485 => 145,  480 => 144,  477 => 143,  474 => 142,  468 => 141,  457 => 137,  446 => 130,  443 => 129,  440 => 128,  437 => 127,  434 => 126,  431 => 125,  429 => 124,  425 => 122,  422 => 121,  416 => 120,  406 => 115,  404 => 114,  403 => 113,  402 => 112,  400 => 107,  397 => 106,  391 => 103,  388 => 102,  385 => 101,  382 => 100,  379 => 99,  376 => 98,  373 => 97,  371 => 96,  364 => 91,  361 => 90,  355 => 89,  347 => 86,  343 => 84,  337 => 82,  335 => 81,  323 => 80,  307 => 79,  304 => 78,  301 => 77,  298 => 76,  295 => 75,  292 => 74,  289 => 73,  286 => 72,  283 => 71,  280 => 70,  278 => 69,  275 => 68,  269 => 67,  261 => 64,  257 => 62,  251 => 60,  249 => 59,  237 => 58,  222 => 57,  219 => 56,  216 => 55,  213 => 54,  210 => 53,  207 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  190 => 46,  187 => 45,  181 => 44,  172 => 41,  169 => 40,  163 => 39,  160 => 38,  157 => 37,  154 => 36,  150 => 35,  147 => 34,  141 => 33,  132 => 29,  123 => 27,  119 => 26,  114 => 25,  111 => 24,  105 => 23,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block widget_attributes %}
    {% set types = form.vars.block_prefixes %}

    {% if 'checkbox' in types %}
        {% set _class = ' checkbox' %}
    {% elseif 'radio' in types%}
        {% set _class = ' radio' %}
    {% else %}
        {% set _class = ' form-control' %}
    {% endif %}

    {% if attr.class is defined %}
        {% set class = attr.class ~ _class %}
    {% else %}
        {% set class = _class %}
    {% endif %}
    {% set attr = attr|merge({'class' : class}) %}
    {{ parent () }}
{% endblock widget_attributes %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child) }}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}

    {% for att, val in attr %}
        {% if att == 'class' %}
            {% set att = val ~ ' form-control' %}
        {% endif %}
    {% endfor %}

    {{ parent() }}
{% endblock %}

{% block checkbox_widget %}
    <div class=\"checkbox\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is not same as(false) and label is empty %}
                {% set label = name|humanize %}
            {% endif %}

            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock checkbox_widget %}

{% block radio_widget %}
    <div class=\"radio\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is not same as(false) and label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock radio_widget %}

{% block date_widget %}
    {% if widget == 'single_text' %}
        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            {% if attr.class is defined %}
                {% set class = attr.class ~ ' timepicker' %}
            {% else %}
                {% set class = ' timepicker' %}
            {% endif %}
            {% set attr = attr|merge({'class' : class, 'data-datepicker':'on'}) %}

            {{ block('form_widget_simple') }}
        </div>
    {% else %}
        {% set date_pattern = '<div class=\"row\">' ~ date_pattern ~ '</div>'|raw %}
        {{ date_pattern|replace({
        '{{ year }}' : '<div class=\"col-xs-4\">{{ year }}</div>',
        '{{ month }}' : '<div class=\"col-xs-4\">{{ month }}</div>',
        '{{ day }}' : '<div class=\"col-xs-4\">{{ day }}</div>',
        })|raw|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
        })|raw }}

    {% endif %}
{% endblock %}

{% block time_widget %}
    {% if widget == 'single_text' %}
        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                {% if attr.class is defined %}
                    {% set class = attr.class ~ ' timepicker' %}
                {% else %}
                    {% set class = ' timepicker' %}
                {% endif %}
                {% set attr = attr|merge({'class' : class, 'data-timepicker':'on'}) %}
                {{ block('form_widget_simple') }}
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block form_row %}
    {% set types = form.vars.block_prefixes %}
    {% if 'checkbox' in types or 'radio' in types %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% else %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% endif %}
{% endblock %}

{% block form_label %}

    {% if help is defined %}
        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"{{ help }}\"><i class=\"fa fa-question-circle\"></i></a>
    {% endif %}

    {{ parent() }}
    {% if required and label %}
        <span class=\"required\" title=\"{{ \"This is a mandatory field\"|trans({}, translation_domain) }}\">*</span>
    {% endif %}

{% endblock form_label %}

{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li class=\"text-danger\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{# % block form_widget_simple %}
    {{ parent() }}

    {% if help is defined %}
        <p class=\"help-block\">{{ help }}</p>
    {% endif %}
{% endblock % #}
", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/layout/form-theme.html.twig");
    }
}

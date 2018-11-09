<?php

/* AvanzuAdminThemeBundle:layout:macros.html.twig */
class __TwigTemplate_57a8b954fca11d9c7fd2e551e5caaffb03c23e7e0b3963d0f9dffd94e456e639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'box_collapse' => array($this, 'block_box_collapse'),
            'box_remove' => array($this, 'block_box_remove'),
            'box_header_buttons' => array($this, 'block_box_header_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89bae9afff4ce199ded6d4589843d0304ddb24fd28676a6f8168d37b3799954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89bae9afff4ce199ded6d4589843d0304ddb24fd28676a6f8168d37b3799954->enter($__internal_a89bae9afff4ce199ded6d4589843d0304ddb24fd28676a6f8168d37b3799954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        // line 1
        $this->displayBlock('box_collapse', $context, $blocks);
        // line 4
        $this->displayBlock('box_remove', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('box_header_buttons', $context, $blocks);
        // line 20
        echo "
";
        // line 28
        echo "

";
        // line 37
        echo "
";
        // line 94
        echo "
";
        
        $__internal_a89bae9afff4ce199ded6d4589843d0304ddb24fd28676a6f8168d37b3799954->leave($__internal_a89bae9afff4ce199ded6d4589843d0304ddb24fd28676a6f8168d37b3799954_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_7298983f7dc5bf4143bb3552d903721daf1cd571e2515b31851ed93910f08095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7298983f7dc5bf4143bb3552d903721daf1cd571e2515b31851ed93910f08095->enter($__internal_7298983f7dc5bf4143bb3552d903721daf1cd571e2515b31851ed93910f08095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_7298983f7dc5bf4143bb3552d903721daf1cd571e2515b31851ed93910f08095->leave($__internal_7298983f7dc5bf4143bb3552d903721daf1cd571e2515b31851ed93910f08095_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_5532248a8ff0c91722d4ade95f64b1b54e5204c91d201340f8ab1bddb8eaac30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5532248a8ff0c91722d4ade95f64b1b54e5204c91d201340f8ab1bddb8eaac30->enter($__internal_5532248a8ff0c91722d4ade95f64b1b54e5204c91d201340f8ab1bddb8eaac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_5532248a8ff0c91722d4ade95f64b1b54e5204c91d201340f8ab1bddb8eaac30->leave($__internal_5532248a8ff0c91722d4ade95f64b1b54e5204c91d201340f8ab1bddb8eaac30_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_069589bf64e3a8cbbd7fbe4a7ae85f49ba906a953885ce7a9c9360e0bdd26092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069589bf64e3a8cbbd7fbe4a7ae85f49ba906a953885ce7a9c9360e0bdd26092->enter($__internal_069589bf64e3a8cbbd7fbe4a7ae85f49ba906a953885ce7a9c9360e0bdd26092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        // line 9
        echo "    ";
        if (((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse")) || (isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove")))) {
            // line 10
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 11
            if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
                // line 12
                echo "                ";
                $this->displayBlock("box_collapse", $context, $blocks);
                echo "
            ";
            }
            // line 14
            echo "            ";
            if ((isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove"))) {
                // line 15
                echo "                ";
                $this->displayBlock("box_remove", $context, $blocks);
                echo "
            ";
            }
            // line 17
            echo "        </div>
    ";
        }
        
        $__internal_069589bf64e3a8cbbd7fbe4a7ae85f49ba906a953885ce7a9c9360e0bdd26092->leave($__internal_069589bf64e3a8cbbd7fbe4a7ae85f49ba906a953885ce7a9c9360e0bdd26092_prof);

    }

    // line 21
    public function getbox_header($__title__ = null, $__collapse__ = null, $__remove__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "collapse" => $__collapse__,
            "remove" => $__remove__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cb80c1298d6c37544ec10f8938face2be3593903fd32c9baf6916c78513d7ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cb80c1298d6c37544ec10f8938face2be3593903fd32c9baf6916c78513d7ac4->enter($__internal_cb80c1298d6c37544ec10f8938face2be3593903fd32c9baf6916c78513d7ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            // line 22
            echo "
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
        ";
            // line 25
            $this->displayBlock("box_header_buttons", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_cb80c1298d6c37544ec10f8938face2be3593903fd32c9baf6916c78513d7ac4->leave($__internal_cb80c1298d6c37544ec10f8938face2be3593903fd32c9baf6916c78513d7ac4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getavatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e6778efcff7947df45b2d78e07a382363d02f9986e490607b3933429ea6beeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e6778efcff7947df45b2d78e07a382363d02f9986e490607b3933429ea6beeb9->enter($__internal_e6778efcff7947df45b2d78e07a382363d02f9986e490607b3933429ea6beeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            // line 31
            echo "    ";
            if ((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))) {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/avanzuadmintheme/img/avatar.png"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_e6778efcff7947df45b2d78e07a382363d02f9986e490607b3933429ea6beeb9->leave($__internal_e6778efcff7947df45b2d78e07a382363d02f9986e490607b3933429ea6beeb9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getmenu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a3d34cff5387bc362b808fc263e483c87e1a757171da852da7708d61ab090a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a3d34cff5387bc362b808fc263e483c87e1a757171da852da7708d61ab090a53->enter($__internal_a3d34cff5387bc362b808fc263e483c87e1a757171da852da7708d61ab090a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            $context["macros"] = $this;
            // line 40
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 41
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\"
            class=\" ";
                // line 42
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 44
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 45
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 46
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 47
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 49
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 50
                echo "            </a>

            ";
                // line 52
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 53
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 55
                        echo "                        ";
                        if ($this->getAttribute($context["child"], "hasChildren", array())) {
                            // line 56
                            echo "                            ";
                            echo $context["macros"]->getmenu_item($context["child"]);
                            echo "
                        ";
                        } elseif ($this->getAttribute(                        // line 57
$context["child"], "route", array())) {
                            // line 58
                            echo "                            <li class=\"";
                            echo (($this->getAttribute($context["child"], "isActive", array())) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "identifier", array()), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 59
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", $this->getAttribute($context["child"], "route", array()))) ? ($this->getAttribute($context["child"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["child"], "route", array()), $this->getAttribute($context["child"], "routeArgs", array())))), "html", null, true);
                            echo "\">
                                    <i class=\"";
                            // line 60
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "icon", array()), "fa fa-circle-o")) : ("fa fa-circle-o")), "html", null, true);
                            echo "\"></i>
                                    ";
                            // line 61
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 65
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                </ul>
            ";
                }
                // line 68
                echo "        </li>
    ";
            } else {
                // line 70
                echo "        <li class=\"header\">
            ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 72
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 73
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 75
                echo "        </li>
    ";
            }
            
            $__internal_a3d34cff5387bc362b808fc263e483c87e1a757171da852da7708d61ab090a53->leave($__internal_a3d34cff5387bc362b808fc263e483c87e1a757171da852da7708d61ab090a53_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getflash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a2cc555462dbc493dcf4d3e9b6a3761aba14ded47954e70e3117a9e0685f06cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a2cc555462dbc493dcf4d3e9b6a3761aba14ded47954e70e3117a9e0685f06cd->enter($__internal_a2cc555462dbc493dcf4d3e9b6a3761aba14ded47954e70e3117a9e0685f06cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash"));

            // line 83
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
        ";
            // line 84
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 85
                echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            }
            // line 87
            echo "        ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 88
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
        ";
            } else {
                // line 90
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
        ";
            }
            // line 92
            echo "    </div>
";
            
            $__internal_a2cc555462dbc493dcf4d3e9b6a3761aba14ded47954e70e3117a9e0685f06cd->leave($__internal_a2cc555462dbc493dcf4d3e9b6a3761aba14ded47954e70e3117a9e0685f06cd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function getsession_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_99e39ec1f925d0a2550ad31243b2e4b7b28a4fca14544b9fef47227a9f924f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_99e39ec1f925d0a2550ad31243b2e4b7b28a4fca14544b9fef47227a9f924f0c->enter($__internal_99e39ec1f925d0a2550ad31243b2e4b7b28a4fca14544b9fef47227a9f924f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "session_flash"));

            // line 96
            echo "    ";
            $context["flash_messages"] = $this;
            // line 97
            echo "
    ";
            // line 98
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
                // line 99
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 100
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 101
                        echo "                ";
                        if (($context["type"] == "fos_user_success")) {
                            // line 102
                            echo "                    ";
                            $context["type"] = "success";
                            // line 103
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 104
                            echo "                ";
                        }
                        // line 105
                        echo "                ";
                        echo $context["flash_messages"]->getflash($context["type"], $context["message"], (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "    ";
            }
            
            $__internal_99e39ec1f925d0a2550ad31243b2e4b7b28a4fca14544b9fef47227a9f924f0c->leave($__internal_99e39ec1f925d0a2550ad31243b2e4b7b28a4fca14544b9fef47227a9f924f0c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 108,  511 => 107,  502 => 105,  499 => 104,  496 => 103,  493 => 102,  490 => 101,  485 => 100,  480 => 99,  478 => 98,  475 => 97,  472 => 96,  454 => 95,  435 => 92,  429 => 90,  423 => 88,  420 => 87,  416 => 85,  414 => 84,  403 => 83,  383 => 82,  363 => 75,  355 => 73,  353 => 72,  349 => 71,  346 => 70,  342 => 68,  338 => 66,  332 => 65,  325 => 61,  321 => 60,  317 => 59,  310 => 58,  308 => 57,  303 => 56,  300 => 55,  296 => 54,  293 => 53,  291 => 52,  287 => 50,  282 => 49,  274 => 47,  272 => 46,  267 => 45,  261 => 44,  257 => 43,  251 => 42,  246 => 41,  243 => 40,  240 => 39,  225 => 38,  199 => 34,  189 => 32,  186 => 31,  169 => 30,  148 => 25,  144 => 24,  140 => 22,  122 => 21,  113 => 17,  107 => 15,  104 => 14,  98 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 8,  74 => 5,  68 => 4,  58 => 2,  52 => 1,  44 => 94,  41 => 37,  37 => 28,  34 => 20,  32 => 8,  29 => 7,  27 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block box_collapse %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
{% endblock %}
{% block box_remove %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
{% endblock %}

{% block box_header_buttons %}
    {% if collapse or remove %}
        <div class=\"box-tools pull-right\">
            {% if collapse %}
                {{ block('box_collapse') }}
            {% endif %}
            {% if remove %}
                {{ block('box_remove') }}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}

{% macro box_header(title, collapse, remove, type) %}

    <div class=\"box-header\">
        <h3 class=\"box-title\">{{ title }}</h3>
        {{ block('box_header_buttons') }}
    </div>
{% endmacro %}


{% macro avatar(image, alt, class) %}
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% else %}
        <img src=\"{{ asset('bundles/avanzuadmintheme/img/avatar.png') }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% endif %}
{% endmacro %}

{% macro menu_item(item) %}
    {% import _self as macros %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\"
            class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                <span>{{ item.label }}</span>
                {% if item.badge %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                            {{ macros.menu_item(child) }}
                        {% elseif child.route %}
                            <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                                <a href=\"{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}\">
                                    <i class=\"{{ child.icon|default('fa fa-circle-o') }}\"></i>
                                    {{ child.label }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li class=\"header\">
            {{ item.label }}
            {% if item.badge %}
                <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}
{# 
  the following code is based on phiamo/MopaBootstrapBundle
  https://github.com/phiamo/MopaBootstrapBundle/blob/88b104b3efd4c3c3bfff1df4525a53bc3596010b/Resources/views/flash.html.twig
#}
{% macro flash(type, message, close, use_raw, class, domain) %}
    <div class=\"alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close|default(false) %}alert-dismissible{% endif %}\">
        {% if close|default(false) %}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        {% endif %}
        {% if use_raw|default(false) %}
            {{ message|trans({}, domain|default('messages'))|raw }}
        {% else %}
            {{ message|trans({}, domain|default('messages')) }}
        {% endif %}
    </div>
{% endmacro %}

{% macro session_flash(close, use_raw, class, domain) %}
    {% import _self as flash_messages %}

    {% if app.session.flashbag.peekAll|length > 0 %}
        {% for type, messages in app.session.flashbag.all %}
            {% for message in messages %}
                {% if type == 'fos_user_success' %}
                    {% set type = 'success' %}
                    {% set domain = 'FOSUserBundle' %}
                {% endif %}
                {{ flash_messages.flash(type, message, close, use_raw, class, domain) }}
            {% endfor %}
        {% endfor %}
    {% endif %}
{% endmacro %}
", "AvanzuAdminThemeBundle:layout:macros.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/layout/macros.html.twig");
    }
}

<?php

/* @AvanzuAdminTheme/layout/macros.html.twig */
class __TwigTemplate_9003cb1fd535f97138275ee14c7fcf9a1cbbc9f8e48d368ebc44d17b52239649 extends Twig_Template
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
        $__internal_c69c78a1298544bcfe3e6b296a0cd10387a8441f2539875f8372aa4b2f04cfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69c78a1298544bcfe3e6b296a0cd10387a8441f2539875f8372aa4b2f04cfc4->enter($__internal_c69c78a1298544bcfe3e6b296a0cd10387a8441f2539875f8372aa4b2f04cfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/macros.html.twig"));

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
        // line 72
        echo "
";
        // line 89
        echo "
";
        
        $__internal_c69c78a1298544bcfe3e6b296a0cd10387a8441f2539875f8372aa4b2f04cfc4->leave($__internal_c69c78a1298544bcfe3e6b296a0cd10387a8441f2539875f8372aa4b2f04cfc4_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_a478aadf18b6f9f9b5ecf629a75a8aa1a360915bcf8799229c22690380c13080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a478aadf18b6f9f9b5ecf629a75a8aa1a360915bcf8799229c22690380c13080->enter($__internal_a478aadf18b6f9f9b5ecf629a75a8aa1a360915bcf8799229c22690380c13080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_a478aadf18b6f9f9b5ecf629a75a8aa1a360915bcf8799229c22690380c13080->leave($__internal_a478aadf18b6f9f9b5ecf629a75a8aa1a360915bcf8799229c22690380c13080_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_ee3e5f302a81e87e7069cc419b83a04d8dfbc2dd8f41066d452ffb4b6458fb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3e5f302a81e87e7069cc419b83a04d8dfbc2dd8f41066d452ffb4b6458fb8b->enter($__internal_ee3e5f302a81e87e7069cc419b83a04d8dfbc2dd8f41066d452ffb4b6458fb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_ee3e5f302a81e87e7069cc419b83a04d8dfbc2dd8f41066d452ffb4b6458fb8b->leave($__internal_ee3e5f302a81e87e7069cc419b83a04d8dfbc2dd8f41066d452ffb4b6458fb8b_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_d6e009d1017a57631a6bcc4427d542d4cd064581d22cbd466b7d4ec3016947ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e009d1017a57631a6bcc4427d542d4cd064581d22cbd466b7d4ec3016947ab->enter($__internal_d6e009d1017a57631a6bcc4427d542d4cd064581d22cbd466b7d4ec3016947ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

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
        
        $__internal_d6e009d1017a57631a6bcc4427d542d4cd064581d22cbd466b7d4ec3016947ab->leave($__internal_d6e009d1017a57631a6bcc4427d542d4cd064581d22cbd466b7d4ec3016947ab_prof);

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
            $__internal_b3d4cc761b3311a0fd9e45c659c79b96b58d74e1cc9fe02161115d355d837fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b3d4cc761b3311a0fd9e45c659c79b96b58d74e1cc9fe02161115d355d837fdf->enter($__internal_b3d4cc761b3311a0fd9e45c659c79b96b58d74e1cc9fe02161115d355d837fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

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
            
            $__internal_b3d4cc761b3311a0fd9e45c659c79b96b58d74e1cc9fe02161115d355d837fdf->leave($__internal_b3d4cc761b3311a0fd9e45c659c79b96b58d74e1cc9fe02161115d355d837fdf_prof);

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
            $__internal_cf1359d63fcf1682ee47f3236b21d7d2b4e3028bfeb83b87ee7427a8626777c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cf1359d63fcf1682ee47f3236b21d7d2b4e3028bfeb83b87ee7427a8626777c1->enter($__internal_cf1359d63fcf1682ee47f3236b21d7d2b4e3028bfeb83b87ee7427a8626777c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

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
            
            $__internal_cf1359d63fcf1682ee47f3236b21d7d2b4e3028bfeb83b87ee7427a8626777c1->leave($__internal_cf1359d63fcf1682ee47f3236b21d7d2b4e3028bfeb83b87ee7427a8626777c1_prof);

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
            $__internal_d0ef70b6c455b4528dc6bd345573646c09cf82cd7a24601febd8b208c695b737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d0ef70b6c455b4528dc6bd345573646c09cf82cd7a24601febd8b208c695b737->enter($__internal_d0ef70b6c455b4528dc6bd345573646c09cf82cd7a24601febd8b208c695b737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 40
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\" class=\" ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 42
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 43
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 44
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 45
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 47
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 48
                echo "            </a>

            ";
                // line 50
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 51
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 53
                        echo "                        <li class=\"";
                        echo (($this->getAttribute($context["child"], "isActive", array())) ? ("active") : (""));
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "identifier", array()), "html", null, true);
                        echo "\">
                            <a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, ((twig_in_filter("/", $this->getAttribute($context["child"], "route", array()))) ? ($this->getAttribute($context["child"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["child"], "route", array()), $this->getAttribute($context["child"], "routeArgs", array())))), "html", null, true);
                        echo "\">
                                <i class=\"";
                        // line 55
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "icon", array()), "fa fa-circle-o")) : ("fa fa-circle-o")), "html", null, true);
                        echo "\"></i>
                                ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                </ul>
            ";
                }
                // line 62
                echo "        </li>
    ";
            } else {
                // line 64
                echo "        <li class=\"header\">
            ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 66
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 67
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 69
                echo "        </li>
    ";
            }
            
            $__internal_d0ef70b6c455b4528dc6bd345573646c09cf82cd7a24601febd8b208c695b737->leave($__internal_d0ef70b6c455b4528dc6bd345573646c09cf82cd7a24601febd8b208c695b737_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
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
            $__internal_d623f58dfe3e3a5b2540151f0b8763e19529bfa15fd788062aba6fbe0583352e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d623f58dfe3e3a5b2540151f0b8763e19529bfa15fd788062aba6fbe0583352e->enter($__internal_d623f58dfe3e3a5b2540151f0b8763e19529bfa15fd788062aba6fbe0583352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash"));

            // line 78
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
            // line 79
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 80
                echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            }
            // line 82
            echo "        ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 83
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
        ";
            } else {
                // line 85
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
        ";
            }
            // line 87
            echo "    </div>
";
            
            $__internal_d623f58dfe3e3a5b2540151f0b8763e19529bfa15fd788062aba6fbe0583352e->leave($__internal_d623f58dfe3e3a5b2540151f0b8763e19529bfa15fd788062aba6fbe0583352e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 90
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
            $__internal_cb6a138a0299df3520d209bb1a57825167e9ba21c4e6177d8bb8e6df4fb70dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cb6a138a0299df3520d209bb1a57825167e9ba21c4e6177d8bb8e6df4fb70dfe->enter($__internal_cb6a138a0299df3520d209bb1a57825167e9ba21c4e6177d8bb8e6df4fb70dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "session_flash"));

            // line 91
            echo "    ";
            $context["flash_messages"] = $this;
            // line 92
            echo "
    ";
            // line 93
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
                // line 94
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 95
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 96
                        echo "                ";
                        if (($context["type"] == "fos_user_success")) {
                            // line 97
                            echo "                    ";
                            $context["type"] = "success";
                            // line 98
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 99
                            echo "                ";
                        }
                        // line 100
                        echo "                ";
                        echo $context["flash_messages"]->getflash($context["type"], $context["message"], (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "    ";
            }
            
            $__internal_cb6a138a0299df3520d209bb1a57825167e9ba21c4e6177d8bb8e6df4fb70dfe->leave($__internal_cb6a138a0299df3520d209bb1a57825167e9ba21c4e6177d8bb8e6df4fb70dfe_prof);

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
        return "@AvanzuAdminTheme/layout/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 103,  496 => 102,  487 => 100,  484 => 99,  481 => 98,  478 => 97,  475 => 96,  470 => 95,  465 => 94,  463 => 93,  460 => 92,  457 => 91,  439 => 90,  420 => 87,  414 => 85,  408 => 83,  405 => 82,  401 => 80,  399 => 79,  388 => 78,  368 => 77,  348 => 69,  340 => 67,  338 => 66,  334 => 65,  331 => 64,  327 => 62,  323 => 60,  313 => 56,  309 => 55,  305 => 54,  298 => 53,  294 => 52,  291 => 51,  289 => 50,  285 => 48,  280 => 47,  272 => 45,  270 => 44,  265 => 43,  259 => 42,  255 => 41,  246 => 40,  243 => 39,  228 => 38,  202 => 34,  192 => 32,  189 => 31,  172 => 30,  151 => 25,  147 => 24,  143 => 22,  125 => 21,  116 => 17,  110 => 15,  107 => 14,  101 => 12,  99 => 11,  96 => 10,  93 => 9,  87 => 8,  77 => 5,  71 => 4,  61 => 2,  55 => 1,  47 => 89,  44 => 72,  41 => 37,  37 => 28,  34 => 20,  32 => 8,  29 => 7,  27 => 4,  25 => 1,);
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
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
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
                        <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                            <a href=\"{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}\">
                                <i class=\"{{ child.icon|default('fa fa-circle-o') }}\"></i>
                                {{ child.label }}
                            </a>
                        </li>
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
", "@AvanzuAdminTheme/layout/macros.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\layout\\macros.html.twig");
    }
}

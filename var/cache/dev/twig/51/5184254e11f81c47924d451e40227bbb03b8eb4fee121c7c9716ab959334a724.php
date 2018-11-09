<?php

/* @AvanzuAdminTheme/layout/base-layout.html.twig */
class __TwigTemplate_61934bbce57e647130bac266afa8bf1cd5007eb1ab743168fd54a682c8b77e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d17236cf0e5044b8a5cf915d2b9fec6aa83715213d05a0237170c70e79def48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17236cf0e5044b8a5cf915d2b9fec6aa83715213d05a0237170c70e79def48e->enter($__internal_d17236cf0e5044b8a5cf915d2b9fec6aa83715213d05a0237170c70e79def48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/layout/base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    <div class=\"wrapper\">

    ";
        // line 36
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 65
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 70
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 77
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 86
        $this->displayBlock('page_title', $context, $blocks);
        // line 87
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 89
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 92
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 96
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 105
        echo "                ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 106
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 111
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 119
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 133
        echo "</body>
</html>
";
        
        $__internal_d17236cf0e5044b8a5cf915d2b9fec6aa83715213d05a0237170c70e79def48e->leave($__internal_d17236cf0e5044b8a5cf915d2b9fec6aa83715213d05a0237170c70e79def48e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_722c18eda1d698f7bdc0c588652d822f54fc6150c5a170613a428f84ccd32bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722c18eda1d698f7bdc0c588652d822f54fc6150c5a170613a428f84ccd32bb1->enter($__internal_722c18eda1d698f7bdc0c588652d822f54fc6150c5a170613a428f84ccd32bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_722c18eda1d698f7bdc0c588652d822f54fc6150c5a170613a428f84ccd32bb1->leave($__internal_722c18eda1d698f7bdc0c588652d822f54fc6150c5a170613a428f84ccd32bb1_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53269fb219aa9ae4eb5343afd0cae1d97f6844dde2dba5f100acea8a5563cb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53269fb219aa9ae4eb5343afd0cae1d97f6844dde2dba5f100acea8a5563cb8c->enter($__internal_53269fb219aa9ae4eb5343afd0cae1d97f6844dde2dba5f100acea8a5563cb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_53269fb219aa9ae4eb5343afd0cae1d97f6844dde2dba5f100acea8a5563cb8c->leave($__internal_53269fb219aa9ae4eb5343afd0cae1d97f6844dde2dba5f100acea8a5563cb8c_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_706ccd1b9fe38841a9443c09c0864fea920e32b297a23745131ae5bc3a6428b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706ccd1b9fe38841a9443c09c0864fea920e32b297a23745131ae5bc3a6428b2->enter($__internal_706ccd1b9fe38841a9443c09c0864fea920e32b297a23745131ae5bc3a6428b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_706ccd1b9fe38841a9443c09c0864fea920e32b297a23745131ae5bc3a6428b2->leave($__internal_706ccd1b9fe38841a9443c09c0864fea920e32b297a23745131ae5bc3a6428b2_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_5133c7fe34c93547071f541a0bd526c9eddaa724847e01613ebe4c823d11eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5133c7fe34c93547071f541a0bd526c9eddaa724847e01613ebe4c823d11eabc->enter($__internal_5133c7fe34c93547071f541a0bd526c9eddaa724847e01613ebe4c823d11eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 50
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 51
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 53
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 59
            echo "                        </ul>
                    </div>
                ";
        }
        // line 62
        echo "            </nav>
        </header>
    ";
        
        $__internal_5133c7fe34c93547071f541a0bd526c9eddaa724847e01613ebe4c823d11eabc->leave($__internal_5133c7fe34c93547071f541a0bd526c9eddaa724847e01613ebe4c823d11eabc_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_1a0feaf7f9b5d0624382600f9666985e78e61e18f72373b681233ef9b96a54b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0feaf7f9b5d0624382600f9666985e78e61e18f72373b681233ef9b96a54b8->enter($__internal_1a0feaf7f9b5d0624382600f9666985e78e61e18f72373b681233ef9b96a54b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 41
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_1a0feaf7f9b5d0624382600f9666985e78e61e18f72373b681233ef9b96a54b8->leave($__internal_1a0feaf7f9b5d0624382600f9666985e78e61e18f72373b681233ef9b96a54b8_prof);

    }

    // line 53
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_712d8bcd4976e94d6968cceca830b6a88f9ba90b9b18b444292863e6e7275605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712d8bcd4976e94d6968cceca830b6a88f9ba90b9b18b444292863e6e7275605->enter($__internal_712d8bcd4976e94d6968cceca830b6a88f9ba90b9b18b444292863e6e7275605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 54
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_712d8bcd4976e94d6968cceca830b6a88f9ba90b9b18b444292863e6e7275605->leave($__internal_712d8bcd4976e94d6968cceca830b6a88f9ba90b9b18b444292863e6e7275605_prof);

    }

    // line 70
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_6d2eaec0f0a7edfc5a39cb6f20020175c9a8688b6112d7f11021edeeb4f40098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2eaec0f0a7edfc5a39cb6f20020175c9a8688b6112d7f11021edeeb4f40098->enter($__internal_6d2eaec0f0a7edfc5a39cb6f20020175c9a8688b6112d7f11021edeeb4f40098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 71
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 72
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                    ";
        }
        // line 75
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_6d2eaec0f0a7edfc5a39cb6f20020175c9a8688b6112d7f11021edeeb4f40098->leave($__internal_6d2eaec0f0a7edfc5a39cb6f20020175c9a8688b6112d7f11021edeeb4f40098_prof);

    }

    // line 86
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_eae8d4faed08448bf12d201cc05bb69a8b8ca0fffdaa7ff06fb03ce3e85beb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae8d4faed08448bf12d201cc05bb69a8b8ca0fffdaa7ff06fb03ce3e85beb1d->enter($__internal_eae8d4faed08448bf12d201cc05bb69a8b8ca0fffdaa7ff06fb03ce3e85beb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_eae8d4faed08448bf12d201cc05bb69a8b8ca0fffdaa7ff06fb03ce3e85beb1d->leave($__internal_eae8d4faed08448bf12d201cc05bb69a8b8ca0fffdaa7ff06fb03ce3e85beb1d_prof);

    }

    // line 87
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b401d27bbd93bc545441d0b280cd4b75a4298e42580684497988a3a603a71e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b401d27bbd93bc545441d0b280cd4b75a4298e42580684497988a3a603a71e1b->enter($__internal_b401d27bbd93bc545441d0b280cd4b75a4298e42580684497988a3a603a71e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_b401d27bbd93bc545441d0b280cd4b75a4298e42580684497988a3a603a71e1b->leave($__internal_b401d27bbd93bc545441d0b280cd4b75a4298e42580684497988a3a603a71e1b_prof);

    }

    // line 89
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_6b2b83f9707130c9c88094579eed77ab2aafa6562551eba9e086c642420d57f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2b83f9707130c9c88094579eed77ab2aafa6562551eba9e086c642420d57f4->enter($__internal_6b2b83f9707130c9c88094579eed77ab2aafa6562551eba9e086c642420d57f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 90
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_6b2b83f9707130c9c88094579eed77ab2aafa6562551eba9e086c642420d57f4->leave($__internal_6b2b83f9707130c9c88094579eed77ab2aafa6562551eba9e086c642420d57f4_prof);

    }

    // line 96
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_3094834cfdf1f8e2f5403faba46d00a49d9f70ed8d422a29d0b371e2d10b31f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3094834cfdf1f8e2f5403faba46d00a49d9f70ed8d422a29d0b371e2d10b31f3->enter($__internal_3094834cfdf1f8e2f5403faba46d00a49d9f70ed8d422a29d0b371e2d10b31f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 97
        echo "                    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 98
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                ";
            // line 100
            echo $context["macro"]->getsession_flash(((array_key_exists("avanzu_adminlte_close_alert", $context)) ? (_twig_default_filter((isset($context["avanzu_adminlte_close_alert"]) ? $context["avanzu_adminlte_close_alert"] : $this->getContext($context, "avanzu_adminlte_close_alert")), false)) : (false)));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 104
        echo "                ";
        
        $__internal_3094834cfdf1f8e2f5403faba46d00a49d9f70ed8d422a29d0b371e2d10b31f3->leave($__internal_3094834cfdf1f8e2f5403faba46d00a49d9f70ed8d422a29d0b371e2d10b31f3_prof);

    }

    // line 105
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ce8bf64e2498d07073ad8e671cc937363ee175786b04d953f39a1b9195cab831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8bf64e2498d07073ad8e671cc937363ee175786b04d953f39a1b9195cab831->enter($__internal_ce8bf64e2498d07073ad8e671cc937363ee175786b04d953f39a1b9195cab831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_ce8bf64e2498d07073ad8e671cc937363ee175786b04d953f39a1b9195cab831->leave($__internal_ce8bf64e2498d07073ad8e671cc937363ee175786b04d953f39a1b9195cab831_prof);

    }

    // line 111
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_d8d2b1094ecd89b3d445de0dca5f5ab4ceff611a13500d4c1955420e73d354c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d2b1094ecd89b3d445de0dca5f5ab4ceff611a13500d4c1955420e73d354c7->enter($__internal_d8d2b1094ecd89b3d445de0dca5f5ab4ceff611a13500d4c1955420e73d354c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 112
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_d8d2b1094ecd89b3d445de0dca5f5ab4ceff611a13500d4c1955420e73d354c7->leave($__internal_d8d2b1094ecd89b3d445de0dca5f5ab4ceff611a13500d4c1955420e73d354c7_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48b251d9fb59a327f942bf411b651fc061ddd35cf69a6de5246c5175486f1a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b251d9fb59a327f942bf411b651fc061ddd35cf69a6de5246c5175486f1a65->enter($__internal_48b251d9fb59a327f942bf411b651fc061ddd35cf69a6de5246c5175486f1a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_48b251d9fb59a327f942bf411b651fc061ddd35cf69a6de5246c5175486f1a65->leave($__internal_48b251d9fb59a327f942bf411b651fc061ddd35cf69a6de5246c5175486f1a65_prof);

    }

    // line 131
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_4a1a2f09a537ef1cfc729bd384de3adf8c67be48ba4d0e9d2c650ebdad4ab5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1a2f09a537ef1cfc729bd384de3adf8c67be48ba4d0e9d2c650ebdad4ab5b4->enter($__internal_4a1a2f09a537ef1cfc729bd384de3adf8c67be48ba4d0e9d2c650ebdad4ab5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_4a1a2f09a537ef1cfc729bd384de3adf8c67be48ba4d0e9d2c650ebdad4ab5b4->leave($__internal_4a1a2f09a537ef1cfc729bd384de3adf8c67be48ba4d0e9d2c650ebdad4ab5b4_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 131,  428 => 126,  425 => 125,  419 => 124,  406 => 112,  400 => 111,  389 => 105,  382 => 104,  375 => 100,  371 => 98,  368 => 97,  362 => 96,  352 => 90,  346 => 89,  334 => 87,  322 => 86,  312 => 75,  307 => 73,  302 => 72,  299 => 71,  293 => 70,  284 => 57,  280 => 56,  276 => 55,  271 => 54,  265 => 53,  255 => 41,  251 => 39,  245 => 38,  236 => 62,  231 => 59,  229 => 53,  225 => 51,  223 => 50,  215 => 44,  213 => 38,  210 => 37,  204 => 36,  190 => 25,  184 => 24,  174 => 17,  168 => 16,  156 => 13,  147 => 133,  145 => 131,  142 => 129,  140 => 124,  134 => 119,  132 => 111,  125 => 106,  122 => 105,  120 => 96,  114 => 92,  112 => 89,  106 => 87,  104 => 86,  93 => 77,  91 => 70,  84 => 65,  82 => 36,  76 => 33,  72 => 31,  69 => 24,  64 => 21,  60 => 19,  57 => 16,  52 => 13,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
    <div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    {{ block('title') }}
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                {% block avanzu_sidebar %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                    {% endif %}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                {% endblock %}
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    {% block page_title %}Blank page{% endblock %}
                    <small>{% block page_subtitle %}Control panel{% endblock %}</small>
                </h1>
                {% block avanzu_breadcrumb %}
                    {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                {% endblock %}
            </section>

            <!-- Main content -->
            <section class=\"content\">
                {% block flash_messages %}
                    {% if app.session.flashbag.peekAll|length > 0 %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                {{ macro.session_flash(avanzu_adminlte_close_alert|default(false)) }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock flash_messages %}
                {% block page_content %}{% endblock %}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    {% endblock %}

    </div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "@AvanzuAdminTheme/layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\layout\\base-layout.html.twig");
    }
}

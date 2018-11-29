<?php

/* webSite/bares.html.twig */
class __TwigTemplate_a998d8ecfc840b56d14885464ac355603d11829781b4464a171847ee57e1e50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "webSite/bares.html.twig", 1);
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
        $__internal_0ee517622571502ca5502a0201057f6e571cd9af40ee3d5611487b35a54a76bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee517622571502ca5502a0201057f6e571cd9af40ee3d5611487b35a54a76bc->enter($__internal_0ee517622571502ca5502a0201057f6e571cd9af40ee3d5611487b35a54a76bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webSite/bares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee517622571502ca5502a0201057f6e571cd9af40ee3d5611487b35a54a76bc->leave($__internal_0ee517622571502ca5502a0201057f6e571cd9af40ee3d5611487b35a54a76bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5baa3bb3313aa8fc4cad56e76113b3b977097b238e6d7621ee786f8796eff1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baa3bb3313aa8fc4cad56e76113b3b977097b238e6d7621ee786f8796eff1c4->enter($__internal_5baa3bb3313aa8fc4cad56e76113b3b977097b238e6d7621ee786f8796eff1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"content\">
      <div class=\"row\"  style=\"width:90%; margin-left:5%; margin-top:2%\">
       
        <!-- /.col -->
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body no-padding\">
              <!-- THE CALENDAR -->
              <div id=\"calendar\" class=\"fc fc-unthemed fc-ltr\">
                <div class=\"fc-toolbar fc-header-toolbar\">
                  <div class=\"fc-left\">
                    <div class=\"fc-button-group\">
                      <button type=\"button\" class=\"fc-prev-button fc-button fc-state-default fc-corner-left\" aria-label=\"prev\"><span class=\"fc-icon fc-icon-left-single-arrow\">
                        
                      </span>
                      </button>
                      <button type=\"button\" class=\"fc-next-button fc-button fc-state-default fc-corner-right\" aria-label=\"next\"><span class=\"fc-icon fc-icon-right-single-arrow\"></span></button></div><button type=\"button\" class=\"fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled\" disabled=\"\">
                        today
                        </button>
                        </div>
                        <div class=\"fc-right\">
                        <div class=\"fc-button-group\">
                      <button type=\"button\" class=\"fc-month-button fc-button fc-state-default fc-corner-left fc-state-active\">
                        month
                        </button><button type=\"button\" class=\"fc-agendaWeek-button fc-button fc-state-default\">
                      week
                      </button><button type=\"button\" class=\"fc-agendaDay-button fc-button fc-state-default fc-corner-right\">
                      day</button>
                      </div>
                      </div>
                      <div class=\"fc-center\"><h2>November 2018</h2></div>
                      <div class=\"fc-clear\"></div></div><div class=\"fc-view-container\" style=\"\">
                      <div class=\"fc-view fc-month-view fc-basic-view\" style=\"\">
                      <table class=\"\">
                        <thead class=\"fc-head\">
                        <tr>
                          <td class=\"fc-head-container fc-widget-header\">
                            <div class=\"fc-row fc-widget-header\">
                              <table class=\"\">
                                <thead>
                                  <tr>
                                    <th class=\"fc-day-header fc-widget-header fc-sun\">
                                      <span>Sun</span></th><th class=\"fc-day-header fc-widget-header fc-mon\">
                                      <span>Mon</span></th><th class=\"fc-day-header fc-widget-header fc-tue\">
                                      <span>Tue</span></th><th class=\"fc-day-header fc-widget-header fc-wed\">
                                      <span>Wed</span></th><th class=\"fc-day-header fc-widget-header fc-thu\">
                                      <span>Thu</span></th><th class=\"fc-day-header fc-widget-header fc-fri\">
                                      <span>Fri</span></th><th class=\"fc-day-header fc-widget-header fc-sat\">
                                      <span>Sat</span></th></tr></thead></table></div></td></tr></thead>
                                      <tbody class=\"fc-body\"><tr><td class=\"fc-widget-content\"><div class=\"fc-scroller fc-day-grid-container\" style=\"overflow: hidden; height: 377px;\">
                                        <div class=\"fc-day-grid fc-unselectable\"><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\">
                                          <table class=\"\">
                                            <tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-past\" data-date=\"2018-10-28\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-past\" data-date=\"2018-10-29\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-past\" data-date=\"2018-10-30\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-past\" data-date=\"2018-10-31\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-01\"></td>
                                            <td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-02\"></td>
                                            <td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2018-11-03\">
                                              
                                            </td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-other-month fc-past\" data-date=\"2018-10-28\"><span class=\"fc-day-number\">28</span></td><td class=\"fc-day-top fc-mon fc-other-month fc-past\" data-date=\"2018-10-29\"><span class=\"fc-day-number\">29</span></td><td class=\"fc-day-top fc-tue fc-other-month fc-past\" data-date=\"2018-10-30\"><span class=\"fc-day-number\">30</span></td><td class=\"fc-day-top fc-wed fc-other-month fc-past\" data-date=\"2018-10-31\"><span class=\"fc-day-number\">31</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-01\"><span class=\"fc-day-number\">1</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-02\"><span class=\"fc-day-number\">2</span></td><td class=\"fc-day-top fc-sat fc-past\" data-date=\"2018-11-03\"><span class=\"fc-day-number\">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#f56954;border-color:#f56954\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">All Day Event</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2018-11-04\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2018-11-05\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2018-11-06\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2018-11-07\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-08\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-09\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2018-11-10\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-past\" data-date=\"2018-11-04\"><span class=\"fc-day-number\">4</span></td><td class=\"fc-day-top fc-mon fc-past\" data-date=\"2018-11-05\"><span class=\"fc-day-number\">5</span></td><td class=\"fc-day-top fc-tue fc-past\" data-date=\"2018-11-06\"><span class=\"fc-day-number\">6</span></td><td class=\"fc-day-top fc-wed fc-past\" data-date=\"2018-11-07\"><span class=\"fc-day-number\">7</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-08\"><span class=\"fc-day-number\">8</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-09\"><span class=\"fc-day-number\">9</span></td><td class=\"fc-day-top fc-sat fc-past\" data-date=\"2018-11-10\"><span class=\"fc-day-number\">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2018-11-11\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2018-11-12\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2018-11-13\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2018-11-14\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-15\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-16\"></td><td class=\"fc-day fc-widget-content fc-sat fc-today \" data-date=\"2018-11-17\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-past\" data-date=\"2018-11-11\"><span class=\"fc-day-number\">11</span></td><td class=\"fc-day-top fc-mon fc-past\" data-date=\"2018-11-12\"><span class=\"fc-day-number\">12</span></td><td class=\"fc-day-top fc-tue fc-past\" data-date=\"2018-11-13\"><span class=\"fc-day-number\">13</span></td><td class=\"fc-day-top fc-wed fc-past\" data-date=\"2018-11-14\"><span class=\"fc-day-number\">14</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-15\"><span class=\"fc-day-number\">15</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-16\"><span class=\"fc-day-number\">16</span></td><td class=\"fc-day-top fc-sat fc-today \" data-date=\"2018-11-17\"><span class=\"fc-day-number\">17</span></td></tr></thead><tbody><tr><td rowspan=\"2\"></td><td class=\"fc-event-container\" colspan=\"3\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#f39c12;border-color:#f39c12\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">Long Event</span></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#0073b7;border-color:#0073b7\"><div class=\"fc-content\"><span class=\"fc-time\">10:30a</span> <span class=\"fc-title\">Meeting</span></div></a></td></tr><tr><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#00c0ef;border-color:#00c0ef\"><div class=\"fc-content\"><span class=\"fc-time\">12p</span> <span class=\"fc-title\">Lunch</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2018-11-18\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2018-11-19\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2018-11-20\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2018-11-21\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2018-11-22\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2018-11-23\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2018-11-24\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-future\" data-date=\"2018-11-18\"><span class=\"fc-day-number\">18</span></td><td class=\"fc-day-top fc-mon fc-future\" data-date=\"2018-11-19\"><span class=\"fc-day-number\">19</span></td><td class=\"fc-day-top fc-tue fc-future\" data-date=\"2018-11-20\"><span class=\"fc-day-number\">20</span></td><td class=\"fc-day-top fc-wed fc-future\" data-date=\"2018-11-21\"><span class=\"fc-day-number\">21</span></td><td class=\"fc-day-top fc-thu fc-future\" data-date=\"2018-11-22\"><span class=\"fc-day-number\">22</span></td><td class=\"fc-day-top fc-fri fc-future\" data-date=\"2018-11-23\"><span class=\"fc-day-number\">23</span></td><td class=\"fc-day-top fc-sat fc-future\" data-date=\"2018-11-24\"><span class=\"fc-day-number\">24</span></td></tr></thead><tbody><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#00a65a;border-color:#00a65a\"><div class=\"fc-content\"><span class=\"fc-time\">7p</span> <span class=\"fc-title\">Birthday Party</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2018-11-25\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2018-11-26\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2018-11-27\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2018-11-28\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2018-11-29\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2018-11-30\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2018-12-01\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-future\" data-date=\"2018-11-25\"><span class=\"fc-day-number\">25</span></td><td class=\"fc-day-top fc-mon fc-future\" data-date=\"2018-11-26\"><span class=\"fc-day-number\">26</span></td><td class=\"fc-day-top fc-tue fc-future\" data-date=\"2018-11-27\"><span class=\"fc-day-number\">27</span></td><td class=\"fc-day-top fc-wed fc-future\" data-date=\"2018-11-28\"><span class=\"fc-day-number\">28</span></td><td class=\"fc-day-top fc-thu fc-future\" data-date=\"2018-11-29\"><span class=\"fc-day-number\">29</span></td><td class=\"fc-day-top fc-fri fc-future\" data-date=\"2018-11-30\"><span class=\"fc-day-number\">30</span></td><td class=\"fc-day-top fc-sat fc-other-month fc-future\" data-date=\"2018-12-01\"><span class=\"fc-day-number\">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" href=\"http://google.com/\" style=\"background-color:#3c8dbc;border-color:#3c8dbc\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">Click for Google</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-future\" data-date=\"2018-12-02\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-future\" data-date=\"2018-12-03\"></td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-future\" data-date=\"2018-12-04\"></td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-future\" data-date=\"2018-12-05\"></td><td class=\"fc-day fc-widget-content fc-thu fc-other-month fc-future\" data-date=\"2018-12-06\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2018-12-07\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2018-12-08\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-other-month fc-future\" data-date=\"2018-12-02\"><span class=\"fc-day-number\">2</span></td><td class=\"fc-day-top fc-mon fc-other-month fc-future\" data-date=\"2018-12-03\"><span class=\"fc-day-number\">3</span></td><td class=\"fc-day-top fc-tue fc-other-month fc-future\" data-date=\"2018-12-04\"><span class=\"fc-day-number\">4</span></td><td class=\"fc-day-top fc-wed fc-other-month fc-future\" data-date=\"2018-12-05\"><span class=\"fc-day-number\">5</span></td><td class=\"fc-day-top fc-thu fc-other-month fc-future\" data-date=\"2018-12-06\"><span class=\"fc-day-number\">6</span></td><td class=\"fc-day-top fc-fri fc-other-month fc-future\" data-date=\"2018-12-07\"><span class=\"fc-day-number\">7</span></td><td class=\"fc-day-top fc-sat fc-other-month fc-future\" data-date=\"2018-12-08\"><span class=\"fc-day-number\">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    <div>
      <div class=\"row docs-premium-template\">


            </div>
</div>
<div style=\"padding-bottom: 15px; max-width: 100%; overflow: hidden;\">
  <script src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
  <ins class=\"adsbygoogle\" style=\"display: block; height: 90px;\" data-ad-client=\"ca-pub-6272584992356792\" data-ad-slot=\"5657143564\" data-ad-format=\"auto\" data-full-width-responsive=\"true\" data-adsbygoogle-status=\"done\"><ins id=\"aswift_0_expand\" style=\"display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1003px;background-color:transparent;\">
    <ins id=\"aswift_0_anchor\" style=\"display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1003px;background-color:transparent;\">
      <iframe width=\"1003\" height=\"90\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" onload=\"var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}\" id=\"aswift_0\" name=\"aswift_0\" style=\"left:0;position:absolute;top:0;width:1003px;height:90px;\"></iframe></ins></ins></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      </div>
      </section>
";
        
        $__internal_5baa3bb3313aa8fc4cad56e76113b3b977097b238e6d7621ee786f8796eff1c4->leave($__internal_5baa3bb3313aa8fc4cad56e76113b3b977097b238e6d7621ee786f8796eff1c4_prof);

    }

    public function getTemplateName()
    {
        return "webSite/bares.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

<section class=\"content\">
      <div class=\"row\"  style=\"width:90%; margin-left:5%; margin-top:2%\">
       
        <!-- /.col -->
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body no-padding\">
              <!-- THE CALENDAR -->
              <div id=\"calendar\" class=\"fc fc-unthemed fc-ltr\">
                <div class=\"fc-toolbar fc-header-toolbar\">
                  <div class=\"fc-left\">
                    <div class=\"fc-button-group\">
                      <button type=\"button\" class=\"fc-prev-button fc-button fc-state-default fc-corner-left\" aria-label=\"prev\"><span class=\"fc-icon fc-icon-left-single-arrow\">
                        
                      </span>
                      </button>
                      <button type=\"button\" class=\"fc-next-button fc-button fc-state-default fc-corner-right\" aria-label=\"next\"><span class=\"fc-icon fc-icon-right-single-arrow\"></span></button></div><button type=\"button\" class=\"fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled\" disabled=\"\">
                        today
                        </button>
                        </div>
                        <div class=\"fc-right\">
                        <div class=\"fc-button-group\">
                      <button type=\"button\" class=\"fc-month-button fc-button fc-state-default fc-corner-left fc-state-active\">
                        month
                        </button><button type=\"button\" class=\"fc-agendaWeek-button fc-button fc-state-default\">
                      week
                      </button><button type=\"button\" class=\"fc-agendaDay-button fc-button fc-state-default fc-corner-right\">
                      day</button>
                      </div>
                      </div>
                      <div class=\"fc-center\"><h2>November 2018</h2></div>
                      <div class=\"fc-clear\"></div></div><div class=\"fc-view-container\" style=\"\">
                      <div class=\"fc-view fc-month-view fc-basic-view\" style=\"\">
                      <table class=\"\">
                        <thead class=\"fc-head\">
                        <tr>
                          <td class=\"fc-head-container fc-widget-header\">
                            <div class=\"fc-row fc-widget-header\">
                              <table class=\"\">
                                <thead>
                                  <tr>
                                    <th class=\"fc-day-header fc-widget-header fc-sun\">
                                      <span>Sun</span></th><th class=\"fc-day-header fc-widget-header fc-mon\">
                                      <span>Mon</span></th><th class=\"fc-day-header fc-widget-header fc-tue\">
                                      <span>Tue</span></th><th class=\"fc-day-header fc-widget-header fc-wed\">
                                      <span>Wed</span></th><th class=\"fc-day-header fc-widget-header fc-thu\">
                                      <span>Thu</span></th><th class=\"fc-day-header fc-widget-header fc-fri\">
                                      <span>Fri</span></th><th class=\"fc-day-header fc-widget-header fc-sat\">
                                      <span>Sat</span></th></tr></thead></table></div></td></tr></thead>
                                      <tbody class=\"fc-body\"><tr><td class=\"fc-widget-content\"><div class=\"fc-scroller fc-day-grid-container\" style=\"overflow: hidden; height: 377px;\">
                                        <div class=\"fc-day-grid fc-unselectable\"><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\">
                                          <table class=\"\">
                                            <tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-past\" data-date=\"2018-10-28\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-past\" data-date=\"2018-10-29\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-past\" data-date=\"2018-10-30\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-past\" data-date=\"2018-10-31\">
                                              
                                            </td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-01\"></td>
                                            <td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-02\"></td>
                                            <td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2018-11-03\">
                                              
                                            </td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-other-month fc-past\" data-date=\"2018-10-28\"><span class=\"fc-day-number\">28</span></td><td class=\"fc-day-top fc-mon fc-other-month fc-past\" data-date=\"2018-10-29\"><span class=\"fc-day-number\">29</span></td><td class=\"fc-day-top fc-tue fc-other-month fc-past\" data-date=\"2018-10-30\"><span class=\"fc-day-number\">30</span></td><td class=\"fc-day-top fc-wed fc-other-month fc-past\" data-date=\"2018-10-31\"><span class=\"fc-day-number\">31</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-01\"><span class=\"fc-day-number\">1</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-02\"><span class=\"fc-day-number\">2</span></td><td class=\"fc-day-top fc-sat fc-past\" data-date=\"2018-11-03\"><span class=\"fc-day-number\">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#f56954;border-color:#f56954\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">All Day Event</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2018-11-04\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2018-11-05\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2018-11-06\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2018-11-07\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-08\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-09\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2018-11-10\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-past\" data-date=\"2018-11-04\"><span class=\"fc-day-number\">4</span></td><td class=\"fc-day-top fc-mon fc-past\" data-date=\"2018-11-05\"><span class=\"fc-day-number\">5</span></td><td class=\"fc-day-top fc-tue fc-past\" data-date=\"2018-11-06\"><span class=\"fc-day-number\">6</span></td><td class=\"fc-day-top fc-wed fc-past\" data-date=\"2018-11-07\"><span class=\"fc-day-number\">7</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-08\"><span class=\"fc-day-number\">8</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-09\"><span class=\"fc-day-number\">9</span></td><td class=\"fc-day-top fc-sat fc-past\" data-date=\"2018-11-10\"><span class=\"fc-day-number\">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2018-11-11\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2018-11-12\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2018-11-13\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2018-11-14\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2018-11-15\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2018-11-16\"></td><td class=\"fc-day fc-widget-content fc-sat fc-today \" data-date=\"2018-11-17\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-past\" data-date=\"2018-11-11\"><span class=\"fc-day-number\">11</span></td><td class=\"fc-day-top fc-mon fc-past\" data-date=\"2018-11-12\"><span class=\"fc-day-number\">12</span></td><td class=\"fc-day-top fc-tue fc-past\" data-date=\"2018-11-13\"><span class=\"fc-day-number\">13</span></td><td class=\"fc-day-top fc-wed fc-past\" data-date=\"2018-11-14\"><span class=\"fc-day-number\">14</span></td><td class=\"fc-day-top fc-thu fc-past\" data-date=\"2018-11-15\"><span class=\"fc-day-number\">15</span></td><td class=\"fc-day-top fc-fri fc-past\" data-date=\"2018-11-16\"><span class=\"fc-day-number\">16</span></td><td class=\"fc-day-top fc-sat fc-today \" data-date=\"2018-11-17\"><span class=\"fc-day-number\">17</span></td></tr></thead><tbody><tr><td rowspan=\"2\"></td><td class=\"fc-event-container\" colspan=\"3\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#f39c12;border-color:#f39c12\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">Long Event</span></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#0073b7;border-color:#0073b7\"><div class=\"fc-content\"><span class=\"fc-time\">10:30a</span> <span class=\"fc-title\">Meeting</span></div></a></td></tr><tr><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#00c0ef;border-color:#00c0ef\"><div class=\"fc-content\"><span class=\"fc-time\">12p</span> <span class=\"fc-title\">Lunch</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2018-11-18\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2018-11-19\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2018-11-20\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2018-11-21\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2018-11-22\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2018-11-23\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2018-11-24\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-future\" data-date=\"2018-11-18\"><span class=\"fc-day-number\">18</span></td><td class=\"fc-day-top fc-mon fc-future\" data-date=\"2018-11-19\"><span class=\"fc-day-number\">19</span></td><td class=\"fc-day-top fc-tue fc-future\" data-date=\"2018-11-20\"><span class=\"fc-day-number\">20</span></td><td class=\"fc-day-top fc-wed fc-future\" data-date=\"2018-11-21\"><span class=\"fc-day-number\">21</span></td><td class=\"fc-day-top fc-thu fc-future\" data-date=\"2018-11-22\"><span class=\"fc-day-number\">22</span></td><td class=\"fc-day-top fc-fri fc-future\" data-date=\"2018-11-23\"><span class=\"fc-day-number\">23</span></td><td class=\"fc-day-top fc-sat fc-future\" data-date=\"2018-11-24\"><span class=\"fc-day-number\">24</span></td></tr></thead><tbody><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" style=\"background-color:#00a65a;border-color:#00a65a\"><div class=\"fc-content\"><span class=\"fc-time\">7p</span> <span class=\"fc-title\">Birthday Party</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2018-11-25\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2018-11-26\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2018-11-27\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2018-11-28\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2018-11-29\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2018-11-30\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2018-12-01\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-future\" data-date=\"2018-11-25\"><span class=\"fc-day-number\">25</span></td><td class=\"fc-day-top fc-mon fc-future\" data-date=\"2018-11-26\"><span class=\"fc-day-number\">26</span></td><td class=\"fc-day-top fc-tue fc-future\" data-date=\"2018-11-27\"><span class=\"fc-day-number\">27</span></td><td class=\"fc-day-top fc-wed fc-future\" data-date=\"2018-11-28\"><span class=\"fc-day-number\">28</span></td><td class=\"fc-day-top fc-thu fc-future\" data-date=\"2018-11-29\"><span class=\"fc-day-number\">29</span></td><td class=\"fc-day-top fc-fri fc-future\" data-date=\"2018-11-30\"><span class=\"fc-day-number\">30</span></td><td class=\"fc-day-top fc-sat fc-other-month fc-future\" data-date=\"2018-12-01\"><span class=\"fc-day-number\">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable\" href=\"http://google.com/\" style=\"background-color:#3c8dbc;border-color:#3c8dbc\"><div class=\"fc-content\"><span class=\"fc-time\">12a</span> <span class=\"fc-title\">Click for Google</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content\" style=\"height: 61px;\"><div class=\"fc-bg\"><table class=\"\"><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-future\" data-date=\"2018-12-02\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-future\" data-date=\"2018-12-03\"></td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-future\" data-date=\"2018-12-04\"></td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-future\" data-date=\"2018-12-05\"></td><td class=\"fc-day fc-widget-content fc-thu fc-other-month fc-future\" data-date=\"2018-12-06\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2018-12-07\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2018-12-08\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-top fc-sun fc-other-month fc-future\" data-date=\"2018-12-02\"><span class=\"fc-day-number\">2</span></td><td class=\"fc-day-top fc-mon fc-other-month fc-future\" data-date=\"2018-12-03\"><span class=\"fc-day-number\">3</span></td><td class=\"fc-day-top fc-tue fc-other-month fc-future\" data-date=\"2018-12-04\"><span class=\"fc-day-number\">4</span></td><td class=\"fc-day-top fc-wed fc-other-month fc-future\" data-date=\"2018-12-05\"><span class=\"fc-day-number\">5</span></td><td class=\"fc-day-top fc-thu fc-other-month fc-future\" data-date=\"2018-12-06\"><span class=\"fc-day-number\">6</span></td><td class=\"fc-day-top fc-fri fc-other-month fc-future\" data-date=\"2018-12-07\"><span class=\"fc-day-number\">7</span></td><td class=\"fc-day-top fc-sat fc-other-month fc-future\" data-date=\"2018-12-08\"><span class=\"fc-day-number\">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    <div>
      <div class=\"row docs-premium-template\">


            </div>
</div>
<div style=\"padding-bottom: 15px; max-width: 100%; overflow: hidden;\">
  <script src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
  <ins class=\"adsbygoogle\" style=\"display: block; height: 90px;\" data-ad-client=\"ca-pub-6272584992356792\" data-ad-slot=\"5657143564\" data-ad-format=\"auto\" data-full-width-responsive=\"true\" data-adsbygoogle-status=\"done\"><ins id=\"aswift_0_expand\" style=\"display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1003px;background-color:transparent;\">
    <ins id=\"aswift_0_anchor\" style=\"display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:1003px;background-color:transparent;\">
      <iframe width=\"1003\" height=\"90\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" onload=\"var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}\" id=\"aswift_0\" name=\"aswift_0\" style=\"left:0;position:absolute;top:0;width:1003px;height:90px;\"></iframe></ins></ins></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      </div>
      </section>
{% endblock %}
", "webSite/bares.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/bares.html.twig");
    }
}

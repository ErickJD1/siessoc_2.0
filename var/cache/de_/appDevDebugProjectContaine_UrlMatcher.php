<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContaine_UrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContaine_UrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ($pathinfo === '/user/adminUser') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                return array (  '_controller' => 'SalexUserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'SalexUserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'SalexUserBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'SalexUserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'SalexUserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/actividad')) {
            // actividad_index
            if (rtrim($pathinfo, '/') === '/actividad') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actividad_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ActividadController::indexAction',  '_route' => 'actividad_index',);
            }
            not_actividad_index:

            // actividad_new
            if ($pathinfo === '/actividad/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actividad_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ActividadController::newAction',  '_route' => 'actividad_new',);
            }
            not_actividad_new:

            // actividad_show
            if (preg_match('#^/actividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_show')), array (  '_controller' => 'AppBundle\\Controller\\ActividadController::showAction',));
            }
            not_actividad_show:

            // actividad_edit
            if (preg_match('#^/actividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actividad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_edit')), array (  '_controller' => 'AppBundle\\Controller\\ActividadController::editAction',));
            }
            not_actividad_edit:

            // actividad_delete
            if (preg_match('#^/actividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actividad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_delete')), array (  '_controller' => 'AppBundle\\Controller\\ActividadController::deleteAction',));
            }
            not_actividad_delete:

        }

        if (0 === strpos($pathinfo, '/b')) {
            if (0 === strpos($pathinfo, '/banco')) {
                // banco_index
                if (rtrim($pathinfo, '/') === '/banco') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banco_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'banco_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BancoController::indexAction',  '_route' => 'banco_index',);
                }
                not_banco_index:

                // banco_new
                if ($pathinfo === '/banco/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banco_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BancoController::newAction',  '_route' => 'banco_new',);
                }
                not_banco_new:

                // banco_show
                if (preg_match('#^/banco/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banco_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banco_show')), array (  '_controller' => 'AppBundle\\Controller\\BancoController::showAction',));
                }
                not_banco_show:

                // banco_edit
                if (preg_match('#^/banco/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banco_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banco_edit')), array (  '_controller' => 'AppBundle\\Controller\\BancoController::editAction',));
                }
                not_banco_edit:

                // banco_delete
                if (preg_match('#^/banco/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_banco_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banco_delete')), array (  '_controller' => 'AppBundle\\Controller\\BancoController::deleteAction',));
                }
                not_banco_delete:

            }

            if (0 === strpos($pathinfo, '/bitacora')) {
                // bitacora_index
                if (rtrim($pathinfo, '/') === '/bitacora') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bitacora_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bitacora_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BitacoraController::indexAction',  '_route' => 'bitacora_index',);
                }
                not_bitacora_index:

                // bitacora_new
                if ($pathinfo === '/bitacora/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bitacora_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\BitacoraController::newAction',  '_route' => 'bitacora_new',);
                }
                not_bitacora_new:

                // bitacora_show
                if (preg_match('#^/bitacora/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bitacora_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bitacora_show')), array (  '_controller' => 'AppBundle\\Controller\\BitacoraController::showAction',));
                }
                not_bitacora_show:

                // bitacora_edit
                if (preg_match('#^/bitacora/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bitacora_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bitacora_edit')), array (  '_controller' => 'AppBundle\\Controller\\BitacoraController::editAction',));
                }
                not_bitacora_edit:

                // bitacora_delete
                if (preg_match('#^/bitacora/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_bitacora_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bitacora_delete')), array (  '_controller' => 'AppBundle\\Controller\\BitacoraController::deleteAction',));
                }
                not_bitacora_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::indexAction',  '_route' => 'homepage',);
        }

        // admin_dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'admin_dashboard',);
        }

        if (0 === strpos($pathinfo, '/servicio_social')) {
            // servicio_social_index
            if (rtrim($pathinfo, '/') === '/servicio_social') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicio_social_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'servicio_social_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudssController::indexAction',  '_route' => 'servicio_social_index',);
            }
            not_servicio_social_index:

            // servicio_social_new
            if ($pathinfo === '/servicio_social/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_servicio_social_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SolicitudssController::newAction',  '_route' => 'servicio_social_new',);
            }
            not_servicio_social_new:

            // servicio_social_show
            if (preg_match('#^/servicio_social/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicio_social_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_social_show')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudssController::showAction',));
            }
            not_servicio_social_show:

            // servicio_social_edit
            if (preg_match('#^/servicio_social/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_servicio_social_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_social_edit')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudssController::editAction',));
            }
            not_servicio_social_edit:

            // servicio_social_delete
            if (preg_match('#^/servicio_social/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_servicio_social_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_social_delete')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudssController::deleteAction',));
            }
            not_servicio_social_delete:

        }

        if (0 === strpos($pathinfo, '/tipocuenta')) {
            // tipocuenta_index
            if (rtrim($pathinfo, '/') === '/tipocuenta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocuenta_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipocuenta_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::indexAction',  '_route' => 'tipocuenta_index',);
            }
            not_tipocuenta_index:

            // tipocuenta_new
            if ($pathinfo === '/tipocuenta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocuenta_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::newAction',  '_route' => 'tipocuenta_new',);
            }
            not_tipocuenta_new:

            // tipocuenta_show
            if (preg_match('#^/tipocuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocuenta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocuenta_show')), array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::showAction',));
            }
            not_tipocuenta_show:

            // tipocuenta_edit
            if (preg_match('#^/tipocuenta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocuenta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocuenta_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::editAction',));
            }
            not_tipocuenta_edit:

            // tipocuenta_delete
            if (preg_match('#^/tipocuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipocuenta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocuenta_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::deleteAction',));
            }
            not_tipocuenta_delete:

        }

        // web_index
        if (rtrim($pathinfo, '/') === '/webSite') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_web_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'web_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebSiteController::webAction',  '_route' => 'web_index',);
        }
        not_web_index:

        // avanzu_admin_home
        if (rtrim($pathinfo, '/') === '/demo-admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'avanzu_admin_home');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'avanzu_admin_home',);
        }

        // avanzu_admin_logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'avanzu_admin_logout');
        }

        if (0 === strpos($pathinfo, '/tasks')) {
            // avanzu_admin_all_tasks
            if (rtrim($pathinfo, '/') === '/tasks') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_all_tasks');
                }

                return array('_route' => 'avanzu_admin_all_tasks');
            }

            // avanzu_admin_show_task
            if (preg_match('#^/tasks/(?P<taskid>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_show_task');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_task')), array ());
            }

        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // avanzu_admin_all_notifications
            if (rtrim($pathinfo, '/') === '/notifications') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_all_notifications');
                }

                return array('_route' => 'avanzu_admin_all_notifications');
            }

            // avanzu_admin_show_notification
            if (preg_match('#^/notifications/(?P<notifyid>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_show_notification');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_notification')), array ());
            }

        }

        if (0 === strpos($pathinfo, '/messages')) {
            // avanzu_admin_all_messages
            if (rtrim($pathinfo, '/') === '/messages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_all_messages');
                }

                return array('_route' => 'avanzu_admin_all_messages');
            }

            // avanzu_admin_show_message
            if (preg_match('#^/messages/(?P<messageid>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_show_message');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_message')), array ());
            }

        }

        if (0 === strpos($pathinfo, '/demo-admin')) {
            // avanzu_admin_demo
            if (rtrim($pathinfo, '/') === '/demo-admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'avanzu_admin_demo',);
            }

            // avanzu_admin_form_demo
            if (rtrim($pathinfo, '/') === '/demo-admin/form-demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_form_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::formAction',  '_route' => 'avanzu_admin_form_demo',);
            }

            // avanzu_admin_login_demo
            if (rtrim($pathinfo, '/') === '/demo-admin/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_login_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::loginAction',  '_route' => 'avanzu_admin_login_demo',);
            }

            // avanzu_admin_dash_demo
            if (rtrim($pathinfo, '/') === '/demo-admin/dashboard') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_dash_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'avanzu_admin_dash_demo',);
            }

            if (0 === strpos($pathinfo, '/demo-admin/ui-elements')) {
                // avanzu_admin_ui_gen_demo
                if (rtrim($pathinfo, '/') === '/demo-admin/ui-elements/general') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_ui_gen_demo');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiGeneralAction',  '_route' => 'avanzu_admin_ui_gen_demo',);
                }

                // avanzu_admin_ui_icon_demo
                if (rtrim($pathinfo, '/') === '/demo-admin/ui-elements/icons') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_ui_icon_demo');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiIconsAction',  '_route' => 'avanzu_admin_ui_icon_demo',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'SalexUserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'SalexUserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'SalexUserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // avanzu_admin_profile
        if ($pathinfo === '/profile') {
            return array('_route' => 'avanzu_admin_profile');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

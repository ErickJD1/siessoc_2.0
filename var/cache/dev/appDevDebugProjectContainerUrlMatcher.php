<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/actividad/edit') && preg_match('#^/actividad/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/banco/edit') && preg_match('#^/banco/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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

        if (0 === strpos($pathinfo, '/cuenta')) {
            // cuenta_index
            if (rtrim($pathinfo, '/') === '/cuenta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cuenta_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cuenta_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CuentaController::indexAction',  '_route' => 'cuenta_index',);
            }
            not_cuenta_index:

            // cuenta_new
            if ($pathinfo === '/cuenta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cuenta_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CuentaController::newAction',  '_route' => 'cuenta_new',);
            }
            not_cuenta_new:

            // cuenta_show_delete
            if (preg_match('#^/cuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cuenta_show_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuenta_show_delete')), array (  '_controller' => 'AppBundle\\Controller\\CuentaController::showDeleteAction',));
            }
            not_cuenta_show_delete:

            // cuenta_show
            if (preg_match('#^/cuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cuenta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuenta_show')), array (  '_controller' => 'AppBundle\\Controller\\CuentaController::showAction',));
            }
            not_cuenta_show:

            // cuenta_edit
            if (0 === strpos($pathinfo, '/cuenta/edit') && preg_match('#^/cuenta/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cuenta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuenta_edit')), array (  '_controller' => 'AppBundle\\Controller\\CuentaController::editAction',));
            }
            not_cuenta_edit:

            // cuenta_delete
            if (preg_match('#^/cuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cuenta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuenta_delete')), array (  '_controller' => 'AppBundle\\Controller\\CuentaController::deleteAction',));
            }
            not_cuenta_delete:

        }

        // homepage
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::indexAction',  '_route' => 'homepage',);
        }

        // admin_dashboard
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'admin_dashboard',);
        }

        if (0 === strpos($pathinfo, '/movimiento')) {
            // movimiento_index
            if (rtrim($pathinfo, '/') === '/movimiento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movimiento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'movimiento_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::indexAction',  '_route' => 'movimiento_index',);
            }
            not_movimiento_index:

            // movimiento_new
            if ($pathinfo === '/movimiento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_movimiento_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::newAction',  '_route' => 'movimiento_new',);
            }
            not_movimiento_new:

            // movimiento_show
            if (preg_match('#^/movimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movimiento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimiento_show')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::showAction',));
            }
            not_movimiento_show:

            // movimiento_show_delete
            if (preg_match('#^/movimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movimiento_show_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimiento_show_delete')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::showDeleteAction',));
            }
            not_movimiento_show_delete:

            // movimiento_edit
            if (0 === strpos($pathinfo, '/movimiento/edit') && preg_match('#^/movimiento/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_movimiento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimiento_edit')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::editAction',));
            }
            not_movimiento_edit:

            // movimiento_delete
            if (preg_match('#^/movimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_movimiento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimiento_delete')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoController::deleteAction',));
            }
            not_movimiento_delete:

            if (0 === strpos($pathinfo, '/movimientoinventario')) {
                // movimientoinventario_index
                if (rtrim($pathinfo, '/') === '/movimientoinventario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_movimientoinventario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'movimientoinventario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MovimientoinventarioController::indexAction',  '_route' => 'movimientoinventario_index',);
                }
                not_movimientoinventario_index:

                // movimientoinventario_new
                if ($pathinfo === '/movimientoinventario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_movimientoinventario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MovimientoinventarioController::newAction',  '_route' => 'movimientoinventario_new',);
                }
                not_movimientoinventario_new:

                // movimientoinventario_show
                if (preg_match('#^/movimientoinventario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_movimientoinventario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientoinventario_show')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoinventarioController::showAction',));
                }
                not_movimientoinventario_show:

                // movimientoinventario_edit
                if (preg_match('#^/movimientoinventario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_movimientoinventario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientoinventario_edit')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoinventarioController::editAction',));
                }
                not_movimientoinventario_edit:

                // movimientoinventario_delete
                if (preg_match('#^/movimientoinventario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_movimientoinventario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientoinventario_delete')), array (  '_controller' => 'AppBundle\\Controller\\MovimientoinventarioController::deleteAction',));
                }
                not_movimientoinventario_delete:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pro')) {
                if (0 === strpos($pathinfo, '/programarpublicacion')) {
                    // programarpublicacion_index
                    if (rtrim($pathinfo, '/') === '/programarpublicacion') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_programarpublicacion_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'programarpublicacion_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProgramarpublicacionController::indexAction',  '_route' => 'programarpublicacion_index',);
                    }
                    not_programarpublicacion_index:

                    // programarpublicacion_new
                    if ($pathinfo === '/programarpublicacion/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_programarpublicacion_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProgramarpublicacionController::newAction',  '_route' => 'programarpublicacion_new',);
                    }
                    not_programarpublicacion_new:

                    // programarpublicacion_show
                    if (preg_match('#^/programarpublicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_programarpublicacion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programarpublicacion_show')), array (  '_controller' => 'AppBundle\\Controller\\ProgramarpublicacionController::showAction',));
                    }
                    not_programarpublicacion_show:

                    // programarpublicacion_edit
                    if (0 === strpos($pathinfo, '/programarpublicacion/edit') && preg_match('#^/programarpublicacion/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_programarpublicacion_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programarpublicacion_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProgramarpublicacionController::editAction',));
                    }
                    not_programarpublicacion_edit:

                    // programarpublicacion_delete
                    if (preg_match('#^/programarpublicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_programarpublicacion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'programarpublicacion_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProgramarpublicacionController::deleteAction',));
                    }
                    not_programarpublicacion_delete:

                }

                if (0 === strpos($pathinfo, '/proyectoserviciosocial')) {
                    // proyectoserviciosocial_index
                    if (rtrim($pathinfo, '/') === '/proyectoserviciosocial') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_proyectoserviciosocial_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'proyectoserviciosocial_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProyectoserviciosocialController::indexAction',  '_route' => 'proyectoserviciosocial_index',);
                    }
                    not_proyectoserviciosocial_index:

                    // proyectoserviciosocial_new
                    if ($pathinfo === '/proyectoserviciosocial/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_proyectoserviciosocial_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProyectoserviciosocialController::newAction',  '_route' => 'proyectoserviciosocial_new',);
                    }
                    not_proyectoserviciosocial_new:

                    // proyectoserviciosocial_show
                    if (preg_match('#^/proyectoserviciosocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_proyectoserviciosocial_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyectoserviciosocial_show')), array (  '_controller' => 'AppBundle\\Controller\\ProyectoserviciosocialController::showAction',));
                    }
                    not_proyectoserviciosocial_show:

                    // proyectoserviciosocial_edit
                    if (preg_match('#^/proyectoserviciosocial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_proyectoserviciosocial_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyectoserviciosocial_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProyectoserviciosocialController::editAction',));
                    }
                    not_proyectoserviciosocial_edit:

                    // proyectoserviciosocial_delete
                    if (preg_match('#^/proyectoserviciosocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_proyectoserviciosocial_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyectoserviciosocial_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProyectoserviciosocialController::deleteAction',));
                    }
                    not_proyectoserviciosocial_delete:

                }

            }

            if (0 === strpos($pathinfo, '/publicacioncontenido')) {
                // publicacioncontenido_index
                if (rtrim($pathinfo, '/') === '/publicacioncontenido') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacioncontenido_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publicacioncontenido_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PublicacioncontenidoController::indexAction',  '_route' => 'publicacioncontenido_index',);
                }
                not_publicacioncontenido_index:

                // publicacioncontenido_new
                if ($pathinfo === '/publicacioncontenido/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_publicacioncontenido_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PublicacioncontenidoController::newAction',  '_route' => 'publicacioncontenido_new',);
                }
                not_publicacioncontenido_new:

                // publicacioncontenido_show
                if (preg_match('#^/publicacioncontenido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacioncontenido_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacioncontenido_show')), array (  '_controller' => 'AppBundle\\Controller\\PublicacioncontenidoController::showAction',));
                }
                not_publicacioncontenido_show:

                // publicacioncontenido_edit
                if (0 === strpos($pathinfo, '/publicacioncontenido/edit') && preg_match('#^/publicacioncontenido/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_publicacioncontenido_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacioncontenido_edit')), array (  '_controller' => 'AppBundle\\Controller\\PublicacioncontenidoController::editAction',));
                }
                not_publicacioncontenido_edit:

                // publicacioncontenido_delete
                if (preg_match('#^/publicacioncontenido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publicacioncontenido_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacioncontenido_delete')), array (  '_controller' => 'AppBundle\\Controller\\PublicacioncontenidoController::deleteAction',));
                }
                not_publicacioncontenido_delete:

            }

        }

        if (0 === strpos($pathinfo, '/role')) {
            // role_index
            if (rtrim($pathinfo, '/') === '/role') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_index',);
            }
            not_role_index:

            // role_new
            if ($pathinfo === '/role/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_role_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }
            not_role_new:

            // role_show
            if (preg_match('#^/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::showAction',));
            }
            not_role_show:

            // role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_role_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::editAction',));
            }
            not_role_edit:

            // role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/serviciosocial')) {
                // serviciosocial_index
                if (rtrim($pathinfo, '/') === '/serviciosocial') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_serviciosocial_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'serviciosocial_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ServiciosocialController::indexAction',  '_route' => 'serviciosocial_index',);
                }
                not_serviciosocial_index:

                // serviciosocial_new
                if ($pathinfo === '/serviciosocial/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_serviciosocial_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ServiciosocialController::newAction',  '_route' => 'serviciosocial_new',);
                }
                not_serviciosocial_new:

                // serviciosocial_show
                if (preg_match('#^/serviciosocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_serviciosocial_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serviciosocial_show')), array (  '_controller' => 'AppBundle\\Controller\\ServiciosocialController::showAction',));
                }
                not_serviciosocial_show:

                // serviciosocial_edit
                if (preg_match('#^/serviciosocial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_serviciosocial_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serviciosocial_edit')), array (  '_controller' => 'AppBundle\\Controller\\ServiciosocialController::editAction',));
                }
                not_serviciosocial_edit:

                // serviciosocial_delete
                if (preg_match('#^/serviciosocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_serviciosocial_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serviciosocial_delete')), array (  '_controller' => 'AppBundle\\Controller\\ServiciosocialController::deleteAction',));
                }
                not_serviciosocial_delete:

            }

            if (0 === strpos($pathinfo, '/solicitudbecario')) {
                // solicitudbecario_index
                if (rtrim($pathinfo, '/') === '/solicitudbecario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_solicitudbecario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'solicitudbecario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SolicitudbecarioController::indexAction',  '_route' => 'solicitudbecario_index',);
                }
                not_solicitudbecario_index:

                // solicitudbecario_new
                if ($pathinfo === '/solicitudbecario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_solicitudbecario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SolicitudbecarioController::newAction',  '_route' => 'solicitudbecario_new',);
                }
                not_solicitudbecario_new:

                // solicitudbecario_show
                if (preg_match('#^/solicitudbecario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_solicitudbecario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudbecario_show')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudbecarioController::showAction',));
                }
                not_solicitudbecario_show:

                // solicitudbecario_edit
                if (preg_match('#^/solicitudbecario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_solicitudbecario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudbecario_edit')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudbecarioController::editAction',));
                }
                not_solicitudbecario_edit:

                // solicitudbecario_delete
                if (preg_match('#^/solicitudbecario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_solicitudbecario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitudbecario_delete')), array (  '_controller' => 'AppBundle\\Controller\\SolicitudbecarioController::deleteAction',));
                }
                not_solicitudbecario_delete:

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

        }

        if (0 === strpos($pathinfo, '/tipo')) {
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

                // tipocuenta_showdelete
                if (preg_match('#^/tipocuenta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipocuenta_showdelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocuenta_showdelete')), array (  '_controller' => 'AppBundle\\Controller\\TipocuentaController::showdeleteAction',));
                }
                not_tipocuenta_showdelete:

                // tipocuenta_edit
                if (0 === strpos($pathinfo, '/tipocuenta/edit') && preg_match('#^/tipocuenta/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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

            if (0 === strpos($pathinfo, '/tipomovimiento')) {
                // tipomovimiento_index
                if (rtrim($pathinfo, '/') === '/tipomovimiento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipomovimiento_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipomovimiento_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipomovimientoController::indexAction',  '_route' => 'tipomovimiento_index',);
                }
                not_tipomovimiento_index:

                // tipomovimiento_new
                if ($pathinfo === '/tipomovimiento/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipomovimiento_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipomovimientoController::newAction',  '_route' => 'tipomovimiento_new',);
                }
                not_tipomovimiento_new:

                // tipomovimiento_show
                if (preg_match('#^/tipomovimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipomovimiento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomovimiento_show')), array (  '_controller' => 'AppBundle\\Controller\\TipomovimientoController::showAction',));
                }
                not_tipomovimiento_show:

                // tipomovimiento_edit
                if (0 === strpos($pathinfo, '/tipomovimiento/edit') && preg_match('#^/tipomovimiento/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipomovimiento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomovimiento_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipomovimientoController::editAction',));
                }
                not_tipomovimiento_edit:

                // tipomovimiento_delete
                if (preg_match('#^/tipomovimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tipomovimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipomovimiento_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipomovimientoController::deleteAction',));
                }
                not_tipomovimiento_delete:

            }

            if (0 === strpos($pathinfo, '/tipotransaccion')) {
                // tipotransaccion_index
                if (rtrim($pathinfo, '/') === '/tipotransaccion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipotransaccion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipotransaccion_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipotransaccionController::indexAction',  '_route' => 'tipotransaccion_index',);
                }
                not_tipotransaccion_index:

                // tipotransaccion_new
                if ($pathinfo === '/tipotransaccion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipotransaccion_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipotransaccionController::newAction',  '_route' => 'tipotransaccion_new',);
                }
                not_tipotransaccion_new:

                // tipotransaccion_show
                if (preg_match('#^/tipotransaccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipotransaccion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotransaccion_show')), array (  '_controller' => 'AppBundle\\Controller\\TipotransaccionController::showAction',));
                }
                not_tipotransaccion_show:

                // tipotransaccion_edit
                if (preg_match('#^/tipotransaccion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipotransaccion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotransaccion_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipotransaccionController::editAction',));
                }
                not_tipotransaccion_edit:

                // tipotransaccion_delete
                if (preg_match('#^/tipotransaccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tipotransaccion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotransaccion_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipotransaccionController::deleteAction',));
                }
                not_tipotransaccion_delete:

            }

        }

        // web_index
        if (rtrim($pathinfo, '/') === '') {
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

        // web_nosotros
        if ($pathinfo === '/nosotros') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_web_nosotros;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebSiteController::nosotrosAction',  '_route' => 'web_nosotros',);
        }
        not_web_nosotros:

        // web_history
        if ($pathinfo === '/history') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_web_history;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebSiteController::historyAction',  '_route' => 'web_history',);
        }
        not_web_history:

        // web_calendar
        if ($pathinfo === '/calendar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_web_calendar;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebSiteController::calendarAction',  '_route' => 'web_calendar',);
        }
        not_web_calendar:

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
                if ($pathinfo === '/register/becario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_registerPatrocina
                if ($pathinfo === '/register/patrocinador') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_registerPatrocina;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerPatrocinaAction',  '_route' => 'fos_user_registration_registerPatrocina',);
                }
                not_fos_user_registration_registerPatrocina:

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

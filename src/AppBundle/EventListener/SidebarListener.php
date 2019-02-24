<?php

namespace AppBundle\EventListener;

use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use Avanzu\AdminThemeBundle\Model\MenuItemModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;



class SidebarListener {

    private $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function onSetupMenu(SidebarMenuEvent $event) {
        $request = $event->getRequest();

        foreach ($this->getMenu($request) as $item) {
            $event->addItem($item);
        }
    }

    /**
     * Get the sidebar menu
     *
     * @param Request $request
     * @return mixed
     */
    protected function getMenu(Request $request) {
        $earg = array();
        $rootItems = array();
        //Item del menu
        //PERMISOS FINANCIERO
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_FINANCIERO')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-internet-explorer'),
                $fondos = new MenuItemModel('fondos', 'Fondos', 'homepage', $earg, 'fa fa-money'),
                $colaboracion = new MenuItemModel('colaboracion', 'Colaboracion Monetaria', 'homepage', $earg, 'fa fa-dollar'),
                $insumos = new MenuItemModel('insumos', 'Insumos Academicos', 'homepage', $earg, 'fa fa-cubes'),
                $catalogos = new MenuItemModel('catalogos', 'Catalogos', 'homepage', $earg, 'fa fa-list'),
            );
        }

        //PERMISOS ASPIRANTE BECARIO
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ASPIRANTE_BECARIO')) {
            $em=$this->container->get('doctrine')->getManager();
            $aprobados = $em->getRepository('AppBundle:Solicitudbecario')->findByIdusuario($this->container->get('security.token_storage')->getToken()->getUser()->getId());
            
            if($aprobados){$redirect='solicitudbecario_index';}else{$redirect='solicitudbecario_new';}
            $rootItems = array(
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-home'),
//                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-internet-explorer'),
                $solicitudes = new MenuItemModel('solicitud', 'Solicitud', $redirect, $earg, 'fa fa-window-restore'),
            );

           // $solicitudes->addChild(new MenuItemModel('soli_becarios', 'Solicitudes Becarios', 'solicitudbecario_new', $earg));
        }

        //PERMISOS ASPIRANTE PATROCINADOR
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ASPIRANTE_PATROCINADOR')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-internet-explorer'),
                $solicitudes = new MenuItemModel('solicitud', 'Solicitud', 'menu_solicitud', $earg, 'fa fa-window-restore'),
            );
        }


        //PERMISOS BECARIO
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_BECARIO')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-globe'),
                $Miexpediente = new MenuItemModel('expediente', 'Mi Expediente', 'miexpedientebecario_show', $earg, 'fa fa-search'),
                $actividad = new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
            );
        }

        //PERMISOS STAFF
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_STAFF')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-globe'),
                $expediente = new MenuItemModel('expediente', 'Expedientes', 'menu_expediente', $earg, 'fa fa-address-card'),
                $actividad = new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
                $academico = new MenuItemModel('seguimiento', 'Seguimiento Academico', 'homepage', $earg, 'fa fa-book'),
                $publicacion = new MenuItemModel('publicar', 'Publicaciones', 'homepage', $earg, 'fa fa-globe'),
                $ssocial = new MenuItemModel('social', 'Servicio Social', 'homepage', $earg, 'fa fa-signing'),
                $fondos = new MenuItemModel('fondos', 'Fondos', 'menu_fondos', $earg, 'fa fa-money'),
                $colaboracion = new MenuItemModel('colaboracion', 'Colaboracion Monetaria', 'menu_colaboracion', $earg, 'fa fa-dollar'),
                $insumos = new MenuItemModel('insumos', 'Insumos Academicos', 'homepage', $earg, 'fa fa-cubes'),
                $reportes = new MenuItemModel('reportes', 'Reportes', 'homepage', $earg, 'fa fa-line-chart'),
            );

//            $expediente->addChild(new MenuItemModel('consulta_expediente', 'Consultar Expedientes', 'avanzu_admin_ui_gen_demo', $earg));

            $insumos->addChild(new MenuItemModel('Soli_patrocina', 'Solicitudes Patrocinadores', 'movimientoinventario_index', $earg));

//           $fondos->addChild(new MenuItemModel('consultar_cuentas', 'Administrar Cuentas', 'cuenta_index', $earg));
//           $fondos->addChild(new MenuItemModel('Consultar', 'Administrar Movimientos', 'movimiento_index', $earg));

            $ssocial->addChild(new MenuItemModel('social_lista', 'Lista de Servicio Social', 'serviciosocial_index', $earg));
            $ssocial->addChild(new MenuItemModel('social_proyecto', 'Proyectos Servicio Social', 'proyectoserviciosocial_index', $earg));


            $actividad->addChild(new MenuItemModel('actividades', 'Lista de actividades', 'actividad_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent', 'Registrar contenido', 'publicacioncontenido_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent1', 'Programar Publicacoion', 'programarpublicacion_index', $earg));
        }


        //PERMISOS COORDINADOR
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_COORDINADOR')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-globe'),
                $expediente = new MenuItemModel('expediente', 'Expedientes', 'menu_expediente', $earg, 'fa fa-address-card'),
                $actividad = new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
                $academico = new MenuItemModel('seguimiento', 'Seguimiento Academico', 'homepage', $earg, 'fa fa-book'),
                $publicacion = new MenuItemModel('publicar', 'Publicaciones', 'homepage', $earg, 'fa fa-globe'),
                $ssocial = new MenuItemModel('social', 'Servicio Social', 'homepage', $earg, 'fa fa-signing'),
                $fondos = new MenuItemModel('fondos', 'Fondos', 'menu_fondos', $earg, 'fa fa-money'),
                $colaboracion = new MenuItemModel('colaboracion', 'Colaboracion Monetaria', 'menu_colaboracion', $earg, 'fa fa-dollar'),
                $insumos = new MenuItemModel('insumos', 'Insumos Academicos', 'homepage', $earg, 'fa fa-cubes'),
                $catalogos = new MenuItemModel('catalogos', 'Catalogos', 'menu_catalogos', $earg, 'fa fa-list'),
                $reportes = new MenuItemModel('reportes', 'Reportes', 'homepage', $earg, 'fa fa-line-chart'),
            );





//            $expediente->addChild(new MenuItemModel('consulta_expediente', 'Consultar Expedientes', 'avanzu_admin_ui_gen_demo', $earg));
            $insumos->addChild(new MenuItemModel('Soli_patrocina', 'Solicitudes Patrocinadores', 'movimientoinventario_index', $earg));

//           $fondos->addChild(new MenuItemModel('consultar_cuentas', 'Administrar Cuentas', 'cuenta_index', $earg));
//           $fondos->addChild(new MenuItemModel('Consultar', 'Administrar Movimientos', 'movimiento_index', $earg));
//            $catalogos->addChild(new MenuItemModel('tipo_cuentas', 'Tipos de Cuenta', 'tipocuenta_index', $earg));
//            $catalogos->addChild(new MenuItemModel('lista_bancos', 'Bancos', 'banco_index', $earg));
//            $catalogos->addChild(new MenuItemModel('consultar_movimientos', 'Tipos De Movimiento', 'tipomovimiento_index', $earg));

            $ssocial->addChild(new MenuItemModel('social_lista', 'Lista de Servicio Social', 'serviciosocial_index', $earg));
            $ssocial->addChild(new MenuItemModel('social_proyecto', 'Proyectos Servicio Social', 'proyectoserviciosocial_index', $earg));


            $actividad->addChild(new MenuItemModel('actividades', 'Lista de actividades', 'actividad_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent', 'Registrar contenido', 'publicacioncontenido_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent1', 'Programar Publicacoion', 'programarpublicacion_index', $earg));
        }



        //PERMISOS ADMINISTRADOR
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $rootItems = array(
                $inicio = new MenuItemModel('inicio', 'Inicio', 'homepage', $earg, 'fa fa-home'),
                $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-globe'),
                $solicitudes = new MenuItemModel('solicitud', 'Solicitudes', 'menu_solicitud', $earg, 'fa fa-window-restore'),
                $usuario = new MenuItemModel('usuario', 'Usuarios', '', $earg, 'fa fa-user'),
                $expediente = new MenuItemModel('expediente', 'Expedientes', 'menu_expediente', $earg, 'fa fa-address-card'),
                $actividad = new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
                $academico = new MenuItemModel('seguimiento', 'Seguimiento Academico', 'homepage', $earg, 'fa fa-book'),
                $publicacion = new MenuItemModel('publicar', 'Publicaciones', 'menu_solicitud', $earg, 'fa fa-globe'),
                $ssocial = new MenuItemModel('social', 'Servicio Social', 'homepage', $earg, 'fa fa-signing'),
                $fondos = new MenuItemModel('fondos', 'Fondos', 'menu_fondos', $earg, 'fa fa-money'),
                $colaboracion = new MenuItemModel('colaboracion', 'Colaboracion Monetaria', 'menu_colaboracion', $earg, 'fa fa-dollar'),
                $insumos = new MenuItemModel('insumos', 'Insumos Academicos', 'homepage', $earg, 'fa fa-cubes'),
                $catalogos = new MenuItemModel('catalogos', 'Catalogos', 'menu_catalogos', $earg, 'fa fa-list'),
                $reportes = new MenuItemModel('reportes', 'Reportes', 'homepage', $earg, 'fa fa-line-chart'),
            );



            $usuario->addChild($icons = new MenuItemModel('gestionar_usuario', 'Administrar Usuarios', 'user_index', $earg));
//            $expediente->addChild(new MenuItemModel('consulta_expediente', 'Consultar Expedientes', 'avanzu_admin_ui_gen_demo', $earg));
//            $solicitudes->addChild(new MenuItemModel('soli_becarios', 'Solicitudes Becarios', 'solicitudbecario_index', $earg));
//            $solicitudes->addChild(new MenuItemModel('Soli_patrocina', 'Solicitudes Patrocinadores', 'solicitudbecario_index', $earg));

            $insumos->addChild(new MenuItemModel('Soli_patrocina', 'Solicitudes Patrocinadores', 'movimientoinventario_index', $earg));

//            $fondos->addChild(new MenuItemModel('consultar_cuentas', 'Administrar Cuentas', 'cuenta_index', $earg));
//            $fondos->addChild(new MenuItemModel('Consultar', 'Administrar Movimientos', 'movimiento_index', $earg));
//            $catalogos->addChild(new MenuItemModel('tipo_cuentas', 'Tipos de Cuenta', 'tipocuenta_index', $earg));
//            $catalogos->addChild(new MenuItemModel('lista_bancos', 'Bancos', 'banco_index', $earg));
//            $catalogos->addChild(new MenuItemModel('consultar_movimientos', 'Tipos De Movimiento', 'tipomovimiento_index', $earg));

            $ssocial->addChild(new MenuItemModel('social_lista', 'Lista de Servicio Social', 'serviciosocial_index', $earg));
            $ssocial->addChild(new MenuItemModel('social_proyecto', 'Proyectos Servicio Social', 'proyectoserviciosocial_index', $earg));


            $actividad->addChild(new MenuItemModel('actividades', 'Lista de actividades', 'actividad_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent', 'Registrar contenido', 'publicacioncontenido_index', $earg));
            $publicacion->addChild(new MenuItemModel('RegistrarContent1', 'Programar Publicacoion', 'programarpublicacion_index', $earg));
        }

//
//        $expediente->addChild(new MenuItemModel('nuevo_expediente', 'Nuevo Expediente', 'avanzu_admin_ui_gen_demo', $earg))
//                ->addChild($icons = new MenuItemModel('consultar_expediente', 'Consultar Expedientes', 'avanzu_admin_ui_icon_demo', $earg));
//        $actividad->addChild(new MenuItemModel('nueva_actividad', 'Nueva Actividad', 'actividad_new', $earg));
//
//        $actividad->addChild(new MenuItemModel('crear_actividad', 'Crear Actividad', 'avanzu_admin_ui_gen_demo', $earg))
//                ->addChild($icons = new MenuItemModel('consultar_actividades', 'Consultar Actividades', 'avanzu_admin_ui_icon_demo', $earg));
//
//        $actividad->addChild(new MenuItemModel('crear_actividad', 'Crear Actividad', 'avanzu_admin_ui_gen_demo', $earg))
//                ->addChild($icons = new MenuItemModel('consultar_actividades', 'Consultar Actividades', 'avanzu_admin_ui_icon_demo', $earg));
//
//        $soli = new MenuItemModel('cuenta', 'Solicitudes', 'avanzu_admin_ui_gen_demo', $earg);
//        $soli->addChild(new MenuItemModel('consultar_solicitudes', 'Consultar Solicitudes', 'solicitudbecario_index', $earg));
//        $solicitud->addChild($soli);
//        //Creacion desegundio nivel de menu
//        $movimiento1 = new MenuItemModel('cuenta1', 'Catalogos', 'tipocuenta_index', $earg);
//        $movimiento1->addChild(new MenuItemModel('Consultar', 'Consultar Tipo Cuenta', 'tipocuenta_index', $earg));
//        $movimiento1->addChild(new MenuItemModel('consultar_bancos', 'Consultar Bancos', 'banco_index', $earg));
//        $movimiento = new MenuItemModel('cuenta', 'Cuentas y Movimientos', 'avanzu_admin_ui_gen_demo', $earg);
//        $movimiento->addChild(new MenuItemModel('consultar_movimientos', 'Tipos De Movimiento', 'tipomovimiento_index', $earg));
//        $movimiento->addChild(new MenuItemModel('consultar_cuentas', 'Cuentas', 'cuenta_index', $earg));
//        $movimiento2 = new MenuItemModel('cuenta2', 'Movimientos', 'avanzu_admin_ui_gen_demo', $earg);
//        $movimiento2->addChild(new MenuItemModel('Consultar', 'Consultar Movimientos', 'movimiento_index', $earg));
//        $movimiento2->addChild(new MenuItemModel('ConsultarTransacciones', 'Consultar Transacciones', 'tipotransaccion_index', $earg));
//
//        $fondos->addChild($movimiento1);
//        $fondos->addChild($movimiento);
//        $fondos->addChild($movimiento2);
//

        return $this->activateByRoute($request->get('_route'), $rootItems);
    }

    /**
     * Set current menu item to be active
     *
     * @param $route
     * @param $items
     * @return mixed
     */
    protected function activateByRoute($route, $items) {

        foreach ($items as $item) { /** @var $item MenuItemModel */
            if ($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            } else {
                if ($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }

}

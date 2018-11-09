<?php

namespace AppBundle\EventListener;

use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use Avanzu\AdminThemeBundle\Model\MenuItemModel;
use Symfony\Component\HttpFoundation\Request;

class SidebarListener
{
    public function onSetupMenu(SidebarMenuEvent $event)
    {
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
    protected function getMenu(Request $request)
    {
        $earg      = array();
        //Item del menu
        $rootItems = array(
            $dash = new MenuItemModel('site', 'WebSite', 'web_index', $earg, 'fa fa-home'),
            $dash = new MenuItemModel('solicitud', 'Solicitud', 'web_index', $earg, 'fa fa-home'),
            $usuario = new MenuItemModel('usuario', 'Usuarios', '', $earg, 'fa fa-user'),
            $expediente = new MenuItemModel('expediente', 'Expedientes', '', $earg, 'fa fa-search'),
            $actividad= new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
            $academico= new MenuItemModel('seguimiento', 'Seguimiento Academico', 'homepage', $earg, 'fa fa-book'),
            $solicitud= new MenuItemModel('solicitud', 'Solicitudes', 'homepage', $earg, 'fa fa-book'),
            $ssocial= new MenuItemModel('social', 'Servicio Social', 'homepage', $earg, 'fa fa-list'),
            $fondos= new MenuItemModel('fondos', 'Fondos', 'homepage', $earg, 'fa fa-money'),
            $reportes= new MenuItemModel('reportes', 'Reportes', 'homepage', $earg, 'fa fa-money'),
            $catalogos= new MenuItemModel('reportes', 'Reportes', 'homepage', $earg, 'fa fa-money'),
        );

        $usuario->addChild(new MenuItemModel('agregar_usuario', 'Agregar Usuario', 'user_new', $earg))
            ->addChild($icons = new MenuItemModel('consultar_usuario', 'Consultar Usuarios', 'user_index', $earg));

         $expediente->addChild(new MenuItemModel('nuevo_expediente', 'Nuevo Expediente', 'avanzu_admin_ui_gen_demo', $earg))
            ->addChild($icons = new MenuItemModel('consultar_expediente', 'Consultar Expedientes', 'avanzu_admin_ui_icon_demo', $earg));
         $actividad->addChild(new MenuItemModel('nueva_actividad', 'Nueva Actividad', 'actividad_new', $earg));

          $actividad->addChild(new MenuItemModel('crear_actividad', 'Crear Actividad', 'avanzu_admin_ui_gen_demo', $earg))
            ->addChild($icons = new MenuItemModel('consultar_actividades', 'Consultar Actividades', 'avanzu_admin_ui_icon_demo', $earg));

            $actividad->addChild(new MenuItemModel('crear_actividad', 'Crear Actividad', 'avanzu_admin_ui_gen_demo', $earg))
            ->addChild($icons = new MenuItemModel('consultar_actividades', 'Consultar Actividades', 'avanzu_admin_ui_icon_demo', $earg));

              $soli= new MenuItemModel('cuenta', 'Solicitudes', 'avanzu_admin_ui_gen_demo', $earg );
              $soli->addChild(new MenuItemModel('consultar_solicitudes', 'Consultar Solicitudes', 'solicitudbecario_index', $earg));
              $solicitud->addChild($soli);
            //Creacion desegundio nivel de menu
            $movimiento= new MenuItemModel('cuenta', 'Cuentas y Movimientos', 'avanzu_admin_ui_gen_demo', $earg );
            $movimiento->addChild(new MenuItemModel('consultar_movimientos', 'Tipos De Movimiento', 'tipomovimiento_index', $earg));
            $movimiento->addChild(new MenuItemModel('consultar_cuentas', 'Cuentas', 'cuenta_index', $earg));
            $movimiento1= new MenuItemModel('cuenta1', 'Catalogos', 'avanzu_admin_ui_gen_demo', $earg );
            $movimiento1->addChild(new MenuItemModel('Consultar', 'Consultar Tipo Cuenta', 'tipocuenta_index', $earg));
            $movimiento1->addChild(new MenuItemModel('consultar_bancos', 'Consultar Bancos', 'banco_index', $earg));
            $movimiento2= new MenuItemModel('cuenta2', 'Movimientos', 'avanzu_admin_ui_gen_demo', $earg );
            $movimiento2->addChild(new MenuItemModel('Consultar', 'Consultar Movimientos', 'movimiento_index', $earg));

            $fondos->addChild($movimiento);
            $fondos->addChild($movimiento1);
            $fondos->addChild($movimiento2);
            
             $ssocial->addChild(new MenuItemModel('proyectoss', 'Proyecto Servicio Social', 'proyectoserviciosocial_index', $earg))
            ->addChild($icons = new MenuItemModel('servicios', 'Gestionar Servicio Social', 'serviciosocial_index', $earg));
            /*  $movimiento= new MenuItemModel('movimiento', 'Consultar Tipo Cuenta', 'tipocuenta_index', $earg );
              $movimiento->addChild(new MenuItemModel('crear_movimiento', 'Crear Movimiento', 'avanzu_admin_ui_gen_demo', $earg));
              $movimiento->addChild(new MenuItemModel('consultar_movimiento', 'Consultar Movimiento', 'avanzu_admin_ui_gen_demo', $earg));
              $fondos->addChild($movimiento);*/

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

        foreach($items as $item) { /** @var $item MenuItemModel */
            if($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            }
            else {
                if($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }


}

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
            $dash = new MenuItemModel('home', 'Home', 'homepage', $earg, 'fa fa-home'),
            $usuario = new MenuItemModel('usuario', 'Usuarios', '', $earg, 'fa fa-user'),
            $expediente = new MenuItemModel('expediente', 'Expedientes', '', $earg, 'fa fa-search'),
            $actividad= new MenuItemModel('actividad', 'Actividades', '', $earg, 'fa fa-calendar'),
            $academico= new MenuItemModel('seguimiento', 'Seguimiento Academico', 'homepage', $earg, 'fa fa-book'),
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

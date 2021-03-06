<?php


namespace Livraria;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Livraria\Model\CategoriaTable;

class Module
{
    /*public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }*/

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    __NAMESPACE__.'Admin' => __DIR__ . '/src/' . __NAMESPACE__."Admin",
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories'=>array(
                'Livraria\Model\CategoriaService'=>function($service)
                {
                    $dbAdapter=$service->get('Zend\Db\Adapter\Adapter');
                    $categoriaTable=new CategoriaTable($dbAdapter);

                    $categoriaService=new Model\CategoriaService($categoriaTable);

                    return $categoriaService;
                }
            )
        );
    }



}

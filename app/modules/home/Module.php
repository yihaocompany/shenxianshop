<?php
namespace Shenxianshop\Modules\Home;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers an autoloader related to the module
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();
        $loader->registerNamespaces([
            'Shenxianshop\Modules\Home\Controllers' => __DIR__ . '/controllers/',
            'Shenxianshop\Models'                   => APP_PATH . '/common/models/',
            'Shenxianshop\BasePc'                   => APP_PATH . '/common/libray/',
            'Shenxianshop\Forms'                    => APP_PATH . '/common/forms/',
        ]);
        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        /**
         * Setting up the view component
         */
        $di->set('view', function () {
            $view = new View();
            $view->setDI($this);
            $view->setViewsDir(__DIR__ . '/views/');
          /*  $view->registerEngines([
                '.volt'  => 'voltShared',
                '.volt' => VoltEngine::class
            ]);*/

            $view->registerEngines([
                '.volt' => function ($view) {
                    $volt = new VoltEngine($view, $this);
                    return $volt;
                }
            ]);



            return $view;
        });
    }
}
/*$di->set('view', function () {
    $config = $this->getConfig();
    $view = new View();
    $view->setViewsDir($config->application->viewsDir);
    $view->registerEngines([
        '.volt' => function ($view) {
            $config = $this->getConfig();
            $volt = new VoltEngine($view, $this);
            $volt->setOptions([
                'compiledPath' => $config->application->cacheDir . 'volt/',
                'compiledSeparator' => '_'
            ]);
            return $volt;
        }
    ]);
    return $view;
}, true);*/

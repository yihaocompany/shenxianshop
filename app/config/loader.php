<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Shenxianshop\Models' => APP_PATH . '/common/models/',
    'Shenxianshop'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Shenxianshop\Modules\Home\Module' => APP_PATH . '/modules/Home/Module.php',
    'Shenxianshop\Modules\Back\Module' => APP_PATH . '/modules/Back/Module.php',
    'Shenxianshop\Modules\Weixin\Module' => APP_PATH . '/modules/Weixin/Module.php',
    'Shenxianshop\Modules\Api\Module' => APP_PATH . '/modules/Api/Module.php',
    'Shenxianshop\Modules\Little\Module' => APP_PATH . '/modules/Little/Module.php',
    'Shenxianshop\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();

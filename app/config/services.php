<?php
use Phalcon\Loader;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
/**
 * Shared configuration service
 */
$di->setShared('config', function () {
    return include APP_PATH . "/config/config.php";
});
/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use ($di){
    //新建一个事件管理器
    $eventsManager = new \Phalcon\Events\Manager();
    //从di中获取共享的profiler实例
    $profiler = $di->getProfiler();
    //监听所有的db事件
    $eventsManager->attach('db', function($event, $connection) use
    ($profiler) {
        //一条语句查询之前事件，profiler开始记录sql语句
        if ($event->getType() == 'beforeQuery') {
            $profiler->startProfile($connection->getSQLStatement());
        }
        //一条语句查询结束，结束本次记录，记录结果会保存在profiler对象中
        if ($event->getType() == 'afterQuery') {
            $profiler->stopProfile();
        }
    });
    $config = $this->getConfig();
    $class = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
    $params = [
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'charset'  => $config->database->charset
    ];
    if ($config->database->adapter == 'Postgresql') {
        unset($params['charset']);
    }
    $connection = new $class($params);
    $connection->setEventsManager($eventsManager);
    return $connection;
});
/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
    return new MetaDataAdapter();
});
$di->setShared('phalcon_redis', function () {
    $config = $this->getConfig();
    $redis = new  \Phalcon\Mvc\Model\MetaData\Redis([
        'prefix'     =>  $config->redis->prefix,
        'lifetime'   =>  $config->redis->lifetime,
        'host'       =>  $config->redis->host,
        'port'       =>  $config->redis->port,
        'persistent' =>  $config->redis->persistent,
    ]);
    return $redis;
});


$di->setShared('redis', function () {
    $redis = new Redis();
    $redis->connect('localhost',6379);
    return $redis;
});



$di->setShared('cache', function () {
    $frontCache = new Phalcon\Cache\Frontend\Data(
        [
            "lifetime" => 172800,
        ]
    );
    $cache=new Phalcon\Cache\Backend\Redis(
        $frontCache,
        [
            "host"       => "localhost",
            "port"       => 6379,
            "persistent" => false,
            "index"      => 0,
        ]
    );
    return $cache;
});



$di->set('profiler', function(){
    return
        new  \Phalcon\Db\Profiler();
}, true);
// Simple database connection to localhost
$di->set(
    'localmongo',
    function () {
        $mongo = new MongoClient();
        return $mongo->selectDB('shenxianshop');
    },
    true
);
// Connecting to a domain socket, falling back to localhost connection
$di->set(
    'mongo',
    function () {
        $mongo = new MongoClient(
            'mongodb:///tmp/mongodb-27017.sock,localhost:27017'
        );
        return $mongo->selectDB('shenxianshop');
    },
    true
);


$di->setShared('crypt', function () {
    $crypt = new \Phalcon\Crypt();
    // don't use PADDING_DEFAULT, Affect the cookie result
    $crypt->setPadding(\Phalcon\Crypt::PADDING_ZERO);
    $crypt->setKey('wanghaibin@17705812500'); // Use your own key!
    return $crypt;
});
// http cookies
$di->setShared('cookies', function () {
    $cookies = new \Phalcon\Http\Response\Cookies();
    $cookies->useEncryption(false);
    return $cookies;
});

$di->set('modelsManager', function() {
    return new Phalcon\Mvc\Model\Manager();
});




/**
 * Configure the Volt service for rendering .volt templates
 */
$di->setShared('voltShared', function ($view) {
    $config = $this->getConfig();

    $volt = new VoltEngine($view, $this);
    $volt->setOptions([
        'compiledPath' => function($templatePath) use ($config) {
            $basePath = $config->application->appDir;
            if ($basePath && substr($basePath, 0, 2) == '..') {
                $basePath = dirname(__DIR__);
            }
            $basePath = realpath($basePath);
            $templatePath = trim(substr($templatePath, strlen($basePath)), '\\/');
            $filename = basename(str_replace(['\\', '/'], '_', $templatePath), '.volt') . '.php';
            $cacheDir = $config->application->cacheDir;
            if ($cacheDir && substr($cacheDir, 0, 2) == '..') {
                $cacheDir = __DIR__ . DIRECTORY_SEPARATOR . $cacheDir;
            }
            $cacheDir = realpath($cacheDir);
            if (!$cacheDir) {
                $cacheDir = sys_get_temp_dir();
            }
            if (!is_dir($cacheDir . DIRECTORY_SEPARATOR . 'volt' )) {
                @mkdir($cacheDir . DIRECTORY_SEPARATOR . 'volt' , 0755, true);
            }
            return $cacheDir . DIRECTORY_SEPARATOR . 'volt' . DIRECTORY_SEPARATOR . $filename;
        }
    ]);
    return $volt;
});

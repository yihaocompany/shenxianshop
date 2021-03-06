# 名店开源商城 -Mingshop  ming.biz 
名店开源商城  phalcon &amp; php7.2
开发工具及环境：php7.2 phalcon3.3 swoole redis rabbitmq msgpack mysql  mongodb nginx

## 运行环境 
centos7 64位 nginx redis rabbitmq mysql 
### nginx的配置 
## 说明modules中的install中保存有SQL文件

## module
#### home 为电脑端，back后台管理 , api为APP接口 weixin为微信 little为小程序接口  install为按装模块
#### app/common/forms 为表单  ， app/common/libray 保存controller的基类 app/common/messages 为语言包 
#### app/common/models 为模型类 即相关表的实体类 ，其中有一个ValidateCode为验证码类

## tools相关的第三方插件 

## GIT工具的命令
#### 1先进入项目文件夹）
通过命令 git init 把这个目录变成git可以管理的仓库
git init 
####、把文件添加到版本库中，
使用命令 git add .添加到暂存区里面去，不要忘记后面的小数点“.”，意为添加文件夹下的所有文件
git add .
#### 2、用命令 git commit告诉Git，
把文件提交到仓库。引号内为提交说明
git commit -m 'first commit'
#### 3、关联到远程库
git remote add origin 你的远程库地址
#### 4、获取远程库与本地同步合并
（如果远程库不为空必须做这一步，否则后面的提交会失败）
git pull --rebase origin master
#### 5、把本地库的内容推送到远程，
使用 git push命令，实际上是把当前分支master推送到远程。执行此命令后会要求输入用户名、密码，验证通过后即开始上传。
git push -u origin master
#### 6、状态查询命令
git status

## 代码说明
#### 工具说明
在tools下存放了phalcon-devtools 跟 phpstorm下提知能提示插件 phpstorm-library-plugin.jar
#### REDIS的做缓存


```php
$di->setShared('cache', function () {
    $frontCache = new Phalcon\Cache\Frontend\Data([
            "lifetime" => 172800,
        ]);
    $cache=new Phalcon\Cache\Backend\Redis(
        $frontCache,[
            "host"       => "localhost",
            "port"       => 6379,
            "persistent" => false,
            "index"      => 0,
        ]
    );
    return $cache;
});
```
#### 数据库的跟踪
```php
$di->set('profiler', function(){
    return
        new  \Phalcon\Db\Profiler();
}, true);

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

调用：




```



```
//获取所有的prifler记录结果，这是一个数组，每条记录对应一个sql语句
$profiles= $this->di->get('profiler')->getProfiles();
//遍历输出
foreach($profilesas  $profile) {
   echo
"SQL语句: ", $profile->getSQLStatement(), "\n";
   echo
"开始时间: ", $profile->getInitialTime(), "\n";
   echo
"结束时间: ", $profile->getFinalTime(), "\n";
   echo
"消耗时间: ", $profile->getTotalElapsedSeconds(), "\n";
}

//直接获取最后一条sql语句
echo $this->di->get('profiler')->getLastProfile()->getSQLStatement();

```




* 添加nginx配置，demo:
```bash
server {
  listen 80;
  server_name sx.com www.sx.com;
  access_log /data/wwwlogs/sx.com_nginx.log combined;
  index index.html index.htm index.php;
  set $root_path   /web/shenxianshop/public;
  root $root_path;
  #try_files $uri $uri/ @rewrite;
       location / {
        if ($request_uri ~ (.+?\.php)(|/.+)$ ) {
            break;
        }
        if (!-e $request_filename) {
            rewrite ^/(.*)$ /index.php?_url=/$1;
        }
    }


 location ~ \.php {
        fastcgi_pass unix:/dev/shm/php-cgi.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        set $real_script_name $fastcgi_script_name;
        if ($fastcgi_script_name ~ "^(.+?\.php)(/.+)$") {
            set $real_script_name $1;
            set $path_info $2;
        }
        fastcgi_param SCRIPT_FILENAME $document_root$real_script_name;
        fastcgi_param SCRIPT_NAME $real_script_name;
        fastcgi_param PATH_INFO $path_info;
    }

  location ~ .*\.(gif|jpg|jpeg|png|bmp|swf|flv|mp4|ico)$ {
    root $root_path;
    expires 30d;
    access_log off;
  }
  location ~ .*\.(js|css)?$ {
    root $root_path;
    expires 7d;
    access_log off;
  }
  location ~ /\.ht {
    deny all;
  }
}
```





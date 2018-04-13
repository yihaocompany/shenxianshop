<?php
/*
 * 语言包的显示
 */
namespace Shenxianshop\Modules\Home\Controllers;
use Phalcon\Translate\Adapter\NativeArray;
use Phalcon\Mvc\Controller;
class ControllerBase extends Controller{
    public $_languang="";
    public function initialize(){
        // 询问浏览器语言
        $language = $this->request->getBestLanguage();
        $zh='zh-CN';
        $messages=array();
        if (file_exists(APP_PATH.'/common/messages/' . $language . '.php')) {
             require APP_PATH.'/common/messages/' . $language . '.php';
        } else {
          require APP_PATH.'/common/messages/' . $zh . '.php';
        }
        $this->_languang= $messages;
    }
}

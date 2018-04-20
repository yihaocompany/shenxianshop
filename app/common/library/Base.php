<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19/019
 * Time: 22:43
 */
namespace Shenxianshop;
use Phalcon\Mvc\Controller;
use Phalcon\Translate\Adapter\NativeArray;
use Phalcon\Mvc\View;
class Base extends Controller{
    public $messages;
    public $zh_CN='zh-CN';
    public function initialize(){
        // 询问浏览器语言
        $language = $this->request->getBestLanguage();
        $messages=null;
        if (file_exists(APP_PATH.'/common/messages/' . $language . '.php')) {
            require APP_PATH.'/common/messages/' . $language . '.php';
        } else {
            require APP_PATH.'/common/messages/' .  $this->zh_CN . '.php';
        }
        $this->messages=$messages;
        $this->view->setVar('_language',  $this->messages);
    }
    /**
     * ajax输出
     * @param $message
     * @param int $code
     * @param array $data
     * @author whb
     */
    public function ajax_return($message, $code=1, array $data=array()){
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data,
        );

        $this -> response -> setJsonContent($result);
        $this -> response -> send();
    }

    /**
     * exception日志记录
     * @param \Exception $e
     * @author whb
     */
    public function write_exception_log(\Exception $e){
        $logArray = array(
            'file' => $e -> getFile(),
            'line' => $e -> getLine(),
            'code' => $e -> getCode(),
            'message' => $e -> getMessage(),
            'trace' => $e -> getTraceAsString(),
        );
        $this -> logger -> write_log($logArray);
    }
}
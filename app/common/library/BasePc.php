<?php
/**
 * Created by whb.
 * User: whb
 * Date: 2018/4/13/013
 * Time: 23:50
 * Brief: 前台后台基类
 */
namespace Shenxianshop;
use Phalcon\Translate\Adapter\NativeArray;
use Phalcon\Mvc\Controller;
class BasePc extends Controller{
    public $zh_CN='zh-CN';
    public $category;
    public function initialize(){
        // 询问浏览器语言
        $language = $this->request->getBestLanguage();
        $messages=array();
        if (file_exists(APP_PATH.'/common/messages/' . $language . '.php')) {
            require APP_PATH.'/common/messages/' . $language . '.php';
        } else {
            require APP_PATH.'/common/messages/' .  $this->zh_CN . '.php';
        }
        $this->view->setVar('_language',$messages);
        //分类
        $category=new \Shenxianshop\Models\GoodsCategory();
        $this->category=$category->get_goods_category();
        $this->view->setVar('category', $this->category);
    }
}
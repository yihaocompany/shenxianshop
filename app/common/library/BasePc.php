<?php
/**
 * Created by whb.
 * User: whb
 * Date: 2018/4/13/013
 * Time: 23:50
 * Brief: 前台后台基类
 */
namespace Shenxianshop;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Controller;
class BasePc extends  \Shenxianshop\Base{
    public $category;
    public function initialize(){
        parent::initialize();
        $category=new \Shenxianshop\Models\GoodsCategory();
        $this->category=$category->get_goods_category();
        $this->view->setVar('category', $this->category);
        $Navigation=new \Shenxianshop\Models\Navigation();
        $this->view->setVar('nav',$Navigation->navigationmenu());
        $configlist = new \Shenxianshop\Models\Config();
        $conArray=null;
        foreach ($configlist->configlist() as $item){
            $conArray[$item['name']."_".$item['inc_type']]=$item['value'];
        }
       /* echo "<pre>";
        var_dump($conArray);
        echo "</pre>";*/
        $this->view->setVar('_configure',$conArray);

    }
}
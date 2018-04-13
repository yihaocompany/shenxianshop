<?php

namespace Shenxianshop\Modules\Back\Controllers;
use Phalcon\Mvc\View;
class AdminController extends ControllerBase
{
    public function indexAction(){
        //$_vc = new \Shenxianshop\Models\ValidateCode();  //实例化一个对象
       // $_vc->doimg();
        //$_SESSION['authnum_session'] = $_vc->getCode();//验证码保存到SESSION中
        // $this->session->set('back_code', $_vc->getCode());
       // exit;
    }
    public function loginAction(){
        //var_dump( $this->di['redis']);
       // $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
      //  $this->view->disableLevel(View::LEVEL_ACTION_VIEW);
      //  $this->view->
    /*   $this->view->disableLevel(array(
            View::LEVEL_LAYOUT => true,
            View::LEVEL_MAIN_LAYOUT => true
        ));*/
       $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
      //  $this ->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }

    public function validatecodeAction(){
        $_vc = new \Shenxianshop\Models\ValidateCode();  //实例化一个对象
        $_vc->doimg();
        //$_SESSION['authnum_session'] = $_vc->getCode();//验证码保存到SESSION中
        $this->session->set('back_code', $_vc->getCode());
        exit;

    }
}


<?php

namespace Shenxianshop\Modules\Back\Controllers;
use Phalcon\Mvc\View;
use Shenxianshop\Models\Admin;

class AdminController extends ControllerBase
{
    public function indexAction(){
        $url="/back/admin/login";

        try{
            $url= $this->cookies->get('url');

            $this->view->setVars('url',  $url);
        }catch (\Exception $e){
            $this -> write_exception_log($e);
            $this->view->setVars('url',  $url);
        }
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }
    public function loginAction(){
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }

    public function signoutAction(){
         $this->session->destroy();
         $this->cookies->set('url','/back/admin/login');
         $this->response->redirect('/back/admin/index/index');

    }


    public function checkAction(){
        try {
            $code = $this->request->getPost('code');
            if (strtolower($this->session->get('back_code')) != strtolower(trim($code))) {
                exit($this->ajax_return($this->messages['lang_wrongdcode'], -1));
            }
            $username = $this->request->getPost('username');
            if ($username == "") {
                exit($this->ajax_return($this->messages['lang_needusername'], -1));
            }
            $password = $this->request->getPost('password');
            if ($password == "") {
                exit($this->ajax_return($this->messages['lang_needpassword'], -1));
            }

            $admin = new Admin();
            $conditions = "user_name = :username:";
            $bindparameters=array('username'=>$username);
            $parameters = array(
                $conditions,
                "bind" => $bindparameters
            );
            if ($admin->UserCheck($parameters, $password)) {
                exit($this->ajax_return($this->messages['lang_success'], 1, array('url' => '/back/index/index')));
            } else {
                exit($this->ajax_return($this->messages['lang_login'], -1));
            }

        }catch(\Exception $e){
            $this -> write_exception_log($e);
            exit($this->ajax_return("Exception Error", -1));
        }
    }

    public function codeAction(){
        try {
            $_vc = new \Shenxianshop\Models\ValidateCode();  //实例化一个对象
            $_vc->doimg();
            $this->session->set('back_code', $_vc->getCode());
            exit;
        }catch(\Exception $e){
            $this -> write_exception_log($e);
            //var_dump($e);
            // return $this -> response -> redirect('/404');
        }
    }
}


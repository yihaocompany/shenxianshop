<?php

namespace Shenxianshop\Modules\Back\Controllers;
use Phalcon\Mvc\View;
use Shenxianshop\Models\Admin;

class AdminController extends ControllerBase
{
    public function indexAction(){
       try{
            $url= $this->cookies->get('url');
            if($url==''  or $url=null or empty($url) ){
                $url="/back/admin/login";
            }
            $this->view->setVar('url',  $url);
        }catch (\Exception $e){
           $this -> write_exception_log($e);
           if($url==''  or $url==null or empty($url) ){
               $url="/back/admin/login";
           }
           $this->view->setVar('url',  $url);
       }
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }
    public function loginAction(){
        $this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);
    }

    public function signoutAction(){
        $this->view->disable();
         $this->session->destroy();
         $this->cookies->set('url','/back/admin/login');
         $this->response->redirect('/back/admin/index');

    }


    public function checkAction(){
        try {
            $code = $this->request->getPost('code','trim');
            if (strtolower($this->session->get('back_code')) != strtolower(trim($code))) {
                exit($this->ajax_return($this->messages['lang_wrongdcode'], -1));
            }
            $username = $this->request->getPost('username','trim');
            if ($username == "") {
                exit($this->ajax_return($this->messages['lang_needusername'], -1));
            }
            $password = $this->request->getPost('password','trim');
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
              //  $checkbox = $this->request->getPost('checkbox');
             /*   if($checkbox){
                    //保存到cookies
                    $this->cookies->set('admin',$username);
                    $this->cookies->set('password',$password);
                }*/

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


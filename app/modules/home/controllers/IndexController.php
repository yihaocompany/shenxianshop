<?php

namespace Shenxianshop\Modules\Home\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        var_dump($this->_languang);
        echo 'hi world';
        exit;
    }

}


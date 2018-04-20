<?php

namespace Shenxianshop\Modules\Home\Controllers;

use Shenxianshop\Models\Admin;


class IndexController extends ControllerBase
{
    public function indexAction(){
        //var_dump(new Admin());

        $admin = new Admin();
        var_dump($admin);
        exit;
    }

}


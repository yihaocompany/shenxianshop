<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/17/017
 * Time: 22:27
 */

namespace Shenxianshop\Models;


class ModelBase extends \Phalcon\Mvc\Model
{
    protected $_cache;
    public function initialize(){
        $this->_cache=  \Phalcon\Di::getDefault()->getShared('cache');
    }

}
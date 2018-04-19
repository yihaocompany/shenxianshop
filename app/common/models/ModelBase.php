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
    protected $_redis;
    public function initialize(){
        $this->_redis=  \Phalcon\Di::getDefault()->getShared('redis');

    }

}
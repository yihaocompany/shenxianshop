<?php

namespace Shenxianshop\Models;

class Recharge extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="order_id", type="integer", length=20, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=20, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="nickname", type="string", length=50, nullable=true)
     */
    protected $nickname;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=30, nullable=false)
     */
    protected $order_sn;

    /**
     *
     * @var double
     * @Column(column="account", type="double", length=10, nullable=true)
     */
    protected $account;

    /**
     *
     * @var integer
     * @Column(column="ctime", type="integer", length=11, nullable=true)
     */
    protected $ctime;

    /**
     *
     * @var integer
     * @Column(column="pay_time", type="integer", length=11, nullable=true)
     */
    protected $pay_time;

    /**
     *
     * @var string
     * @Column(column="pay_code", type="string", length=20, nullable=true)
     */
    protected $pay_code;

    /**
     *
     * @var string
     * @Column(column="pay_name", type="string", length=80, nullable=true)
     */
    protected $pay_name;

    /**
     *
     * @var integer
     * @Column(column="pay_status", type="integer", length=1, nullable=true)
     */
    protected $pay_status;

    /**
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field nickname
     *
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Method to set the value of field order_sn
     *
     * @param string $order_sn
     * @return $this
     */
    public function setOrderSn($order_sn)
    {
        $this->order_sn = $order_sn;

        return $this;
    }

    /**
     * Method to set the value of field account
     *
     * @param double $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Method to set the value of field ctime
     *
     * @param integer $ctime
     * @return $this
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Method to set the value of field pay_time
     *
     * @param integer $pay_time
     * @return $this
     */
    public function setPayTime($pay_time)
    {
        $this->pay_time = $pay_time;

        return $this;
    }

    /**
     * Method to set the value of field pay_code
     *
     * @param string $pay_code
     * @return $this
     */
    public function setPayCode($pay_code)
    {
        $this->pay_code = $pay_code;

        return $this;
    }

    /**
     * Method to set the value of field pay_name
     *
     * @param string $pay_name
     * @return $this
     */
    public function setPayName($pay_name)
    {
        $this->pay_name = $pay_name;

        return $this;
    }

    /**
     * Method to set the value of field pay_status
     *
     * @param integer $pay_status
     * @return $this
     */
    public function setPayStatus($pay_status)
    {
        $this->pay_status = $pay_status;

        return $this;
    }

    /**
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Returns the value of field order_sn
     *
     * @return string
     */
    public function getOrderSn()
    {
        return $this->order_sn;
    }

    /**
     * Returns the value of field account
     *
     * @return double
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Returns the value of field ctime
     *
     * @return integer
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Returns the value of field pay_time
     *
     * @return integer
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * Returns the value of field pay_code
     *
     * @return string
     */
    public function getPayCode()
    {
        return $this->pay_code;
    }

    /**
     * Returns the value of field pay_name
     *
     * @return string
     */
    public function getPayName()
    {
        return $this->pay_name;
    }

    /**
     * Returns the value of field pay_status
     *
     * @return integer
     */
    public function getPayStatus()
    {
        return $this->pay_status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("recharge");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'recharge';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Recharge[]|Recharge|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Recharge|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'order_id' => 'order_id',
            'user_id' => 'user_id',
            'nickname' => 'nickname',
            'order_sn' => 'order_sn',
            'account' => 'account',
            'ctime' => 'ctime',
            'pay_time' => 'pay_time',
            'pay_code' => 'pay_code',
            'pay_name' => 'pay_name',
            'pay_status' => 'pay_status'
        ];
    }

}

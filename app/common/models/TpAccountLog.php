<?php

namespace Shenxianshop\Models;

class TpAccountLog extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="log_id", type="integer", length=8, nullable=false)
     */
    protected $log_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var double
     * @Column(column="user_money", type="double", length=10, nullable=true)
     */
    protected $user_money;

    /**
     *
     * @var double
     * @Column(column="frozen_money", type="double", length=10, nullable=true)
     */
    protected $frozen_money;

    /**
     *
     * @var integer
     * @Column(column="pay_points", type="integer", length=9, nullable=false)
     */
    protected $pay_points;

    /**
     *
     * @var integer
     * @Column(column="change_time", type="integer", length=10, nullable=false)
     */
    protected $change_time;

    /**
     *
     * @var string
     * @Column(column="desc", type="string", length=255, nullable=false)
     */
    protected $desc;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=50, nullable=true)
     */
    protected $order_sn;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=10, nullable=true)
     */
    protected $order_id;

    /**
     * Method to set the value of field log_id
     *
     * @param integer $log_id
     * @return $this
     */
    public function setLogId($log_id)
    {
        $this->log_id = $log_id;

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
     * Method to set the value of field user_money
     *
     * @param double $user_money
     * @return $this
     */
    public function setUserMoney($user_money)
    {
        $this->user_money = $user_money;

        return $this;
    }

    /**
     * Method to set the value of field frozen_money
     *
     * @param double $frozen_money
     * @return $this
     */
    public function setFrozenMoney($frozen_money)
    {
        $this->frozen_money = $frozen_money;

        return $this;
    }

    /**
     * Method to set the value of field pay_points
     *
     * @param integer $pay_points
     * @return $this
     */
    public function setPayPoints($pay_points)
    {
        $this->pay_points = $pay_points;

        return $this;
    }

    /**
     * Method to set the value of field change_time
     *
     * @param integer $change_time
     * @return $this
     */
    public function setChangeTime($change_time)
    {
        $this->change_time = $change_time;

        return $this;
    }

    /**
     * Method to set the value of field desc
     *
     * @param string $desc
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

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
     * Returns the value of field log_id
     *
     * @return integer
     */
    public function getLogId()
    {
        return $this->log_id;
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
     * Returns the value of field user_money
     *
     * @return double
     */
    public function getUserMoney()
    {
        return $this->user_money;
    }

    /**
     * Returns the value of field frozen_money
     *
     * @return double
     */
    public function getFrozenMoney()
    {
        return $this->frozen_money;
    }

    /**
     * Returns the value of field pay_points
     *
     * @return integer
     */
    public function getPayPoints()
    {
        return $this->pay_points;
    }

    /**
     * Returns the value of field change_time
     *
     * @return integer
     */
    public function getChangeTime()
    {
        return $this->change_time;
    }

    /**
     * Returns the value of field desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
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
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_account_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_account_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAccountLog[]|TpAccountLog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAccountLog|\Phalcon\Mvc\Model\ResultInterface
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
            'log_id' => 'log_id',
            'user_id' => 'user_id',
            'user_money' => 'user_money',
            'frozen_money' => 'frozen_money',
            'pay_points' => 'pay_points',
            'change_time' => 'change_time',
            'desc' => 'desc',
            'order_sn' => 'order_sn',
            'order_id' => 'order_id'
        ];
    }

}

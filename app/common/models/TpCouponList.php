<?php

namespace Shenxianshop\Models;

class TpCouponList extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=8, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(column="cid", type="integer", length=8, nullable=false)
     */
    protected $cid;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=false)
     */
    protected $type;

    /**
     *
     * @var integer
     * @Column(column="uid", type="integer", length=8, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=8, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="use_time", type="integer", length=11, nullable=false)
     */
    protected $use_time;

    /**
     *
     * @var string
     * @Column(column="code", type="string", length=10, nullable=true)
     */
    protected $code;

    /**
     *
     * @var integer
     * @Column(column="send_time", type="integer", length=11, nullable=false)
     */
    protected $send_time;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=1, nullable=true)
     */
    protected $status;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field cid
     *
     * @param integer $cid
     * @return $this
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

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
     * Method to set the value of field use_time
     *
     * @param integer $use_time
     * @return $this
     */
    public function setUseTime($use_time)
    {
        $this->use_time = $use_time;

        return $this;
    }

    /**
     * Method to set the value of field code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Method to set the value of field send_time
     *
     * @param integer $send_time
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->send_time = $send_time;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field cid
     *
     * @return integer
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Returns the value of field type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
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
     * Returns the value of field use_time
     *
     * @return integer
     */
    public function getUseTime()
    {
        return $this->use_time;
    }

    /**
     * Returns the value of field code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the value of field send_time
     *
     * @return integer
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_coupon_list");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_coupon_list';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpCouponList[]|TpCouponList|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpCouponList|\Phalcon\Mvc\Model\ResultInterface
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
            'id' => 'id',
            'cid' => 'cid',
            'type' => 'type',
            'uid' => 'uid',
            'order_id' => 'order_id',
            'use_time' => 'use_time',
            'code' => 'code',
            'send_time' => 'send_time',
            'status' => 'status'
        ];
    }

}

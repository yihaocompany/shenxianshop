<?php

namespace Shenxianshop\Models;

class TpReturnGoods extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=11, nullable=true)
     */
    protected $order_id;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=1024, nullable=true)
     */
    protected $order_sn;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=11, nullable=true)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=true)
     */
    protected $type;

    /**
     *
     * @var string
     * @Column(column="reason", type="string", length=1024, nullable=true)
     */
    protected $reason;

    /**
     *
     * @var string
     * @Column(column="imgs", type="string", length=512, nullable=true)
     */
    protected $imgs;

    /**
     *
     * @var integer
     * @Column(column="addtime", type="integer", length=11, nullable=true)
     */
    protected $addtime;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=1, nullable=true)
     */
    protected $status;

    /**
     *
     * @var string
     * @Column(column="remark", type="string", length=1024, nullable=true)
     */
    protected $remark;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=11, nullable=true)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="spec_key", type="string", length=64, nullable=true)
     */
    protected $spec_key;

    /**
     *
     * @var string
     * @Column(column="seller_delivery", type="string", nullable=true)
     */
    protected $seller_delivery;

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
     * Method to set the value of field goods_id
     *
     * @param integer $goods_id
     * @return $this
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;

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
     * Method to set the value of field reason
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Method to set the value of field imgs
     *
     * @param string $imgs
     * @return $this
     */
    public function setImgs($imgs)
    {
        $this->imgs = $imgs;

        return $this;
    }

    /**
     * Method to set the value of field addtime
     *
     * @param integer $addtime
     * @return $this
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

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
     * Method to set the value of field remark
     *
     * @param string $remark
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

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
     * Method to set the value of field spec_key
     *
     * @param string $spec_key
     * @return $this
     */
    public function setSpecKey($spec_key)
    {
        $this->spec_key = $spec_key;

        return $this;
    }

    /**
     * Method to set the value of field seller_delivery
     *
     * @param string $seller_delivery
     * @return $this
     */
    public function setSellerDelivery($seller_delivery)
    {
        $this->seller_delivery = $seller_delivery;

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
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
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
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
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
     * Returns the value of field reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Returns the value of field imgs
     *
     * @return string
     */
    public function getImgs()
    {
        return $this->imgs;
    }

    /**
     * Returns the value of field addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
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
     * Returns the value of field remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
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
     * Returns the value of field spec_key
     *
     * @return string
     */
    public function getSpecKey()
    {
        return $this->spec_key;
    }

    /**
     * Returns the value of field seller_delivery
     *
     * @return string
     */
    public function getSellerDelivery()
    {
        return $this->seller_delivery;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_return_goods");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_return_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpReturnGoods[]|TpReturnGoods|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpReturnGoods|\Phalcon\Mvc\Model\ResultInterface
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
            'order_id' => 'order_id',
            'order_sn' => 'order_sn',
            'goods_id' => 'goods_id',
            'type' => 'type',
            'reason' => 'reason',
            'imgs' => 'imgs',
            'addtime' => 'addtime',
            'status' => 'status',
            'remark' => 'remark',
            'user_id' => 'user_id',
            'spec_key' => 'spec_key',
            'seller_delivery' => 'seller_delivery'
        ];
    }

}

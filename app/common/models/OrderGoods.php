<?php

namespace Shenxianshop\Models;

class OrderGoods extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="rec_id", type="integer", length=8, nullable=false)
     */
    protected $rec_id;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=8, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=8, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=120, nullable=false)
     */
    protected $goods_name;

    /**
     *
     * @var string
     * @Column(column="goods_sn", type="string", length=60, nullable=false)
     */
    protected $goods_sn;

    /**
     *
     * @var integer
     * @Column(column="goods_num", type="integer", length=5, nullable=false)
     */
    protected $goods_num;

    /**
     *
     * @var double
     * @Column(column="market_price", type="double", length=10, nullable=false)
     */
    protected $market_price;

    /**
     *
     * @var double
     * @Column(column="goods_price", type="double", length=10, nullable=false)
     */
    protected $goods_price;

    /**
     *
     * @var double
     * @Column(column="cost_price", type="double", length=10, nullable=true)
     */
    protected $cost_price;

    /**
     *
     * @var double
     * @Column(column="member_goods_price", type="double", length=10, nullable=true)
     */
    protected $member_goods_price;

    /**
     *
     * @var integer
     * @Column(column="give_integral", type="integer", length=8, nullable=true)
     */
    protected $give_integral;

    /**
     *
     * @var string
     * @Column(column="spec_key", type="string", length=128, nullable=false)
     */
    protected $spec_key;

    /**
     *
     * @var string
     * @Column(column="spec_key_name", type="string", length=128, nullable=false)
     */
    protected $spec_key_name;

    /**
     *
     * @var string
     * @Column(column="bar_code", type="string", length=64, nullable=false)
     */
    protected $bar_code;

    /**
     *
     * @var integer
     * @Column(column="is_comment", type="integer", length=1, nullable=true)
     */
    protected $is_comment;

    /**
     *
     * @var integer
     * @Column(column="prom_type", type="integer", length=1, nullable=true)
     */
    protected $prom_type;

    /**
     *
     * @var integer
     * @Column(column="prom_id", type="integer", length=11, nullable=true)
     */
    protected $prom_id;

    /**
     *
     * @var integer
     * @Column(column="is_send", type="integer", length=1, nullable=true)
     */
    protected $is_send;

    /**
     *
     * @var integer
     * @Column(column="delivery_id", type="integer", length=11, nullable=true)
     */
    protected $delivery_id;

    /**
     *
     * @var string
     * @Column(column="sku", type="string", length=128, nullable=true)
     */
    protected $sku;

    /**
     * Method to set the value of field rec_id
     *
     * @param integer $rec_id
     * @return $this
     */
    public function setRecId($rec_id)
    {
        $this->rec_id = $rec_id;

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
     * Method to set the value of field goods_name
     *
     * @param string $goods_name
     * @return $this
     */
    public function setGoodsName($goods_name)
    {
        $this->goods_name = $goods_name;

        return $this;
    }

    /**
     * Method to set the value of field goods_sn
     *
     * @param string $goods_sn
     * @return $this
     */
    public function setGoodsSn($goods_sn)
    {
        $this->goods_sn = $goods_sn;

        return $this;
    }

    /**
     * Method to set the value of field goods_num
     *
     * @param integer $goods_num
     * @return $this
     */
    public function setGoodsNum($goods_num)
    {
        $this->goods_num = $goods_num;

        return $this;
    }

    /**
     * Method to set the value of field market_price
     *
     * @param double $market_price
     * @return $this
     */
    public function setMarketPrice($market_price)
    {
        $this->market_price = $market_price;

        return $this;
    }

    /**
     * Method to set the value of field goods_price
     *
     * @param double $goods_price
     * @return $this
     */
    public function setGoodsPrice($goods_price)
    {
        $this->goods_price = $goods_price;

        return $this;
    }

    /**
     * Method to set the value of field cost_price
     *
     * @param double $cost_price
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->cost_price = $cost_price;

        return $this;
    }

    /**
     * Method to set the value of field member_goods_price
     *
     * @param double $member_goods_price
     * @return $this
     */
    public function setMemberGoodsPrice($member_goods_price)
    {
        $this->member_goods_price = $member_goods_price;

        return $this;
    }

    /**
     * Method to set the value of field give_integral
     *
     * @param integer $give_integral
     * @return $this
     */
    public function setGiveIntegral($give_integral)
    {
        $this->give_integral = $give_integral;

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
     * Method to set the value of field spec_key_name
     *
     * @param string $spec_key_name
     * @return $this
     */
    public function setSpecKeyName($spec_key_name)
    {
        $this->spec_key_name = $spec_key_name;

        return $this;
    }

    /**
     * Method to set the value of field bar_code
     *
     * @param string $bar_code
     * @return $this
     */
    public function setBarCode($bar_code)
    {
        $this->bar_code = $bar_code;

        return $this;
    }

    /**
     * Method to set the value of field is_comment
     *
     * @param integer $is_comment
     * @return $this
     */
    public function setIsComment($is_comment)
    {
        $this->is_comment = $is_comment;

        return $this;
    }

    /**
     * Method to set the value of field prom_type
     *
     * @param integer $prom_type
     * @return $this
     */
    public function setPromType($prom_type)
    {
        $this->prom_type = $prom_type;

        return $this;
    }

    /**
     * Method to set the value of field prom_id
     *
     * @param integer $prom_id
     * @return $this
     */
    public function setPromId($prom_id)
    {
        $this->prom_id = $prom_id;

        return $this;
    }

    /**
     * Method to set the value of field is_send
     *
     * @param integer $is_send
     * @return $this
     */
    public function setIsSend($is_send)
    {
        $this->is_send = $is_send;

        return $this;
    }

    /**
     * Method to set the value of field delivery_id
     *
     * @param integer $delivery_id
     * @return $this
     */
    public function setDeliveryId($delivery_id)
    {
        $this->delivery_id = $delivery_id;

        return $this;
    }

    /**
     * Method to set the value of field sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Returns the value of field rec_id
     *
     * @return integer
     */
    public function getRecId()
    {
        return $this->rec_id;
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
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Returns the value of field goods_name
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goods_name;
    }

    /**
     * Returns the value of field goods_sn
     *
     * @return string
     */
    public function getGoodsSn()
    {
        return $this->goods_sn;
    }

    /**
     * Returns the value of field goods_num
     *
     * @return integer
     */
    public function getGoodsNum()
    {
        return $this->goods_num;
    }

    /**
     * Returns the value of field market_price
     *
     * @return double
     */
    public function getMarketPrice()
    {
        return $this->market_price;
    }

    /**
     * Returns the value of field goods_price
     *
     * @return double
     */
    public function getGoodsPrice()
    {
        return $this->goods_price;
    }

    /**
     * Returns the value of field cost_price
     *
     * @return double
     */
    public function getCostPrice()
    {
        return $this->cost_price;
    }

    /**
     * Returns the value of field member_goods_price
     *
     * @return double
     */
    public function getMemberGoodsPrice()
    {
        return $this->member_goods_price;
    }

    /**
     * Returns the value of field give_integral
     *
     * @return integer
     */
    public function getGiveIntegral()
    {
        return $this->give_integral;
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
     * Returns the value of field spec_key_name
     *
     * @return string
     */
    public function getSpecKeyName()
    {
        return $this->spec_key_name;
    }

    /**
     * Returns the value of field bar_code
     *
     * @return string
     */
    public function getBarCode()
    {
        return $this->bar_code;
    }

    /**
     * Returns the value of field is_comment
     *
     * @return integer
     */
    public function getIsComment()
    {
        return $this->is_comment;
    }

    /**
     * Returns the value of field prom_type
     *
     * @return integer
     */
    public function getPromType()
    {
        return $this->prom_type;
    }

    /**
     * Returns the value of field prom_id
     *
     * @return integer
     */
    public function getPromId()
    {
        return $this->prom_id;
    }

    /**
     * Returns the value of field is_send
     *
     * @return integer
     */
    public function getIsSend()
    {
        return $this->is_send;
    }

    /**
     * Returns the value of field delivery_id
     *
     * @return integer
     */
    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    /**
     * Returns the value of field sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("order_goods");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrderGoods[]|OrderGoods|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrderGoods|\Phalcon\Mvc\Model\ResultInterface
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
            'rec_id' => 'rec_id',
            'order_id' => 'order_id',
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name',
            'goods_sn' => 'goods_sn',
            'goods_num' => 'goods_num',
            'market_price' => 'market_price',
            'goods_price' => 'goods_price',
            'cost_price' => 'cost_price',
            'member_goods_price' => 'member_goods_price',
            'give_integral' => 'give_integral',
            'spec_key' => 'spec_key',
            'spec_key_name' => 'spec_key_name',
            'bar_code' => 'bar_code',
            'is_comment' => 'is_comment',
            'prom_type' => 'prom_type',
            'prom_id' => 'prom_id',
            'is_send' => 'is_send',
            'delivery_id' => 'delivery_id',
            'sku' => 'sku'
        ];
    }

}

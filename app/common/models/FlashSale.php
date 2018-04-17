<?php

namespace Shenxianshop\Models;

class FlashSale extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="title", type="string", length=200, nullable=false)
     */
    protected $title;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=10, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var double
     * @Column(column="price", type="double", length=10, nullable=false)
     */
    protected $price;

    /**
     *
     * @var integer
     * @Column(column="goods_num", type="integer", length=10, nullable=true)
     */
    protected $goods_num;

    /**
     *
     * @var integer
     * @Column(column="buy_limit", type="integer", length=11, nullable=false)
     */
    protected $buy_limit;

    /**
     *
     * @var integer
     * @Column(column="buy_num", type="integer", length=11, nullable=false)
     */
    protected $buy_num;

    /**
     *
     * @var integer
     * @Column(column="order_num", type="integer", length=10, nullable=true)
     */
    protected $order_num;

    /**
     *
     * @var string
     * @Column(column="description", type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var integer
     * @Column(column="start_time", type="integer", length=11, nullable=false)
     */
    protected $start_time;

    /**
     *
     * @var integer
     * @Column(column="end_time", type="integer", length=11, nullable=false)
     */
    protected $end_time;

    /**
     *
     * @var integer
     * @Column(column="is_end", type="integer", length=1, nullable=true)
     */
    protected $is_end;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=255, nullable=true)
     */
    protected $goods_name;

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
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * Method to set the value of field price
     *
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

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
     * Method to set the value of field buy_limit
     *
     * @param integer $buy_limit
     * @return $this
     */
    public function setBuyLimit($buy_limit)
    {
        $this->buy_limit = $buy_limit;

        return $this;
    }

    /**
     * Method to set the value of field buy_num
     *
     * @param integer $buy_num
     * @return $this
     */
    public function setBuyNum($buy_num)
    {
        $this->buy_num = $buy_num;

        return $this;
    }

    /**
     * Method to set the value of field order_num
     *
     * @param integer $order_num
     * @return $this
     */
    public function setOrderNum($order_num)
    {
        $this->order_num = $order_num;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field start_time
     *
     * @param integer $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }

    /**
     * Method to set the value of field end_time
     *
     * @param integer $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    /**
     * Method to set the value of field is_end
     *
     * @param integer $is_end
     * @return $this
     */
    public function setIsEnd($is_end)
    {
        $this->is_end = $is_end;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * Returns the value of field price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
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
     * Returns the value of field buy_limit
     *
     * @return integer
     */
    public function getBuyLimit()
    {
        return $this->buy_limit;
    }

    /**
     * Returns the value of field buy_num
     *
     * @return integer
     */
    public function getBuyNum()
    {
        return $this->buy_num;
    }

    /**
     * Returns the value of field order_num
     *
     * @return integer
     */
    public function getOrderNum()
    {
        return $this->order_num;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field start_time
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Returns the value of field end_time
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Returns the value of field is_end
     *
     * @return integer
     */
    public function getIsEnd()
    {
        return $this->is_end;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("flash_sale");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'flash_sale';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FlashSale[]|FlashSale|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FlashSale|\Phalcon\Mvc\Model\ResultInterface
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
            'title' => 'title',
            'goods_id' => 'goods_id',
            'price' => 'price',
            'goods_num' => 'goods_num',
            'buy_limit' => 'buy_limit',
            'buy_num' => 'buy_num',
            'order_num' => 'order_num',
            'description' => 'description',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'is_end' => 'is_end',
            'goods_name' => 'goods_name'
        ];
    }

}

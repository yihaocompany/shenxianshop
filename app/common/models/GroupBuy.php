<?php

namespace Shenxianshop\Models;

class GroupBuy extends \Phalcon\Mvc\Model
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
     * @Column(column="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     *
     * @var integer
     * @Column(column="start_time", type="integer", length=10, nullable=false)
     */
    protected $start_time;

    /**
     *
     * @var integer
     * @Column(column="end_time", type="integer", length=10, nullable=false)
     */
    protected $end_time;

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
     * @Column(column="buy_num", type="integer", length=10, nullable=false)
     */
    protected $buy_num;

    /**
     *
     * @var integer
     * @Column(column="order_num", type="integer", length=10, nullable=false)
     */
    protected $order_num;

    /**
     *
     * @var integer
     * @Column(column="virtual_num", type="integer", length=10, nullable=false)
     */
    protected $virtual_num;

    /**
     *
     * @var double
     * @Column(column="rebate", type="double", length=10, nullable=false)
     */
    protected $rebate;

    /**
     *
     * @var string
     * @Column(column="intro", type="string", nullable=true)
     */
    protected $intro;

    /**
     *
     * @var double
     * @Column(column="goods_price", type="double", length=10, nullable=false)
     */
    protected $goods_price;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=200, nullable=false)
     */
    protected $goods_name;

    /**
     *
     * @var integer
     * @Column(column="recommended", type="integer", length=1, nullable=false)
     */
    protected $recommended;

    /**
     *
     * @var integer
     * @Column(column="views", type="integer", length=10, nullable=false)
     */
    protected $views;

    /**
     *
     * @var integer
     * @Column(column="is_end", type="integer", length=1, nullable=true)
     */
    protected $is_end;

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
     * Method to set the value of field virtual_num
     *
     * @param integer $virtual_num
     * @return $this
     */
    public function setVirtualNum($virtual_num)
    {
        $this->virtual_num = $virtual_num;

        return $this;
    }

    /**
     * Method to set the value of field rebate
     *
     * @param double $rebate
     * @return $this
     */
    public function setRebate($rebate)
    {
        $this->rebate = $rebate;

        return $this;
    }

    /**
     * Method to set the value of field intro
     *
     * @param string $intro
     * @return $this
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

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
     * Method to set the value of field recommended
     *
     * @param integer $recommended
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Method to set the value of field views
     *
     * @param integer $views
     * @return $this
     */
    public function setViews($views)
    {
        $this->views = $views;

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
     * Returns the value of field virtual_num
     *
     * @return integer
     */
    public function getVirtualNum()
    {
        return $this->virtual_num;
    }

    /**
     * Returns the value of field rebate
     *
     * @return double
     */
    public function getRebate()
    {
        return $this->rebate;
    }

    /**
     * Returns the value of field intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
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
     * Returns the value of field goods_name
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goods_name;
    }

    /**
     * Returns the value of field recommended
     *
     * @return integer
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Returns the value of field views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
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
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("group_buy");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'group_buy';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GroupBuy[]|GroupBuy|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GroupBuy|\Phalcon\Mvc\Model\ResultInterface
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
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'goods_id' => 'goods_id',
            'price' => 'price',
            'goods_num' => 'goods_num',
            'buy_num' => 'buy_num',
            'order_num' => 'order_num',
            'virtual_num' => 'virtual_num',
            'rebate' => 'rebate',
            'intro' => 'intro',
            'goods_price' => 'goods_price',
            'goods_name' => 'goods_name',
            'recommended' => 'recommended',
            'views' => 'views',
            'is_end' => 'is_end'
        ];
    }

}

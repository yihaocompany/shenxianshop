<?php

namespace Shenxianshop\Models;

class TpStockLog extends \Phalcon\Mvc\Model
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
     * @Column(column="goods_id", type="integer", length=11, nullable=true)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=100, nullable=true)
     */
    protected $goods_name;

    /**
     *
     * @var string
     * @Column(column="goods_spec", type="string", length=50, nullable=true)
     */
    protected $goods_spec;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=30, nullable=true)
     */
    protected $order_sn;

    /**
     *
     * @var integer
     * @Column(column="muid", type="integer", length=11, nullable=true)
     */
    protected $muid;

    /**
     *
     * @var integer
     * @Column(column="stock", type="integer", length=11, nullable=true)
     */
    protected $stock;

    /**
     *
     * @var integer
     * @Column(column="ctime", type="integer", length=11, nullable=true)
     */
    protected $ctime;

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
     * Method to set the value of field goods_spec
     *
     * @param string $goods_spec
     * @return $this
     */
    public function setGoodsSpec($goods_spec)
    {
        $this->goods_spec = $goods_spec;

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
     * Method to set the value of field muid
     *
     * @param integer $muid
     * @return $this
     */
    public function setMuid($muid)
    {
        $this->muid = $muid;

        return $this;
    }

    /**
     * Method to set the value of field stock
     *
     * @param integer $stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field goods_spec
     *
     * @return string
     */
    public function getGoodsSpec()
    {
        return $this->goods_spec;
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
     * Returns the value of field muid
     *
     * @return integer
     */
    public function getMuid()
    {
        return $this->muid;
    }

    /**
     * Returns the value of field stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_stock_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_stock_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpStockLog[]|TpStockLog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpStockLog|\Phalcon\Mvc\Model\ResultInterface
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
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name',
            'goods_spec' => 'goods_spec',
            'order_sn' => 'order_sn',
            'muid' => 'muid',
            'stock' => 'stock',
            'ctime' => 'ctime'
        ];
    }

}

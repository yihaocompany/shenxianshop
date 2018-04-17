<?php

namespace Shenxianshop\Models;

class SpecGoodsPrice extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=11, nullable=true)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="key", type="string", length=255, nullable=true)
     */
    protected $key;

    /**
     *
     * @var string
     * @Column(column="key_name", type="string", length=255, nullable=true)
     */
    protected $key_name;

    /**
     *
     * @var double
     * @Column(column="price", type="double", length=10, nullable=true)
     */
    protected $price;

    /**
     *
     * @var integer
     * @Column(column="store_count", type="integer", length=11, nullable=true)
     */
    protected $store_count;

    /**
     *
     * @var string
     * @Column(column="bar_code", type="string", length=32, nullable=true)
     */
    protected $bar_code;

    /**
     *
     * @var string
     * @Column(column="sku", type="string", length=128, nullable=true)
     */
    protected $sku;

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
     * Method to set the value of field key
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Method to set the value of field key_name
     *
     * @param string $key_name
     * @return $this
     */
    public function setKeyName($key_name)
    {
        $this->key_name = $key_name;

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
     * Method to set the value of field store_count
     *
     * @param integer $store_count
     * @return $this
     */
    public function setStoreCount($store_count)
    {
        $this->store_count = $store_count;

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
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Returns the value of field key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns the value of field key_name
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->key_name;
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
     * Returns the value of field store_count
     *
     * @return integer
     */
    public function getStoreCount()
    {
        return $this->store_count;
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
        $this->setSource("spec_goods_price");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'spec_goods_price';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpecGoodsPrice[]|SpecGoodsPrice|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpecGoodsPrice|\Phalcon\Mvc\Model\ResultInterface
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
            'goods_id' => 'goods_id',
            'key' => 'key',
            'key_name' => 'key_name',
            'price' => 'price',
            'store_count' => 'store_count',
            'bar_code' => 'bar_code',
            'sku' => 'sku'
        ];
    }

}

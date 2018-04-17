<?php

namespace Shenxianshop\Models;

class ShippingArea extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="shipping_area_id", type="integer", length=5, nullable=false)
     */
    protected $shipping_area_id;

    /**
     *
     * @var string
     * @Column(column="shipping_area_name", type="string", length=150, nullable=false)
     */
    protected $shipping_area_name;

    /**
     *
     * @var string
     * @Column(column="shipping_code", type="string", length=50, nullable=false)
     */
    protected $shipping_code;

    /**
     *
     * @var string
     * @Column(column="config", type="string", nullable=false)
     */
    protected $config;

    /**
     *
     * @var integer
     * @Column(column="update_time", type="integer", length=11, nullable=true)
     */
    protected $update_time;

    /**
     *
     * @var integer
     * @Column(column="is_default", type="integer", length=1, nullable=true)
     */
    protected $is_default;

    /**
     * Method to set the value of field shipping_area_id
     *
     * @param integer $shipping_area_id
     * @return $this
     */
    public function setShippingAreaId($shipping_area_id)
    {
        $this->shipping_area_id = $shipping_area_id;

        return $this;
    }

    /**
     * Method to set the value of field shipping_area_name
     *
     * @param string $shipping_area_name
     * @return $this
     */
    public function setShippingAreaName($shipping_area_name)
    {
        $this->shipping_area_name = $shipping_area_name;

        return $this;
    }

    /**
     * Method to set the value of field shipping_code
     *
     * @param string $shipping_code
     * @return $this
     */
    public function setShippingCode($shipping_code)
    {
        $this->shipping_code = $shipping_code;

        return $this;
    }

    /**
     * Method to set the value of field config
     *
     * @param string $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Method to set the value of field update_time
     *
     * @param integer $update_time
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;

        return $this;
    }

    /**
     * Method to set the value of field is_default
     *
     * @param integer $is_default
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->is_default = $is_default;

        return $this;
    }

    /**
     * Returns the value of field shipping_area_id
     *
     * @return integer
     */
    public function getShippingAreaId()
    {
        return $this->shipping_area_id;
    }

    /**
     * Returns the value of field shipping_area_name
     *
     * @return string
     */
    public function getShippingAreaName()
    {
        return $this->shipping_area_name;
    }

    /**
     * Returns the value of field shipping_code
     *
     * @return string
     */
    public function getShippingCode()
    {
        return $this->shipping_code;
    }

    /**
     * Returns the value of field config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Returns the value of field update_time
     *
     * @return integer
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Returns the value of field is_default
     *
     * @return integer
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("shipping_area");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shipping_area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ShippingArea[]|ShippingArea|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ShippingArea|\Phalcon\Mvc\Model\ResultInterface
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
            'shipping_area_id' => 'shipping_area_id',
            'shipping_area_name' => 'shipping_area_name',
            'shipping_code' => 'shipping_code',
            'config' => 'config',
            'update_time' => 'update_time',
            'is_default' => 'is_default'
        ];
    }

}

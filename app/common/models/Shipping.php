<?php

namespace Shenxianshop\Models;

class Shipping extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="shipping_id", type="integer", length=3, nullable=false)
     */
    protected $shipping_id;

    /**
     *
     * @var string
     * @Column(column="shipping_code", type="string", length=20, nullable=false)
     */
    protected $shipping_code;

    /**
     *
     * @var string
     * @Column(column="shipping_name", type="string", length=120, nullable=false)
     */
    protected $shipping_name;

    /**
     *
     * @var string
     * @Column(column="shipping_desc", type="string", length=255, nullable=false)
     */
    protected $shipping_desc;

    /**
     *
     * @var string
     * @Column(column="insure", type="string", length=10, nullable=false)
     */
    protected $insure;

    /**
     *
     * @var integer
     * @Column(column="enabled", type="integer", length=1, nullable=false)
     */
    protected $enabled;

    /**
     * Method to set the value of field shipping_id
     *
     * @param integer $shipping_id
     * @return $this
     */
    public function setShippingId($shipping_id)
    {
        $this->shipping_id = $shipping_id;

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
     * Method to set the value of field shipping_name
     *
     * @param string $shipping_name
     * @return $this
     */
    public function setShippingName($shipping_name)
    {
        $this->shipping_name = $shipping_name;

        return $this;
    }

    /**
     * Method to set the value of field shipping_desc
     *
     * @param string $shipping_desc
     * @return $this
     */
    public function setShippingDesc($shipping_desc)
    {
        $this->shipping_desc = $shipping_desc;

        return $this;
    }

    /**
     * Method to set the value of field insure
     *
     * @param string $insure
     * @return $this
     */
    public function setInsure($insure)
    {
        $this->insure = $insure;

        return $this;
    }

    /**
     * Method to set the value of field enabled
     *
     * @param integer $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Returns the value of field shipping_id
     *
     * @return integer
     */
    public function getShippingId()
    {
        return $this->shipping_id;
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
     * Returns the value of field shipping_name
     *
     * @return string
     */
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    /**
     * Returns the value of field shipping_desc
     *
     * @return string
     */
    public function getShippingDesc()
    {
        return $this->shipping_desc;
    }

    /**
     * Returns the value of field insure
     *
     * @return string
     */
    public function getInsure()
    {
        return $this->insure;
    }

    /**
     * Returns the value of field enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("shipping");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shipping';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Shipping[]|Shipping|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Shipping|\Phalcon\Mvc\Model\ResultInterface
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
            'shipping_id' => 'shipping_id',
            'shipping_code' => 'shipping_code',
            'shipping_name' => 'shipping_name',
            'shipping_desc' => 'shipping_desc',
            'insure' => 'insure',
            'enabled' => 'enabled'
        ];
    }

}

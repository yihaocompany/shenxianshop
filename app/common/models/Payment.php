<?php

namespace Shenxianshop\Models;

class Payment extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="pay_id", type="integer", length=3, nullable=false)
     */
    protected $pay_id;

    /**
     *
     * @var string
     * @Column(column="pay_code", type="string", length=20, nullable=false)
     */
    protected $pay_code;

    /**
     *
     * @var string
     * @Column(column="pay_name", type="string", length=120, nullable=false)
     */
    protected $pay_name;

    /**
     *
     * @var string
     * @Column(column="pay_fee", type="string", length=10, nullable=false)
     */
    protected $pay_fee;

    /**
     *
     * @var string
     * @Column(column="pay_desc", type="string", nullable=false)
     */
    protected $pay_desc;

    /**
     *
     * @var integer
     * @Column(column="pay_order", type="integer", length=3, nullable=false)
     */
    protected $pay_order;

    /**
     *
     * @var string
     * @Column(column="pay_config", type="string", nullable=false)
     */
    protected $pay_config;

    /**
     *
     * @var integer
     * @Column(column="enabled", type="integer", length=1, nullable=false)
     */
    protected $enabled;

    /**
     *
     * @var integer
     * @Column(column="is_cod", type="integer", length=1, nullable=false)
     */
    protected $is_cod;

    /**
     *
     * @var integer
     * @Column(column="is_online", type="integer", length=1, nullable=false)
     */
    protected $is_online;

    /**
     * Method to set the value of field pay_id
     *
     * @param integer $pay_id
     * @return $this
     */
    public function setPayId($pay_id)
    {
        $this->pay_id = $pay_id;

        return $this;
    }

    /**
     * Method to set the value of field pay_code
     *
     * @param string $pay_code
     * @return $this
     */
    public function setPayCode($pay_code)
    {
        $this->pay_code = $pay_code;

        return $this;
    }

    /**
     * Method to set the value of field pay_name
     *
     * @param string $pay_name
     * @return $this
     */
    public function setPayName($pay_name)
    {
        $this->pay_name = $pay_name;

        return $this;
    }

    /**
     * Method to set the value of field pay_fee
     *
     * @param string $pay_fee
     * @return $this
     */
    public function setPayFee($pay_fee)
    {
        $this->pay_fee = $pay_fee;

        return $this;
    }

    /**
     * Method to set the value of field pay_desc
     *
     * @param string $pay_desc
     * @return $this
     */
    public function setPayDesc($pay_desc)
    {
        $this->pay_desc = $pay_desc;

        return $this;
    }

    /**
     * Method to set the value of field pay_order
     *
     * @param integer $pay_order
     * @return $this
     */
    public function setPayOrder($pay_order)
    {
        $this->pay_order = $pay_order;

        return $this;
    }

    /**
     * Method to set the value of field pay_config
     *
     * @param string $pay_config
     * @return $this
     */
    public function setPayConfig($pay_config)
    {
        $this->pay_config = $pay_config;

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
     * Method to set the value of field is_cod
     *
     * @param integer $is_cod
     * @return $this
     */
    public function setIsCod($is_cod)
    {
        $this->is_cod = $is_cod;

        return $this;
    }

    /**
     * Method to set the value of field is_online
     *
     * @param integer $is_online
     * @return $this
     */
    public function setIsOnline($is_online)
    {
        $this->is_online = $is_online;

        return $this;
    }

    /**
     * Returns the value of field pay_id
     *
     * @return integer
     */
    public function getPayId()
    {
        return $this->pay_id;
    }

    /**
     * Returns the value of field pay_code
     *
     * @return string
     */
    public function getPayCode()
    {
        return $this->pay_code;
    }

    /**
     * Returns the value of field pay_name
     *
     * @return string
     */
    public function getPayName()
    {
        return $this->pay_name;
    }

    /**
     * Returns the value of field pay_fee
     *
     * @return string
     */
    public function getPayFee()
    {
        return $this->pay_fee;
    }

    /**
     * Returns the value of field pay_desc
     *
     * @return string
     */
    public function getPayDesc()
    {
        return $this->pay_desc;
    }

    /**
     * Returns the value of field pay_order
     *
     * @return integer
     */
    public function getPayOrder()
    {
        return $this->pay_order;
    }

    /**
     * Returns the value of field pay_config
     *
     * @return string
     */
    public function getPayConfig()
    {
        return $this->pay_config;
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
     * Returns the value of field is_cod
     *
     * @return integer
     */
    public function getIsCod()
    {
        return $this->is_cod;
    }

    /**
     * Returns the value of field is_online
     *
     * @return integer
     */
    public function getIsOnline()
    {
        return $this->is_online;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("payment");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'payment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Payment[]|Payment|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Payment|\Phalcon\Mvc\Model\ResultInterface
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
            'pay_id' => 'pay_id',
            'pay_code' => 'pay_code',
            'pay_name' => 'pay_name',
            'pay_fee' => 'pay_fee',
            'pay_desc' => 'pay_desc',
            'pay_order' => 'pay_order',
            'pay_config' => 'pay_config',
            'enabled' => 'enabled',
            'is_cod' => 'is_cod',
            'is_online' => 'is_online'
        ];
    }

}

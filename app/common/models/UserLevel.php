<?php

namespace Shenxianshop\Models;

class UserLevel extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="level_id", type="integer", length=4, nullable=false)
     */
    protected $level_id;

    /**
     *
     * @var string
     * @Column(column="level_name", type="string", length=30, nullable=true)
     */
    protected $level_name;

    /**
     *
     * @var double
     * @Column(column="amount", type="double", length=10, nullable=true)
     */
    protected $amount;

    /**
     *
     * @var integer
     * @Column(column="discount", type="integer", length=4, nullable=true)
     */
    protected $discount;

    /**
     *
     * @var string
     * @Column(column="describe", type="string", length=200, nullable=true)
     */
    protected $describe;

    /**
     * Method to set the value of field level_id
     *
     * @param integer $level_id
     * @return $this
     */
    public function setLevelId($level_id)
    {
        $this->level_id = $level_id;

        return $this;
    }

    /**
     * Method to set the value of field level_name
     *
     * @param string $level_name
     * @return $this
     */
    public function setLevelName($level_name)
    {
        $this->level_name = $level_name;

        return $this;
    }

    /**
     * Method to set the value of field amount
     *
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Method to set the value of field discount
     *
     * @param integer $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Method to set the value of field describe
     *
     * @param string $describe
     * @return $this
     */
    public function setDescribe($describe)
    {
        $this->describe = $describe;

        return $this;
    }

    /**
     * Returns the value of field level_id
     *
     * @return integer
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * Returns the value of field level_name
     *
     * @return string
     */
    public function getLevelName()
    {
        return $this->level_name;
    }

    /**
     * Returns the value of field amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Returns the value of field discount
     *
     * @return integer
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Returns the value of field describe
     *
     * @return string
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("user_level");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_level';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserLevel[]|UserLevel|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserLevel|\Phalcon\Mvc\Model\ResultInterface
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
            'level_id' => 'level_id',
            'level_name' => 'level_name',
            'amount' => 'amount',
            'discount' => 'discount',
            'describe' => 'describe'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class Coupon extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=8, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=50, nullable=false)
     */
    protected $name;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=false)
     */
    protected $type;

    /**
     *
     * @var double
     * @Column(column="money", type="double", length=10, nullable=false)
     */
    protected $money;

    /**
     *
     * @var double
     * @Column(column="condition", type="double", length=10, nullable=false)
     */
    protected $condition;

    /**
     *
     * @var integer
     * @Column(column="createnum", type="integer", length=11, nullable=true)
     */
    protected $createnum;

    /**
     *
     * @var integer
     * @Column(column="send_num", type="integer", length=11, nullable=true)
     */
    protected $send_num;

    /**
     *
     * @var integer
     * @Column(column="use_num", type="integer", length=11, nullable=true)
     */
    protected $use_num;

    /**
     *
     * @var integer
     * @Column(column="send_start_time", type="integer", length=11, nullable=true)
     */
    protected $send_start_time;

    /**
     *
     * @var integer
     * @Column(column="send_end_time", type="integer", length=11, nullable=true)
     */
    protected $send_end_time;

    /**
     *
     * @var integer
     * @Column(column="use_start_time", type="integer", length=11, nullable=true)
     */
    protected $use_start_time;

    /**
     *
     * @var integer
     * @Column(column="use_end_time", type="integer", length=11, nullable=true)
     */
    protected $use_end_time;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=11, nullable=true)
     */
    protected $add_time;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Method to set the value of field money
     *
     * @param double $money
     * @return $this
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Method to set the value of field condition
     *
     * @param double $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Method to set the value of field createnum
     *
     * @param integer $createnum
     * @return $this
     */
    public function setCreatenum($createnum)
    {
        $this->createnum = $createnum;

        return $this;
    }

    /**
     * Method to set the value of field send_num
     *
     * @param integer $send_num
     * @return $this
     */
    public function setSendNum($send_num)
    {
        $this->send_num = $send_num;

        return $this;
    }

    /**
     * Method to set the value of field use_num
     *
     * @param integer $use_num
     * @return $this
     */
    public function setUseNum($use_num)
    {
        $this->use_num = $use_num;

        return $this;
    }

    /**
     * Method to set the value of field send_start_time
     *
     * @param integer $send_start_time
     * @return $this
     */
    public function setSendStartTime($send_start_time)
    {
        $this->send_start_time = $send_start_time;

        return $this;
    }

    /**
     * Method to set the value of field send_end_time
     *
     * @param integer $send_end_time
     * @return $this
     */
    public function setSendEndTime($send_end_time)
    {
        $this->send_end_time = $send_end_time;

        return $this;
    }

    /**
     * Method to set the value of field use_start_time
     *
     * @param integer $use_start_time
     * @return $this
     */
    public function setUseStartTime($use_start_time)
    {
        $this->use_start_time = $use_start_time;

        return $this;
    }

    /**
     * Method to set the value of field use_end_time
     *
     * @param integer $use_end_time
     * @return $this
     */
    public function setUseEndTime($use_end_time)
    {
        $this->use_end_time = $use_end_time;

        return $this;
    }

    /**
     * Method to set the value of field add_time
     *
     * @param integer $add_time
     * @return $this
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field money
     *
     * @return double
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Returns the value of field condition
     *
     * @return double
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Returns the value of field createnum
     *
     * @return integer
     */
    public function getCreatenum()
    {
        return $this->createnum;
    }

    /**
     * Returns the value of field send_num
     *
     * @return integer
     */
    public function getSendNum()
    {
        return $this->send_num;
    }

    /**
     * Returns the value of field use_num
     *
     * @return integer
     */
    public function getUseNum()
    {
        return $this->use_num;
    }

    /**
     * Returns the value of field send_start_time
     *
     * @return integer
     */
    public function getSendStartTime()
    {
        return $this->send_start_time;
    }

    /**
     * Returns the value of field send_end_time
     *
     * @return integer
     */
    public function getSendEndTime()
    {
        return $this->send_end_time;
    }

    /**
     * Returns the value of field use_start_time
     *
     * @return integer
     */
    public function getUseStartTime()
    {
        return $this->use_start_time;
    }

    /**
     * Returns the value of field use_end_time
     *
     * @return integer
     */
    public function getUseEndTime()
    {
        return $this->use_end_time;
    }

    /**
     * Returns the value of field add_time
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("coupon");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'coupon';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Coupon[]|Coupon|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Coupon|\Phalcon\Mvc\Model\ResultInterface
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
            'name' => 'name',
            'type' => 'type',
            'money' => 'money',
            'condition' => 'condition',
            'createnum' => 'createnum',
            'send_num' => 'send_num',
            'use_num' => 'use_num',
            'send_start_time' => 'send_start_time',
            'send_end_time' => 'send_end_time',
            'use_start_time' => 'use_start_time',
            'use_end_time' => 'use_end_time',
            'add_time' => 'add_time'
        ];
    }

}

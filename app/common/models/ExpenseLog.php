<?php

namespace Shenxianshop\Models;

class ExpenseLog extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(column="admin_id", type="integer", length=11, nullable=true)
     */
    protected $admin_id;

    /**
     *
     * @var double
     * @Column(column="money", type="double", length=10, nullable=true)
     */
    protected $money;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=true)
     */
    protected $type;

    /**
     *
     * @var integer
     * @Column(column="addtime", type="integer", length=11, nullable=true)
     */
    protected $addtime;

    /**
     *
     * @var integer
     * @Column(column="log_type_id", type="integer", length=11, nullable=true)
     */
    protected $log_type_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=10, nullable=true)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(column="user_name", type="integer", length=10, nullable=true)
     */
    protected $user_name;

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
     * Method to set the value of field admin_id
     *
     * @param integer $admin_id
     * @return $this
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

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
     * Method to set the value of field addtime
     *
     * @param integer $addtime
     * @return $this
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Method to set the value of field log_type_id
     *
     * @param integer $log_type_id
     * @return $this
     */
    public function setLogTypeId($log_type_id)
    {
        $this->log_type_id = $log_type_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field user_name
     *
     * @param integer $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
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
     * Returns the value of field type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Returns the value of field log_type_id
     *
     * @return integer
     */
    public function getLogTypeId()
    {
        return $this->log_type_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field user_name
     *
     * @return integer
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("expense_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'expense_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExpenseLog[]|ExpenseLog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExpenseLog|\Phalcon\Mvc\Model\ResultInterface
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
            'admin_id' => 'admin_id',
            'money' => 'money',
            'type' => 'type',
            'addtime' => 'addtime',
            'log_type_id' => 'log_type_id',
            'user_id' => 'user_id',
            'user_name' => 'user_name'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class Remittance extends \Phalcon\Mvc\Model
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
     * @Column(column="user_id", type="integer", length=11, nullable=true)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="bank_name", type="string", length=32, nullable=true)
     */
    protected $bank_name;

    /**
     *
     * @var string
     * @Column(column="account_bank", type="string", length=32, nullable=true)
     */
    protected $account_bank;

    /**
     *
     * @var string
     * @Column(column="account_name", type="string", length=32, nullable=true)
     */
    protected $account_name;

    /**
     *
     * @var double
     * @Column(column="money", type="double", length=10, nullable=true)
     */
    protected $money;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=1, nullable=true)
     */
    protected $status;

    /**
     *
     * @var integer
     * @Column(column="create_time", type="integer", length=11, nullable=true)
     */
    protected $create_time;

    /**
     *
     * @var string
     * @Column(column="remark", type="string", length=1024, nullable=true)
     */
    protected $remark;

    /**
     *
     * @var integer
     * @Column(column="admin_id", type="integer", length=11, nullable=true)
     */
    protected $admin_id;

    /**
     *
     * @var integer
     * @Column(column="withdrawals_id", type="integer", length=11, nullable=true)
     */
    protected $withdrawals_id;

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
     * Method to set the value of field bank_name
     *
     * @param string $bank_name
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;

        return $this;
    }

    /**
     * Method to set the value of field account_bank
     *
     * @param string $account_bank
     * @return $this
     */
    public function setAccountBank($account_bank)
    {
        $this->account_bank = $account_bank;

        return $this;
    }

    /**
     * Method to set the value of field account_name
     *
     * @param string $account_name
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->account_name = $account_name;

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
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param integer $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Method to set the value of field remark
     *
     * @param string $remark
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

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
     * Method to set the value of field withdrawals_id
     *
     * @param integer $withdrawals_id
     * @return $this
     */
    public function setWithdrawalsId($withdrawals_id)
    {
        $this->withdrawals_id = $withdrawals_id;

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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Returns the value of field account_bank
     *
     * @return string
     */
    public function getAccountBank()
    {
        return $this->account_bank;
    }

    /**
     * Returns the value of field account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field create_time
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Returns the value of field remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
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
     * Returns the value of field withdrawals_id
     *
     * @return integer
     */
    public function getWithdrawalsId()
    {
        return $this->withdrawals_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("remittance");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'remittance';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Remittance[]|Remittance|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Remittance|\Phalcon\Mvc\Model\ResultInterface
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
            'user_id' => 'user_id',
            'bank_name' => 'bank_name',
            'account_bank' => 'account_bank',
            'account_name' => 'account_name',
            'money' => 'money',
            'status' => 'status',
            'create_time' => 'create_time',
            'remark' => 'remark',
            'admin_id' => 'admin_id',
            'withdrawals_id' => 'withdrawals_id'
        ];
    }

}

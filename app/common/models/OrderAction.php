<?php

namespace Shenxianshop\Models;

class OrderAction extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="action_id", type="integer", length=8, nullable=false)
     */
    protected $action_id;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=8, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="action_user", type="integer", length=11, nullable=true)
     */
    protected $action_user;

    /**
     *
     * @var integer
     * @Column(column="order_status", type="integer", length=1, nullable=false)
     */
    protected $order_status;

    /**
     *
     * @var integer
     * @Column(column="shipping_status", type="integer", length=1, nullable=false)
     */
    protected $shipping_status;

    /**
     *
     * @var integer
     * @Column(column="pay_status", type="integer", length=1, nullable=false)
     */
    protected $pay_status;

    /**
     *
     * @var string
     * @Column(column="action_note", type="string", length=255, nullable=false)
     */
    protected $action_note;

    /**
     *
     * @var integer
     * @Column(column="log_time", type="integer", length=11, nullable=false)
     */
    protected $log_time;

    /**
     *
     * @var string
     * @Column(column="status_desc", type="string", length=255, nullable=true)
     */
    protected $status_desc;

    /**
     * Method to set the value of field action_id
     *
     * @param integer $action_id
     * @return $this
     */
    public function setActionId($action_id)
    {
        $this->action_id = $action_id;

        return $this;
    }

    /**
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field action_user
     *
     * @param integer $action_user
     * @return $this
     */
    public function setActionUser($action_user)
    {
        $this->action_user = $action_user;

        return $this;
    }

    /**
     * Method to set the value of field order_status
     *
     * @param integer $order_status
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;

        return $this;
    }

    /**
     * Method to set the value of field shipping_status
     *
     * @param integer $shipping_status
     * @return $this
     */
    public function setShippingStatus($shipping_status)
    {
        $this->shipping_status = $shipping_status;

        return $this;
    }

    /**
     * Method to set the value of field pay_status
     *
     * @param integer $pay_status
     * @return $this
     */
    public function setPayStatus($pay_status)
    {
        $this->pay_status = $pay_status;

        return $this;
    }

    /**
     * Method to set the value of field action_note
     *
     * @param string $action_note
     * @return $this
     */
    public function setActionNote($action_note)
    {
        $this->action_note = $action_note;

        return $this;
    }

    /**
     * Method to set the value of field log_time
     *
     * @param integer $log_time
     * @return $this
     */
    public function setLogTime($log_time)
    {
        $this->log_time = $log_time;

        return $this;
    }

    /**
     * Method to set the value of field status_desc
     *
     * @param string $status_desc
     * @return $this
     */
    public function setStatusDesc($status_desc)
    {
        $this->status_desc = $status_desc;

        return $this;
    }

    /**
     * Returns the value of field action_id
     *
     * @return integer
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field action_user
     *
     * @return integer
     */
    public function getActionUser()
    {
        return $this->action_user;
    }

    /**
     * Returns the value of field order_status
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Returns the value of field shipping_status
     *
     * @return integer
     */
    public function getShippingStatus()
    {
        return $this->shipping_status;
    }

    /**
     * Returns the value of field pay_status
     *
     * @return integer
     */
    public function getPayStatus()
    {
        return $this->pay_status;
    }

    /**
     * Returns the value of field action_note
     *
     * @return string
     */
    public function getActionNote()
    {
        return $this->action_note;
    }

    /**
     * Returns the value of field log_time
     *
     * @return integer
     */
    public function getLogTime()
    {
        return $this->log_time;
    }

    /**
     * Returns the value of field status_desc
     *
     * @return string
     */
    public function getStatusDesc()
    {
        return $this->status_desc;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("order_action");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order_action';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrderAction[]|OrderAction|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OrderAction|\Phalcon\Mvc\Model\ResultInterface
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
            'action_id' => 'action_id',
            'order_id' => 'order_id',
            'action_user' => 'action_user',
            'order_status' => 'order_status',
            'shipping_status' => 'shipping_status',
            'pay_status' => 'pay_status',
            'action_note' => 'action_note',
            'log_time' => 'log_time',
            'status_desc' => 'status_desc'
        ];
    }

}

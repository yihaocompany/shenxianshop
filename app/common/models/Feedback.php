<?php

namespace Shenxianshop\Models;

class Feedback extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="msg_id", type="integer", length=8, nullable=false)
     */
    protected $msg_id;

    /**
     *
     * @var integer
     * @Column(column="parent_id", type="integer", length=8, nullable=false)
     */
    protected $parent_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="user_name", type="string", length=60, nullable=false)
     */
    protected $user_name;

    /**
     *
     * @var string
     * @Column(column="msg_title", type="string", length=200, nullable=false)
     */
    protected $msg_title;

    /**
     *
     * @var integer
     * @Column(column="msg_type", type="integer", length=1, nullable=false)
     */
    protected $msg_type;

    /**
     *
     * @var integer
     * @Column(column="msg_status", type="integer", length=1, nullable=false)
     */
    protected $msg_status;

    /**
     *
     * @var string
     * @Column(column="msg_content", type="string", nullable=false)
     */
    protected $msg_content;

    /**
     *
     * @var integer
     * @Column(column="msg_time", type="integer", length=10, nullable=false)
     */
    protected $msg_time;

    /**
     *
     * @var string
     * @Column(column="message_img", type="string", length=255, nullable=false)
     */
    protected $message_img;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=11, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="msg_area", type="integer", length=1, nullable=false)
     */
    protected $msg_area;

    /**
     * Method to set the value of field msg_id
     *
     * @param integer $msg_id
     * @return $this
     */
    public function setMsgId($msg_id)
    {
        $this->msg_id = $msg_id;

        return $this;
    }

    /**
     * Method to set the value of field parent_id
     *
     * @param integer $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

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
     * @param string $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Method to set the value of field msg_title
     *
     * @param string $msg_title
     * @return $this
     */
    public function setMsgTitle($msg_title)
    {
        $this->msg_title = $msg_title;

        return $this;
    }

    /**
     * Method to set the value of field msg_type
     *
     * @param integer $msg_type
     * @return $this
     */
    public function setMsgType($msg_type)
    {
        $this->msg_type = $msg_type;

        return $this;
    }

    /**
     * Method to set the value of field msg_status
     *
     * @param integer $msg_status
     * @return $this
     */
    public function setMsgStatus($msg_status)
    {
        $this->msg_status = $msg_status;

        return $this;
    }

    /**
     * Method to set the value of field msg_content
     *
     * @param string $msg_content
     * @return $this
     */
    public function setMsgContent($msg_content)
    {
        $this->msg_content = $msg_content;

        return $this;
    }

    /**
     * Method to set the value of field msg_time
     *
     * @param integer $msg_time
     * @return $this
     */
    public function setMsgTime($msg_time)
    {
        $this->msg_time = $msg_time;

        return $this;
    }

    /**
     * Method to set the value of field message_img
     *
     * @param string $message_img
     * @return $this
     */
    public function setMessageImg($message_img)
    {
        $this->message_img = $message_img;

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
     * Method to set the value of field msg_area
     *
     * @param integer $msg_area
     * @return $this
     */
    public function setMsgArea($msg_area)
    {
        $this->msg_area = $msg_area;

        return $this;
    }

    /**
     * Returns the value of field msg_id
     *
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * Returns the value of field parent_id
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parent_id;
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
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Returns the value of field msg_title
     *
     * @return string
     */
    public function getMsgTitle()
    {
        return $this->msg_title;
    }

    /**
     * Returns the value of field msg_type
     *
     * @return integer
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Returns the value of field msg_status
     *
     * @return integer
     */
    public function getMsgStatus()
    {
        return $this->msg_status;
    }

    /**
     * Returns the value of field msg_content
     *
     * @return string
     */
    public function getMsgContent()
    {
        return $this->msg_content;
    }

    /**
     * Returns the value of field msg_time
     *
     * @return integer
     */
    public function getMsgTime()
    {
        return $this->msg_time;
    }

    /**
     * Returns the value of field message_img
     *
     * @return string
     */
    public function getMessageImg()
    {
        return $this->message_img;
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
     * Returns the value of field msg_area
     *
     * @return integer
     */
    public function getMsgArea()
    {
        return $this->msg_area;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("feedback");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'feedback';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Feedback[]|Feedback|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Feedback|\Phalcon\Mvc\Model\ResultInterface
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
            'msg_id' => 'msg_id',
            'parent_id' => 'parent_id',
            'user_id' => 'user_id',
            'user_name' => 'user_name',
            'msg_title' => 'msg_title',
            'msg_type' => 'msg_type',
            'msg_status' => 'msg_status',
            'msg_content' => 'msg_content',
            'msg_time' => 'msg_time',
            'message_img' => 'message_img',
            'order_id' => 'order_id',
            'msg_area' => 'msg_area'
        ];
    }

}

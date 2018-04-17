<?php

namespace Shenxianshop\Models;

class TpMessage extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="message_id", type="integer", length=11, nullable=false)
     */
    protected $message_id;

    /**
     *
     * @var integer
     * @Column(column="admin_id", type="integer", length=5, nullable=false)
     */
    protected $admin_id;

    /**
     *
     * @var string
     * @Column(column="message", type="string", nullable=false)
     */
    protected $message;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=false)
     */
    protected $type;

    /**
     *
     * @var integer
     * @Column(column="category", type="integer", length=1, nullable=false)
     */
    protected $category;

    /**
     *
     * @var integer
     * @Column(column="send_time", type="integer", length=10, nullable=false)
     */
    protected $send_time;

    /**
     * Method to set the value of field message_id
     *
     * @param integer $message_id
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;

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
     * Method to set the value of field message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

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
     * Method to set the value of field category
     *
     * @param integer $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Method to set the value of field send_time
     *
     * @param integer $send_time
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->send_time = $send_time;

        return $this;
    }

    /**
     * Returns the value of field message_id
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->message_id;
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
     * Returns the value of field message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
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
     * Returns the value of field category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Returns the value of field send_time
     *
     * @return integer
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_message");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_message';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpMessage[]|TpMessage|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpMessage|\Phalcon\Mvc\Model\ResultInterface
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
            'message_id' => 'message_id',
            'admin_id' => 'admin_id',
            'message' => 'message',
            'type' => 'type',
            'category' => 'category',
            'send_time' => 'send_time'
        ];
    }

}

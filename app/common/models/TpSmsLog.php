<?php

namespace Shenxianshop\Models;

class TpSmsLog extends \Phalcon\Mvc\Model
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
     * @var string
     * @Column(column="mobile", type="string", length=11, nullable=true)
     */
    protected $mobile;

    /**
     *
     * @var string
     * @Column(column="session_id", type="string", length=128, nullable=true)
     */
    protected $session_id;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=11, nullable=true)
     */
    protected $add_time;

    /**
     *
     * @var string
     * @Column(column="code", type="string", length=10, nullable=true)
     */
    protected $code;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=1, nullable=false)
     */
    protected $status;

    /**
     *
     * @var string
     * @Column(column="msg", type="string", length=255, nullable=true)
     */
    protected $msg;

    /**
     *
     * @var integer
     * @Column(column="scene", type="integer", length=1, nullable=true)
     */
    protected $scene;

    /**
     *
     * @var string
     * @Column(column="error_msg", type="string", nullable=true)
     */
    protected $error_msg;

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
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field session_id
     *
     * @param string $session_id
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;

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
     * Method to set the value of field code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * Method to set the value of field msg
     *
     * @param string $msg
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Method to set the value of field scene
     *
     * @param integer $scene
     * @return $this
     */
    public function setScene($scene)
    {
        $this->scene = $scene;

        return $this;
    }

    /**
     * Method to set the value of field error_msg
     *
     * @param string $error_msg
     * @return $this
     */
    public function setErrorMsg($error_msg)
    {
        $this->error_msg = $error_msg;

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
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
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
     * Returns the value of field code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
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
     * Returns the value of field msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Returns the value of field scene
     *
     * @return integer
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Returns the value of field error_msg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->error_msg;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_sms_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_sms_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSmsLog[]|TpSmsLog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSmsLog|\Phalcon\Mvc\Model\ResultInterface
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
            'mobile' => 'mobile',
            'session_id' => 'session_id',
            'add_time' => 'add_time',
            'code' => 'code',
            'status' => 'status',
            'msg' => 'msg',
            'scene' => 'scene',
            'error_msg' => 'error_msg'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class SmsTemplate extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="tpl_id", type="integer", length=8, nullable=false)
     */
    protected $tpl_id;

    /**
     *
     * @var string
     * @Column(column="sms_sign", type="string", length=50, nullable=false)
     */
    protected $sms_sign;

    /**
     *
     * @var string
     * @Column(column="sms_tpl_code", type="string", length=100, nullable=false)
     */
    protected $sms_tpl_code;

    /**
     *
     * @var string
     * @Column(column="tpl_content", type="string", length=512, nullable=false)
     */
    protected $tpl_content;

    /**
     *
     * @var string
     * @Column(column="send_scene", type="string", length=100, nullable=false)
     */
    protected $send_scene;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=11, nullable=false)
     */
    protected $add_time;

    /**
     * Method to set the value of field tpl_id
     *
     * @param integer $tpl_id
     * @return $this
     */
    public function setTplId($tpl_id)
    {
        $this->tpl_id = $tpl_id;

        return $this;
    }

    /**
     * Method to set the value of field sms_sign
     *
     * @param string $sms_sign
     * @return $this
     */
    public function setSmsSign($sms_sign)
    {
        $this->sms_sign = $sms_sign;

        return $this;
    }

    /**
     * Method to set the value of field sms_tpl_code
     *
     * @param string $sms_tpl_code
     * @return $this
     */
    public function setSmsTplCode($sms_tpl_code)
    {
        $this->sms_tpl_code = $sms_tpl_code;

        return $this;
    }

    /**
     * Method to set the value of field tpl_content
     *
     * @param string $tpl_content
     * @return $this
     */
    public function setTplContent($tpl_content)
    {
        $this->tpl_content = $tpl_content;

        return $this;
    }

    /**
     * Method to set the value of field send_scene
     *
     * @param string $send_scene
     * @return $this
     */
    public function setSendScene($send_scene)
    {
        $this->send_scene = $send_scene;

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
     * Returns the value of field tpl_id
     *
     * @return integer
     */
    public function getTplId()
    {
        return $this->tpl_id;
    }

    /**
     * Returns the value of field sms_sign
     *
     * @return string
     */
    public function getSmsSign()
    {
        return $this->sms_sign;
    }

    /**
     * Returns the value of field sms_tpl_code
     *
     * @return string
     */
    public function getSmsTplCode()
    {
        return $this->sms_tpl_code;
    }

    /**
     * Returns the value of field tpl_content
     *
     * @return string
     */
    public function getTplContent()
    {
        return $this->tpl_content;
    }

    /**
     * Returns the value of field send_scene
     *
     * @return string
     */
    public function getSendScene()
    {
        return $this->send_scene;
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

        $this->setSource("sms_template");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sms_template';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SmsTemplate[]|SmsTemplate|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SmsTemplate|\Phalcon\Mvc\Model\ResultInterface
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
            'tpl_id' => 'tpl_id',
            'sms_sign' => 'sms_sign',
            'sms_tpl_code' => 'sms_tpl_code',
            'tpl_content' => 'tpl_content',
            'send_scene' => 'send_scene',
            'add_time' => 'add_time'
        ];
    }

}

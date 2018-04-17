<?php

namespace Shenxianshop\Models;

class WxMsg extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="msgid", type="integer", length=11, nullable=false)
     */
    protected $msgid;

    /**
     *
     * @var integer
     * @Column(column="admin_id", type="integer", length=11, nullable=false)
     */
    protected $admin_id;

    /**
     *
     * @var string
     * @Column(column="titile", type="string", length=100, nullable=false)
     */
    protected $titile;

    /**
     *
     * @var string
     * @Column(column="content", type="string", nullable=false)
     */
    protected $content;

    /**
     *
     * @var integer
     * @Column(column="createtime", type="integer", length=11, nullable=false)
     */
    protected $createtime;

    /**
     *
     * @var integer
     * @Column(column="sendtime", type="integer", length=11, nullable=false)
     */
    protected $sendtime;

    /**
     *
     * @var integer
     * @Column(column="issend", type="integer", length=1, nullable=true)
     */
    protected $issend;

    /**
     *
     * @var integer
     * @Column(column="sendtype", type="integer", length=1, nullable=true)
     */
    protected $sendtype;

    /**
     * Method to set the value of field msgid
     *
     * @param integer $msgid
     * @return $this
     */
    public function setMsgid($msgid)
    {
        $this->msgid = $msgid;

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
     * Method to set the value of field titile
     *
     * @param string $titile
     * @return $this
     */
    public function setTitile($titile)
    {
        $this->titile = $titile;

        return $this;
    }

    /**
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field createtime
     *
     * @param integer $createtime
     * @return $this
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Method to set the value of field sendtime
     *
     * @param integer $sendtime
     * @return $this
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Method to set the value of field issend
     *
     * @param integer $issend
     * @return $this
     */
    public function setIssend($issend)
    {
        $this->issend = $issend;

        return $this;
    }

    /**
     * Method to set the value of field sendtype
     *
     * @param integer $sendtype
     * @return $this
     */
    public function setSendtype($sendtype)
    {
        $this->sendtype = $sendtype;

        return $this;
    }

    /**
     * Returns the value of field msgid
     *
     * @return integer
     */
    public function getMsgid()
    {
        return $this->msgid;
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
     * Returns the value of field titile
     *
     * @return string
     */
    public function getTitile()
    {
        return $this->titile;
    }

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Returns the value of field sendtime
     *
     * @return integer
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * Returns the value of field issend
     *
     * @return integer
     */
    public function getIssend()
    {
        return $this->issend;
    }

    /**
     * Returns the value of field sendtype
     *
     * @return integer
     */
    public function getSendtype()
    {
        return $this->sendtype;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("wx_msg");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'wx_msg';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxMsg[]|WxMsg|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxMsg|\Phalcon\Mvc\Model\ResultInterface
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
            'msgid' => 'msgid',
            'admin_id' => 'admin_id',
            'titile' => 'titile',
            'content' => 'content',
            'createtime' => 'createtime',
            'sendtime' => 'sendtime',
            'issend' => 'issend',
            'sendtype' => 'sendtype'
        ];
    }

}

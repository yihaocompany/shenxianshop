<?php

namespace Shenxianshop\Models;

class WxText extends \Phalcon\Mvc\Model
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
     * @Column(column="uid", type="integer", length=11, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var string
     * @Column(column="uname", type="string", length=90, nullable=false)
     */
    protected $uname;

    /**
     *
     * @var string
     * @Column(column="keyword", type="string", length=255, nullable=false)
     */
    protected $keyword;

    /**
     *
     * @var integer
     * @Column(column="precisions", type="integer", length=1, nullable=false)
     */
    protected $precisions;

    /**
     *
     * @var string
     * @Column(column="text", type="string", nullable=false)
     */
    protected $text;

    /**
     *
     * @var string
     * @Column(column="createtime", type="string", length=13, nullable=false)
     */
    protected $createtime;

    /**
     *
     * @var string
     * @Column(column="updatetime", type="string", length=13, nullable=false)
     */
    protected $updatetime;

    /**
     *
     * @var integer
     * @Column(column="click", type="integer", length=11, nullable=false)
     */
    protected $click;

    /**
     *
     * @var string
     * @Column(column="token", type="string", length=30, nullable=false)
     */
    protected $token;

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
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field uname
     *
     * @param string $uname
     * @return $this
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Method to set the value of field keyword
     *
     * @param string $keyword
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Method to set the value of field precisions
     *
     * @param integer $precisions
     * @return $this
     */
    public function setPrecisions($precisions)
    {
        $this->precisions = $precisions;

        return $this;
    }

    /**
     * Method to set the value of field text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Method to set the value of field createtime
     *
     * @param string $createtime
     * @return $this
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Method to set the value of field updatetime
     *
     * @param string $updatetime
     * @return $this
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Method to set the value of field click
     *
     * @param integer $click
     * @return $this
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Method to set the value of field token
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

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
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Returns the value of field keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Returns the value of field precisions
     *
     * @return integer
     */
    public function getPrecisions()
    {
        return $this->precisions;
    }

    /**
     * Returns the value of field text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the value of field createtime
     *
     * @return string
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Returns the value of field updatetime
     *
     * @return string
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Returns the value of field click
     *
     * @return integer
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Returns the value of field token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("wx_text");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'wx_text';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxText[]|WxText|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxText|\Phalcon\Mvc\Model\ResultInterface
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
            'uid' => 'uid',
            'uname' => 'uname',
            'keyword' => 'keyword',
            'precisions' => 'precisions',
            'text' => 'text',
            'createtime' => 'createtime',
            'updatetime' => 'updatetime',
            'click' => 'click',
            'token' => 'token'
        ];
    }

}

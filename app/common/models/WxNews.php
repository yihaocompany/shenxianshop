<?php

namespace Shenxianshop\Models;

class WxNews extends \Phalcon\Mvc\Model
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
     * @Column(column="keyword", type="string", length=255, nullable=false)
     */
    protected $keyword;

    /**
     *
     * @var string
     * @Column(column="createtime", type="string", length=13, nullable=false)
     */
    protected $createtime;

    /**
     *
     * @var string
     * @Column(column="uptatetime", type="string", length=13, nullable=false)
     */
    protected $uptatetime;

    /**
     *
     * @var string
     * @Column(column="token", type="string", length=30, nullable=false)
     */
    protected $token;

    /**
     *
     * @var string
     * @Column(column="img_id", type="string", length=50, nullable=true)
     */
    protected $img_id;

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
     * Method to set the value of field uptatetime
     *
     * @param string $uptatetime
     * @return $this
     */
    public function setUptatetime($uptatetime)
    {
        $this->uptatetime = $uptatetime;

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
     * Method to set the value of field img_id
     *
     * @param string $img_id
     * @return $this
     */
    public function setImgId($img_id)
    {
        $this->img_id = $img_id;

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
     * Returns the value of field keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
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
     * Returns the value of field uptatetime
     *
     * @return string
     */
    public function getUptatetime()
    {
        return $this->uptatetime;
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
     * Returns the value of field img_id
     *
     * @return string
     */
    public function getImgId()
    {
        return $this->img_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("wx_news");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'wx_news';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxNews[]|WxNews|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return WxNews|\Phalcon\Mvc\Model\ResultInterface
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
            'keyword' => 'keyword',
            'createtime' => 'createtime',
            'uptatetime' => 'uptatetime',
            'token' => 'token',
            'img_id' => 'img_id'
        ];
    }

}

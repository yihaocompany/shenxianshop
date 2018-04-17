<?php

namespace Shenxianshop\Models;

class TpWxImg extends \Phalcon\Mvc\Model
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
     * @Column(column="desc", type="string", nullable=false)
     */
    protected $desc;

    /**
     *
     * @var string
     * @Column(column="pic", type="string", length=255, nullable=false)
     */
    protected $pic;

    /**
     *
     * @var string
     * @Column(column="url", type="string", length=255, nullable=false)
     */
    protected $url;

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
     * @Column(column="title", type="string", length=60, nullable=false)
     */
    protected $title;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=11, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=50, nullable=true)
     */
    protected $goods_name;

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
     * Method to set the value of field desc
     *
     * @param string $desc
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Method to set the value of field pic
     *
     * @param string $pic
     * @return $this
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field goods_id
     *
     * @param integer $goods_id
     * @return $this
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;

        return $this;
    }

    /**
     * Method to set the value of field goods_name
     *
     * @param string $goods_name
     * @return $this
     */
    public function setGoodsName($goods_name)
    {
        $this->goods_name = $goods_name;

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
     * Returns the value of field desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Returns the value of field pic
     *
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Returns the value of field goods_name
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goods_name;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_wx_img");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_wx_img';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpWxImg[]|TpWxImg|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpWxImg|\Phalcon\Mvc\Model\ResultInterface
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
            'desc' => 'desc',
            'pic' => 'pic',
            'url' => 'url',
            'createtime' => 'createtime',
            'uptatetime' => 'uptatetime',
            'token' => 'token',
            'title' => 'title',
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name'
        ];
    }

}

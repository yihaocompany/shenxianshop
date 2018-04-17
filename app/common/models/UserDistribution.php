<?php

namespace Shenxianshop\Models;

class UserDistribution extends \Phalcon\Mvc\Model
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
     * @Column(column="user_name", type="string", length=50, nullable=true)
     */
    protected $user_name;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=11, nullable=true)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=150, nullable=true)
     */
    protected $goods_name;

    /**
     *
     * @var integer
     * @Column(column="cat_id", type="integer", length=6, nullable=true)
     */
    protected $cat_id;

    /**
     *
     * @var integer
     * @Column(column="brand_id", type="integer", length=8, nullable=true)
     */
    protected $brand_id;

    /**
     *
     * @var integer
     * @Column(column="share_num", type="integer", length=10, nullable=true)
     */
    protected $share_num;

    /**
     *
     * @var integer
     * @Column(column="sales_num", type="integer", length=11, nullable=true)
     */
    protected $sales_num;

    /**
     *
     * @var integer
     * @Column(column="addtime", type="integer", length=11, nullable=true)
     */
    protected $addtime;

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
     * Method to set the value of field cat_id
     *
     * @param integer $cat_id
     * @return $this
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Method to set the value of field brand_id
     *
     * @param integer $brand_id
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Method to set the value of field share_num
     *
     * @param integer $share_num
     * @return $this
     */
    public function setShareNum($share_num)
    {
        $this->share_num = $share_num;

        return $this;
    }

    /**
     * Method to set the value of field sales_num
     *
     * @param integer $sales_num
     * @return $this
     */
    public function setSalesNum($sales_num)
    {
        $this->sales_num = $sales_num;

        return $this;
    }

    /**
     * Method to set the value of field addtime
     *
     * @param integer $addtime
     * @return $this
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

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
     * Returns the value of field user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
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
     * Returns the value of field cat_id
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Returns the value of field brand_id
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Returns the value of field share_num
     *
     * @return integer
     */
    public function getShareNum()
    {
        return $this->share_num;
    }

    /**
     * Returns the value of field sales_num
     *
     * @return integer
     */
    public function getSalesNum()
    {
        return $this->sales_num;
    }

    /**
     * Returns the value of field addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("user_distribution");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_distribution';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserDistribution[]|UserDistribution|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserDistribution|\Phalcon\Mvc\Model\ResultInterface
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
            'user_name' => 'user_name',
            'goods_id' => 'goods_id',
            'goods_name' => 'goods_name',
            'cat_id' => 'cat_id',
            'brand_id' => 'brand_id',
            'share_num' => 'share_num',
            'sales_num' => 'sales_num',
            'addtime' => 'addtime'
        ];
    }

}

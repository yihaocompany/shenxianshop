<?php

namespace Shenxianshop\Models;

class GoodsVisit extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="visit_id", type="integer", length=11, nullable=false)
     */
    protected $visit_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="goods_id", type="integer", length=11, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="user_id", type="integer", length=11, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(column="visittime", type="integer", length=11, nullable=false)
     */
    protected $visittime;

    /**
     *
     * @var integer
     * @Column(column="cat_id", type="integer", length=11, nullable=false)
     */
    protected $cat_id;

    /**
     *
     * @var integer
     * @Column(column="extend_cat_id", type="integer", length=11, nullable=false)
     */
    protected $extend_cat_id;

    /**
     * Method to set the value of field visit_id
     *
     * @param integer $visit_id
     * @return $this
     */
    public function setVisitId($visit_id)
    {
        $this->visit_id = $visit_id;

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
     * Method to set the value of field visittime
     *
     * @param integer $visittime
     * @return $this
     */
    public function setVisittime($visittime)
    {
        $this->visittime = $visittime;

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
     * Method to set the value of field extend_cat_id
     *
     * @param integer $extend_cat_id
     * @return $this
     */
    public function setExtendCatId($extend_cat_id)
    {
        $this->extend_cat_id = $extend_cat_id;

        return $this;
    }

    /**
     * Returns the value of field visit_id
     *
     * @return integer
     */
    public function getVisitId()
    {
        return $this->visit_id;
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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field visittime
     *
     * @return integer
     */
    public function getVisittime()
    {
        return $this->visittime;
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
     * Returns the value of field extend_cat_id
     *
     * @return integer
     */
    public function getExtendCatId()
    {
        return $this->extend_cat_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("goods_visit");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_visit';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsVisit[]|GoodsVisit|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsVisit|\Phalcon\Mvc\Model\ResultInterface
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
            'visit_id' => 'visit_id',
            'goods_id' => 'goods_id',
            'user_id' => 'user_id',
            'visittime' => 'visittime',
            'cat_id' => 'cat_id',
            'extend_cat_id' => 'extend_cat_id'
        ];
    }

}

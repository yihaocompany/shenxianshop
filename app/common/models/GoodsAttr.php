<?php

namespace Shenxianshop\Models;

class GoodsAttr extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="goods_attr_id", type="integer", length=10, nullable=false)
     */
    protected $goods_attr_id;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=8, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Column(column="attr_id", type="integer", length=5, nullable=false)
     */
    protected $attr_id;

    /**
     *
     * @var string
     * @Column(column="attr_value", type="string", nullable=false)
     */
    protected $attr_value;

    /**
     *
     * @var string
     * @Column(column="attr_price", type="string", length=255, nullable=false)
     */
    protected $attr_price;

    /**
     * Method to set the value of field goods_attr_id
     *
     * @param integer $goods_attr_id
     * @return $this
     */
    public function setGoodsAttrId($goods_attr_id)
    {
        $this->goods_attr_id = $goods_attr_id;

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
     * Method to set the value of field attr_id
     *
     * @param integer $attr_id
     * @return $this
     */
    public function setAttrId($attr_id)
    {
        $this->attr_id = $attr_id;

        return $this;
    }

    /**
     * Method to set the value of field attr_value
     *
     * @param string $attr_value
     * @return $this
     */
    public function setAttrValue($attr_value)
    {
        $this->attr_value = $attr_value;

        return $this;
    }

    /**
     * Method to set the value of field attr_price
     *
     * @param string $attr_price
     * @return $this
     */
    public function setAttrPrice($attr_price)
    {
        $this->attr_price = $attr_price;

        return $this;
    }

    /**
     * Returns the value of field goods_attr_id
     *
     * @return integer
     */
    public function getGoodsAttrId()
    {
        return $this->goods_attr_id;
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
     * Returns the value of field attr_id
     *
     * @return integer
     */
    public function getAttrId()
    {
        return $this->attr_id;
    }

    /**
     * Returns the value of field attr_value
     *
     * @return string
     */
    public function getAttrValue()
    {
        return $this->attr_value;
    }

    /**
     * Returns the value of field attr_price
     *
     * @return string
     */
    public function getAttrPrice()
    {
        return $this->attr_price;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("goods_attr");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_attr';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsAttr[]|GoodsAttr|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsAttr|\Phalcon\Mvc\Model\ResultInterface
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
            'goods_attr_id' => 'goods_attr_id',
            'goods_id' => 'goods_id',
            'attr_id' => 'attr_id',
            'attr_value' => 'attr_value',
            'attr_price' => 'attr_price'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class TpGoodsAttribute extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="attr_id", type="integer", length=11, nullable=false)
     */
    protected $attr_id;

    /**
     *
     * @var string
     * @Column(column="attr_name", type="string", length=60, nullable=false)
     */
    protected $attr_name;

    /**
     *
     * @var integer
     * @Column(column="type_id", type="integer", length=5, nullable=false)
     */
    protected $type_id;

    /**
     *
     * @var integer
     * @Column(column="attr_index", type="integer", length=1, nullable=false)
     */
    protected $attr_index;

    /**
     *
     * @var integer
     * @Column(column="attr_type", type="integer", length=1, nullable=false)
     */
    protected $attr_type;

    /**
     *
     * @var integer
     * @Column(column="attr_input_type", type="integer", length=1, nullable=false)
     */
    protected $attr_input_type;

    /**
     *
     * @var string
     * @Column(column="attr_values", type="string", nullable=false)
     */
    protected $attr_values;

    /**
     *
     * @var integer
     * @Column(column="order", type="integer", length=3, nullable=false)
     */
    protected $order;

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
     * Method to set the value of field attr_name
     *
     * @param string $attr_name
     * @return $this
     */
    public function setAttrName($attr_name)
    {
        $this->attr_name = $attr_name;

        return $this;
    }

    /**
     * Method to set the value of field type_id
     *
     * @param integer $type_id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Method to set the value of field attr_index
     *
     * @param integer $attr_index
     * @return $this
     */
    public function setAttrIndex($attr_index)
    {
        $this->attr_index = $attr_index;

        return $this;
    }

    /**
     * Method to set the value of field attr_type
     *
     * @param integer $attr_type
     * @return $this
     */
    public function setAttrType($attr_type)
    {
        $this->attr_type = $attr_type;

        return $this;
    }

    /**
     * Method to set the value of field attr_input_type
     *
     * @param integer $attr_input_type
     * @return $this
     */
    public function setAttrInputType($attr_input_type)
    {
        $this->attr_input_type = $attr_input_type;

        return $this;
    }

    /**
     * Method to set the value of field attr_values
     *
     * @param string $attr_values
     * @return $this
     */
    public function setAttrValues($attr_values)
    {
        $this->attr_values = $attr_values;

        return $this;
    }

    /**
     * Method to set the value of field order
     *
     * @param integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
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
     * Returns the value of field attr_name
     *
     * @return string
     */
    public function getAttrName()
    {
        return $this->attr_name;
    }

    /**
     * Returns the value of field type_id
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Returns the value of field attr_index
     *
     * @return integer
     */
    public function getAttrIndex()
    {
        return $this->attr_index;
    }

    /**
     * Returns the value of field attr_type
     *
     * @return integer
     */
    public function getAttrType()
    {
        return $this->attr_type;
    }

    /**
     * Returns the value of field attr_input_type
     *
     * @return integer
     */
    public function getAttrInputType()
    {
        return $this->attr_input_type;
    }

    /**
     * Returns the value of field attr_values
     *
     * @return string
     */
    public function getAttrValues()
    {
        return $this->attr_values;
    }

    /**
     * Returns the value of field order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_goods_attribute");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_goods_attribute';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpGoodsAttribute[]|TpGoodsAttribute|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpGoodsAttribute|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpGoodsAttribute|\Phalcon\Mvc\Model\ResultInterface
     */



    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'attr_id' => 'attr_id',
            'attr_name' => 'attr_name',
            'type_id' => 'type_id',
            'attr_index' => 'attr_index',
            'attr_type' => 'attr_type',
            'attr_input_type' => 'attr_input_type',
            'attr_values' => 'attr_values',
            'order' => 'order'
        ];
    }

}

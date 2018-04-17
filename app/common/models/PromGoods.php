<?php

namespace Shenxianshop\Models;

class PromGoods extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=20, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=60, nullable=false)
     */
    protected $name;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=2, nullable=false)
     */
    protected $type;

    /**
     *
     * @var string
     * @Column(column="expression", type="string", length=100, nullable=false)
     */
    protected $expression;

    /**
     *
     * @var string
     * @Column(column="description", type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var integer
     * @Column(column="start_time", type="integer", length=11, nullable=false)
     */
    protected $start_time;

    /**
     *
     * @var integer
     * @Column(column="end_time", type="integer", length=11, nullable=false)
     */
    protected $end_time;

    /**
     *
     * @var integer
     * @Column(column="is_close", type="integer", length=1, nullable=true)
     */
    protected $is_close;

    /**
     *
     * @var string
     * @Column(column="group", type="string", length=255, nullable=true)
     */
    protected $group;

    /**
     *
     * @var string
     * @Column(column="prom_img", type="string", length=150, nullable=true)
     */
    protected $prom_img;

    /**
     *
     * @var string
     * @Column(column="goods_ids", type="string", length=255, nullable=true)
     */
    protected $goods_ids;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field expression
     *
     * @param string $expression
     * @return $this
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field start_time
     *
     * @param integer $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }

    /**
     * Method to set the value of field end_time
     *
     * @param integer $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    /**
     * Method to set the value of field is_close
     *
     * @param integer $is_close
     * @return $this
     */
    public function setIsClose($is_close)
    {
        $this->is_close = $is_close;

        return $this;
    }

    /**
     * Method to set the value of field group
     *
     * @param string $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Method to set the value of field prom_img
     *
     * @param string $prom_img
     * @return $this
     */
    public function setPromImg($prom_img)
    {
        $this->prom_img = $prom_img;

        return $this;
    }

    /**
     * Method to set the value of field goods_ids
     *
     * @param string $goods_ids
     * @return $this
     */
    public function setGoodsIds($goods_ids)
    {
        $this->goods_ids = $goods_ids;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field expression
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field start_time
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Returns the value of field end_time
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Returns the value of field is_close
     *
     * @return integer
     */
    public function getIsClose()
    {
        return $this->is_close;
    }

    /**
     * Returns the value of field group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Returns the value of field prom_img
     *
     * @return string
     */
    public function getPromImg()
    {
        return $this->prom_img;
    }

    /**
     * Returns the value of field goods_ids
     *
     * @return string
     */
    public function getGoodsIds()
    {
        return $this->goods_ids;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("prom_goods");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'prom_goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromGoods[]|PromGoods|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PromGoods|\Phalcon\Mvc\Model\ResultInterface
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
            'name' => 'name',
            'type' => 'type',
            'expression' => 'expression',
            'description' => 'description',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'is_close' => 'is_close',
            'group' => 'group',
            'prom_img' => 'prom_img',
            'goods_ids' => 'goods_ids'
        ];
    }

}

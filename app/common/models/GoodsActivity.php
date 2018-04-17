<?php

namespace Shenxianshop\Models;

class GoodsActivity extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="act_id", type="integer", length=8, nullable=false)
     */
    protected $act_id;

    /**
     *
     * @var string
     * @Column(column="act_name", type="string", length=255, nullable=false)
     */
    protected $act_name;

    /**
     *
     * @var string
     * @Column(column="act_desc", type="string", nullable=false)
     */
    protected $act_desc;

    /**
     *
     * @var integer
     * @Column(column="act_type", type="integer", length=3, nullable=false)
     */
    protected $act_type;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=8, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Column(column="spec_id", type="integer", length=8, nullable=false)
     */
    protected $spec_id;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=255, nullable=false)
     */
    protected $goods_name;

    /**
     *
     * @var integer
     * @Column(column="start_time", type="integer", length=10, nullable=false)
     */
    protected $start_time;

    /**
     *
     * @var integer
     * @Column(column="end_time", type="integer", length=10, nullable=false)
     */
    protected $end_time;

    /**
     *
     * @var integer
     * @Column(column="is_finished", type="integer", length=3, nullable=false)
     */
    protected $is_finished;

    /**
     *
     * @var string
     * @Column(column="ext_info", type="string", nullable=false)
     */
    protected $ext_info;

    /**
     *
     * @var integer
     * @Column(column="act_count", type="integer", length=8, nullable=false)
     */
    protected $act_count;

    /**
     * Method to set the value of field act_id
     *
     * @param integer $act_id
     * @return $this
     */
    public function setActId($act_id)
    {
        $this->act_id = $act_id;

        return $this;
    }

    /**
     * Method to set the value of field act_name
     *
     * @param string $act_name
     * @return $this
     */
    public function setActName($act_name)
    {
        $this->act_name = $act_name;

        return $this;
    }

    /**
     * Method to set the value of field act_desc
     *
     * @param string $act_desc
     * @return $this
     */
    public function setActDesc($act_desc)
    {
        $this->act_desc = $act_desc;

        return $this;
    }

    /**
     * Method to set the value of field act_type
     *
     * @param integer $act_type
     * @return $this
     */
    public function setActType($act_type)
    {
        $this->act_type = $act_type;

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
     * Method to set the value of field spec_id
     *
     * @param integer $spec_id
     * @return $this
     */
    public function setSpecId($spec_id)
    {
        $this->spec_id = $spec_id;

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
     * Method to set the value of field is_finished
     *
     * @param integer $is_finished
     * @return $this
     */
    public function setIsFinished($is_finished)
    {
        $this->is_finished = $is_finished;

        return $this;
    }

    /**
     * Method to set the value of field ext_info
     *
     * @param string $ext_info
     * @return $this
     */
    public function setExtInfo($ext_info)
    {
        $this->ext_info = $ext_info;

        return $this;
    }

    /**
     * Method to set the value of field act_count
     *
     * @param integer $act_count
     * @return $this
     */
    public function setActCount($act_count)
    {
        $this->act_count = $act_count;

        return $this;
    }

    /**
     * Returns the value of field act_id
     *
     * @return integer
     */
    public function getActId()
    {
        return $this->act_id;
    }

    /**
     * Returns the value of field act_name
     *
     * @return string
     */
    public function getActName()
    {
        return $this->act_name;
    }

    /**
     * Returns the value of field act_desc
     *
     * @return string
     */
    public function getActDesc()
    {
        return $this->act_desc;
    }

    /**
     * Returns the value of field act_type
     *
     * @return integer
     */
    public function getActType()
    {
        return $this->act_type;
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
     * Returns the value of field spec_id
     *
     * @return integer
     */
    public function getSpecId()
    {
        return $this->spec_id;
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
     * Returns the value of field is_finished
     *
     * @return integer
     */
    public function getIsFinished()
    {
        return $this->is_finished;
    }

    /**
     * Returns the value of field ext_info
     *
     * @return string
     */
    public function getExtInfo()
    {
        return $this->ext_info;
    }

    /**
     * Returns the value of field act_count
     *
     * @return integer
     */
    public function getActCount()
    {
        return $this->act_count;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("goods_activity");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods_activity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsActivity[]|GoodsActivity|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsActivity|\Phalcon\Mvc\Model\ResultInterface
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
            'act_id' => 'act_id',
            'act_name' => 'act_name',
            'act_desc' => 'act_desc',
            'act_type' => 'act_type',
            'goods_id' => 'goods_id',
            'spec_id' => 'spec_id',
            'goods_name' => 'goods_name',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'is_finished' => 'is_finished',
            'ext_info' => 'ext_info',
            'act_count' => 'act_count'
        ];
    }

}

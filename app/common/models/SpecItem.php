<?php

namespace Shenxianshop\Models;

class SpecItem extends \Phalcon\Mvc\Model
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
     * @Column(column="spec_id", type="integer", length=11, nullable=true)
     */
    protected $spec_id;

    /**
     *
     * @var string
     * @Column(column="item", type="string", length=54, nullable=true)
     */
    protected $item;

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
     * Method to set the value of field item
     *
     * @param string $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->item = $item;

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
     * Returns the value of field spec_id
     *
     * @return integer
     */
    public function getSpecId()
    {
        return $this->spec_id;
    }

    /**
     * Returns the value of field item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("spec_item");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'spec_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpecItem[]|SpecItem|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpecItem|\Phalcon\Mvc\Model\ResultInterface
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
            'spec_id' => 'spec_id',
            'item' => 'item'
        ];
    }

}

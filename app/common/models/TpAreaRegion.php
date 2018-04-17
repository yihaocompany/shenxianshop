<?php

namespace Shenxianshop\Models;

class TpAreaRegion extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="shipping_area_id", type="integer", length=11, nullable=false)
     */
    protected $shipping_area_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(column="region_id", type="integer", length=11, nullable=false)
     */
    protected $region_id;

    /**
     * Method to set the value of field shipping_area_id
     *
     * @param integer $shipping_area_id
     * @return $this
     */
    public function setShippingAreaId($shipping_area_id)
    {
        $this->shipping_area_id = $shipping_area_id;

        return $this;
    }

    /**
     * Method to set the value of field region_id
     *
     * @param integer $region_id
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->region_id = $region_id;

        return $this;
    }

    /**
     * Returns the value of field shipping_area_id
     *
     * @return integer
     */
    public function getShippingAreaId()
    {
        return $this->shipping_area_id;
    }

    /**
     * Returns the value of field region_id
     *
     * @return integer
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_area_region");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_area_region';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAreaRegion[]|TpAreaRegion|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAreaRegion|\Phalcon\Mvc\Model\ResultInterface
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
            'shipping_area_id' => 'shipping_area_id',
            'region_id' => 'region_id'
        ];
    }

}

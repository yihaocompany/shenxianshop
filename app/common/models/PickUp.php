<?php

namespace Shenxianshop\Models;

class PickUp extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="pickup_id", type="integer", length=11, nullable=false)
     */
    protected $pickup_id;

    /**
     *
     * @var string
     * @Column(column="pickup_name", type="string", length=255, nullable=false)
     */
    protected $pickup_name;

    /**
     *
     * @var string
     * @Column(column="pickup_address", type="string", length=255, nullable=false)
     */
    protected $pickup_address;

    /**
     *
     * @var string
     * @Column(column="pickup_phone", type="string", length=30, nullable=false)
     */
    protected $pickup_phone;

    /**
     *
     * @var string
     * @Column(column="pickup_contact", type="string", length=20, nullable=false)
     */
    protected $pickup_contact;

    /**
     *
     * @var integer
     * @Column(column="province_id", type="integer", length=11, nullable=false)
     */
    protected $province_id;

    /**
     *
     * @var integer
     * @Column(column="city_id", type="integer", length=11, nullable=false)
     */
    protected $city_id;

    /**
     *
     * @var integer
     * @Column(column="district_id", type="integer", length=11, nullable=false)
     */
    protected $district_id;

    /**
     *
     * @var integer
     * @Column(column="suppliersid", type="integer", length=11, nullable=false)
     */
    protected $suppliersid;

    /**
     * Method to set the value of field pickup_id
     *
     * @param integer $pickup_id
     * @return $this
     */
    public function setPickupId($pickup_id)
    {
        $this->pickup_id = $pickup_id;

        return $this;
    }

    /**
     * Method to set the value of field pickup_name
     *
     * @param string $pickup_name
     * @return $this
     */
    public function setPickupName($pickup_name)
    {
        $this->pickup_name = $pickup_name;

        return $this;
    }

    /**
     * Method to set the value of field pickup_address
     *
     * @param string $pickup_address
     * @return $this
     */
    public function setPickupAddress($pickup_address)
    {
        $this->pickup_address = $pickup_address;

        return $this;
    }

    /**
     * Method to set the value of field pickup_phone
     *
     * @param string $pickup_phone
     * @return $this
     */
    public function setPickupPhone($pickup_phone)
    {
        $this->pickup_phone = $pickup_phone;

        return $this;
    }

    /**
     * Method to set the value of field pickup_contact
     *
     * @param string $pickup_contact
     * @return $this
     */
    public function setPickupContact($pickup_contact)
    {
        $this->pickup_contact = $pickup_contact;

        return $this;
    }

    /**
     * Method to set the value of field province_id
     *
     * @param integer $province_id
     * @return $this
     */
    public function setProvinceId($province_id)
    {
        $this->province_id = $province_id;

        return $this;
    }

    /**
     * Method to set the value of field city_id
     *
     * @param integer $city_id
     * @return $this
     */
    public function setCityId($city_id)
    {
        $this->city_id = $city_id;

        return $this;
    }

    /**
     * Method to set the value of field district_id
     *
     * @param integer $district_id
     * @return $this
     */
    public function setDistrictId($district_id)
    {
        $this->district_id = $district_id;

        return $this;
    }

    /**
     * Method to set the value of field suppliersid
     *
     * @param integer $suppliersid
     * @return $this
     */
    public function setSuppliersid($suppliersid)
    {
        $this->suppliersid = $suppliersid;

        return $this;
    }

    /**
     * Returns the value of field pickup_id
     *
     * @return integer
     */
    public function getPickupId()
    {
        return $this->pickup_id;
    }

    /**
     * Returns the value of field pickup_name
     *
     * @return string
     */
    public function getPickupName()
    {
        return $this->pickup_name;
    }

    /**
     * Returns the value of field pickup_address
     *
     * @return string
     */
    public function getPickupAddress()
    {
        return $this->pickup_address;
    }

    /**
     * Returns the value of field pickup_phone
     *
     * @return string
     */
    public function getPickupPhone()
    {
        return $this->pickup_phone;
    }

    /**
     * Returns the value of field pickup_contact
     *
     * @return string
     */
    public function getPickupContact()
    {
        return $this->pickup_contact;
    }

    /**
     * Returns the value of field province_id
     *
     * @return integer
     */
    public function getProvinceId()
    {
        return $this->province_id;
    }

    /**
     * Returns the value of field city_id
     *
     * @return integer
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * Returns the value of field district_id
     *
     * @return integer
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * Returns the value of field suppliersid
     *
     * @return integer
     */
    public function getSuppliersid()
    {
        return $this->suppliersid;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("pick_up");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pick_up';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PickUp[]|PickUp|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PickUp|\Phalcon\Mvc\Model\ResultInterface
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
            'pickup_id' => 'pickup_id',
            'pickup_name' => 'pickup_name',
            'pickup_address' => 'pickup_address',
            'pickup_phone' => 'pickup_phone',
            'pickup_contact' => 'pickup_contact',
            'province_id' => 'province_id',
            'city_id' => 'city_id',
            'district_id' => 'district_id',
            'suppliersid' => 'suppliersid'
        ];
    }

}

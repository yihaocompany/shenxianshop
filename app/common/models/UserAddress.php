<?php

namespace Shenxianshop\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class UserAddress extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="address_id", type="integer", length=8, nullable=false)
     */
    protected $address_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="consignee", type="string", length=60, nullable=false)
     */
    protected $consignee;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=60, nullable=false)
     */
    protected $email;

    /**
     *
     * @var integer
     * @Column(column="country", type="integer", length=11, nullable=false)
     */
    protected $country;

    /**
     *
     * @var integer
     * @Column(column="province", type="integer", length=11, nullable=false)
     */
    protected $province;

    /**
     *
     * @var integer
     * @Column(column="city", type="integer", length=11, nullable=false)
     */
    protected $city;

    /**
     *
     * @var integer
     * @Column(column="district", type="integer", length=11, nullable=false)
     */
    protected $district;

    /**
     *
     * @var integer
     * @Column(column="twon", type="integer", length=11, nullable=true)
     */
    protected $twon;

    /**
     *
     * @var string
     * @Column(column="address", type="string", length=120, nullable=false)
     */
    protected $address;

    /**
     *
     * @var string
     * @Column(column="zipcode", type="string", length=60, nullable=false)
     */
    protected $zipcode;

    /**
     *
     * @var string
     * @Column(column="mobile", type="string", length=60, nullable=false)
     */
    protected $mobile;

    /**
     *
     * @var integer
     * @Column(column="is_default", type="integer", length=1, nullable=true)
     */
    protected $is_default;

    /**
     *
     * @var integer
     * @Column(column="is_pickup", type="integer", length=1, nullable=true)
     */
    protected $is_pickup;

    /**
     * Method to set the value of field address_id
     *
     * @param integer $address_id
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->address_id = $address_id;

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
     * Method to set the value of field consignee
     *
     * @param string $consignee
     * @return $this
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param integer $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field province
     *
     * @param integer $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Method to set the value of field city
     *
     * @param integer $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Method to set the value of field district
     *
     * @param integer $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Method to set the value of field twon
     *
     * @param integer $twon
     * @return $this
     */
    public function setTwon($twon)
    {
        $this->twon = $twon;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field zipcode
     *
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field is_default
     *
     * @param integer $is_default
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->is_default = $is_default;

        return $this;
    }

    /**
     * Method to set the value of field is_pickup
     *
     * @param integer $is_pickup
     * @return $this
     */
    public function setIsPickup($is_pickup)
    {
        $this->is_pickup = $is_pickup;

        return $this;
    }

    /**
     * Returns the value of field address_id
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->address_id;
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
     * Returns the value of field consignee
     *
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field country
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field province
     *
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Returns the value of field city
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the value of field district
     *
     * @return integer
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Returns the value of field twon
     *
     * @return integer
     */
    public function getTwon()
    {
        return $this->twon;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field is_default
     *
     * @return integer
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Returns the value of field is_pickup
     *
     * @return integer
     */
    public function getIsPickup()
    {
        return $this->is_pickup;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("user_address");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_address';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAddress[]|UserAddress|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAddress|\Phalcon\Mvc\Model\ResultInterface
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
            'address_id' => 'address_id',
            'user_id' => 'user_id',
            'consignee' => 'consignee',
            'email' => 'email',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'twon' => 'twon',
            'address' => 'address',
            'zipcode' => 'zipcode',
            'mobile' => 'mobile',
            'is_default' => 'is_default',
            'is_pickup' => 'is_pickup'
        ];
    }

}

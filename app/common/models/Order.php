<?php

namespace Shenxianshop\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Order extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="order_id", type="integer", length=8, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=20, nullable=false)
     */
    protected $order_sn;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(column="order_status", type="integer", length=1, nullable=false)
     */
    protected $order_status;

    /**
     *
     * @var integer
     * @Column(column="shipping_status", type="integer", length=1, nullable=false)
     */
    protected $shipping_status;

    /**
     *
     * @var integer
     * @Column(column="pay_status", type="integer", length=1, nullable=false)
     */
    protected $pay_status;

    /**
     *
     * @var string
     * @Column(column="consignee", type="string", length=60, nullable=false)
     */
    protected $consignee;

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
     * @Column(column="address", type="string", length=255, nullable=false)
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
     * @var string
     * @Column(column="email", type="string", length=60, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(column="shipping_code", type="string", length=32, nullable=false)
     */
    protected $shipping_code;

    /**
     *
     * @var string
     * @Column(column="shipping_name", type="string", length=120, nullable=false)
     */
    protected $shipping_name;

    /**
     *
     * @var string
     * @Column(column="pay_code", type="string", length=32, nullable=false)
     */
    protected $pay_code;

    /**
     *
     * @var string
     * @Column(column="pay_name", type="string", length=120, nullable=false)
     */
    protected $pay_name;

    /**
     *
     * @var string
     * @Column(column="invoice_title", type="string", length=256, nullable=true)
     */
    protected $invoice_title;

    /**
     *
     * @var double
     * @Column(column="goods_price", type="double", length=10, nullable=false)
     */
    protected $goods_price;

    /**
     *
     * @var double
     * @Column(column="shipping_price", type="double", length=10, nullable=false)
     */
    protected $shipping_price;

    /**
     *
     * @var double
     * @Column(column="user_money", type="double", length=10, nullable=false)
     */
    protected $user_money;

    /**
     *
     * @var double
     * @Column(column="coupon_price", type="double", length=10, nullable=true)
     */
    protected $coupon_price;

    /**
     *
     * @var integer
     * @Column(column="integral", type="integer", length=10, nullable=false)
     */
    protected $integral;

    /**
     *
     * @var double
     * @Column(column="integral_money", type="double", length=10, nullable=false)
     */
    protected $integral_money;

    /**
     *
     * @var double
     * @Column(column="order_amount", type="double", length=10, nullable=false)
     */
    protected $order_amount;

    /**
     *
     * @var double
     * @Column(column="total_amount", type="double", length=10, nullable=true)
     */
    protected $total_amount;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=10, nullable=false)
     */
    protected $add_time;

    /**
     *
     * @var integer
     * @Column(column="shipping_time", type="integer", length=11, nullable=true)
     */
    protected $shipping_time;

    /**
     *
     * @var integer
     * @Column(column="confirm_time", type="integer", length=10, nullable=true)
     */
    protected $confirm_time;

    /**
     *
     * @var integer
     * @Column(column="pay_time", type="integer", length=10, nullable=false)
     */
    protected $pay_time;

    /**
     *
     * @var integer
     * @Column(column="order_prom_type", type="integer", length=4, nullable=true)
     */
    protected $order_prom_type;

    /**
     *
     * @var integer
     * @Column(column="order_prom_id", type="integer", length=6, nullable=false)
     */
    protected $order_prom_id;

    /**
     *
     * @var double
     * @Column(column="order_prom_amount", type="double", length=10, nullable=false)
     */
    protected $order_prom_amount;

    /**
     *
     * @var double
     * @Column(column="discount", type="double", length=10, nullable=false)
     */
    protected $discount;

    /**
     *
     * @var string
     * @Column(column="user_note", type="string", length=255, nullable=false)
     */
    protected $user_note;

    /**
     *
     * @var string
     * @Column(column="admin_note", type="string", length=255, nullable=true)
     */
    protected $admin_note;

    /**
     *
     * @var string
     * @Column(column="parent_sn", type="string", length=100, nullable=true)
     */
    protected $parent_sn;

    /**
     *
     * @var integer
     * @Column(column="is_distribut", type="integer", length=1, nullable=true)
     */
    protected $is_distribut;

    /**
     *
     * @var double
     * @Column(column="paid_money", type="double", length=10, nullable=true)
     */
    protected $paid_money;

    /**
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field order_sn
     *
     * @param string $order_sn
     * @return $this
     */
    public function setOrderSn($order_sn)
    {
        $this->order_sn = $order_sn;

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
     * Method to set the value of field order_status
     *
     * @param integer $order_status
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;

        return $this;
    }

    /**
     * Method to set the value of field shipping_status
     *
     * @param integer $shipping_status
     * @return $this
     */
    public function setShippingStatus($shipping_status)
    {
        $this->shipping_status = $shipping_status;

        return $this;
    }

    /**
     * Method to set the value of field pay_status
     *
     * @param integer $pay_status
     * @return $this
     */
    public function setPayStatus($pay_status)
    {
        $this->pay_status = $pay_status;

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
     * Method to set the value of field shipping_code
     *
     * @param string $shipping_code
     * @return $this
     */
    public function setShippingCode($shipping_code)
    {
        $this->shipping_code = $shipping_code;

        return $this;
    }

    /**
     * Method to set the value of field shipping_name
     *
     * @param string $shipping_name
     * @return $this
     */
    public function setShippingName($shipping_name)
    {
        $this->shipping_name = $shipping_name;

        return $this;
    }

    /**
     * Method to set the value of field pay_code
     *
     * @param string $pay_code
     * @return $this
     */
    public function setPayCode($pay_code)
    {
        $this->pay_code = $pay_code;

        return $this;
    }

    /**
     * Method to set the value of field pay_name
     *
     * @param string $pay_name
     * @return $this
     */
    public function setPayName($pay_name)
    {
        $this->pay_name = $pay_name;

        return $this;
    }

    /**
     * Method to set the value of field invoice_title
     *
     * @param string $invoice_title
     * @return $this
     */
    public function setInvoiceTitle($invoice_title)
    {
        $this->invoice_title = $invoice_title;

        return $this;
    }

    /**
     * Method to set the value of field goods_price
     *
     * @param double $goods_price
     * @return $this
     */
    public function setGoodsPrice($goods_price)
    {
        $this->goods_price = $goods_price;

        return $this;
    }

    /**
     * Method to set the value of field shipping_price
     *
     * @param double $shipping_price
     * @return $this
     */
    public function setShippingPrice($shipping_price)
    {
        $this->shipping_price = $shipping_price;

        return $this;
    }

    /**
     * Method to set the value of field user_money
     *
     * @param double $user_money
     * @return $this
     */
    public function setUserMoney($user_money)
    {
        $this->user_money = $user_money;

        return $this;
    }

    /**
     * Method to set the value of field coupon_price
     *
     * @param double $coupon_price
     * @return $this
     */
    public function setCouponPrice($coupon_price)
    {
        $this->coupon_price = $coupon_price;

        return $this;
    }

    /**
     * Method to set the value of field integral
     *
     * @param integer $integral
     * @return $this
     */
    public function setIntegral($integral)
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * Method to set the value of field integral_money
     *
     * @param double $integral_money
     * @return $this
     */
    public function setIntegralMoney($integral_money)
    {
        $this->integral_money = $integral_money;

        return $this;
    }

    /**
     * Method to set the value of field order_amount
     *
     * @param double $order_amount
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {
        $this->order_amount = $order_amount;

        return $this;
    }

    /**
     * Method to set the value of field total_amount
     *
     * @param double $total_amount
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;

        return $this;
    }

    /**
     * Method to set the value of field add_time
     *
     * @param integer $add_time
     * @return $this
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;

        return $this;
    }

    /**
     * Method to set the value of field shipping_time
     *
     * @param integer $shipping_time
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->shipping_time = $shipping_time;

        return $this;
    }

    /**
     * Method to set the value of field confirm_time
     *
     * @param integer $confirm_time
     * @return $this
     */
    public function setConfirmTime($confirm_time)
    {
        $this->confirm_time = $confirm_time;

        return $this;
    }

    /**
     * Method to set the value of field pay_time
     *
     * @param integer $pay_time
     * @return $this
     */
    public function setPayTime($pay_time)
    {
        $this->pay_time = $pay_time;

        return $this;
    }

    /**
     * Method to set the value of field order_prom_type
     *
     * @param integer $order_prom_type
     * @return $this
     */
    public function setOrderPromType($order_prom_type)
    {
        $this->order_prom_type = $order_prom_type;

        return $this;
    }

    /**
     * Method to set the value of field order_prom_id
     *
     * @param integer $order_prom_id
     * @return $this
     */
    public function setOrderPromId($order_prom_id)
    {
        $this->order_prom_id = $order_prom_id;

        return $this;
    }

    /**
     * Method to set the value of field order_prom_amount
     *
     * @param double $order_prom_amount
     * @return $this
     */
    public function setOrderPromAmount($order_prom_amount)
    {
        $this->order_prom_amount = $order_prom_amount;

        return $this;
    }

    /**
     * Method to set the value of field discount
     *
     * @param double $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Method to set the value of field user_note
     *
     * @param string $user_note
     * @return $this
     */
    public function setUserNote($user_note)
    {
        $this->user_note = $user_note;

        return $this;
    }

    /**
     * Method to set the value of field admin_note
     *
     * @param string $admin_note
     * @return $this
     */
    public function setAdminNote($admin_note)
    {
        $this->admin_note = $admin_note;

        return $this;
    }

    /**
     * Method to set the value of field parent_sn
     *
     * @param string $parent_sn
     * @return $this
     */
    public function setParentSn($parent_sn)
    {
        $this->parent_sn = $parent_sn;

        return $this;
    }

    /**
     * Method to set the value of field is_distribut
     *
     * @param integer $is_distribut
     * @return $this
     */
    public function setIsDistribut($is_distribut)
    {
        $this->is_distribut = $is_distribut;

        return $this;
    }

    /**
     * Method to set the value of field paid_money
     *
     * @param double $paid_money
     * @return $this
     */
    public function setPaidMoney($paid_money)
    {
        $this->paid_money = $paid_money;

        return $this;
    }

    /**
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field order_sn
     *
     * @return string
     */
    public function getOrderSn()
    {
        return $this->order_sn;
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
     * Returns the value of field order_status
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Returns the value of field shipping_status
     *
     * @return integer
     */
    public function getShippingStatus()
    {
        return $this->shipping_status;
    }

    /**
     * Returns the value of field pay_status
     *
     * @return integer
     */
    public function getPayStatus()
    {
        return $this->pay_status;
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
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field shipping_code
     *
     * @return string
     */
    public function getShippingCode()
    {
        return $this->shipping_code;
    }

    /**
     * Returns the value of field shipping_name
     *
     * @return string
     */
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    /**
     * Returns the value of field pay_code
     *
     * @return string
     */
    public function getPayCode()
    {
        return $this->pay_code;
    }

    /**
     * Returns the value of field pay_name
     *
     * @return string
     */
    public function getPayName()
    {
        return $this->pay_name;
    }

    /**
     * Returns the value of field invoice_title
     *
     * @return string
     */
    public function getInvoiceTitle()
    {
        return $this->invoice_title;
    }

    /**
     * Returns the value of field goods_price
     *
     * @return double
     */
    public function getGoodsPrice()
    {
        return $this->goods_price;
    }

    /**
     * Returns the value of field shipping_price
     *
     * @return double
     */
    public function getShippingPrice()
    {
        return $this->shipping_price;
    }

    /**
     * Returns the value of field user_money
     *
     * @return double
     */
    public function getUserMoney()
    {
        return $this->user_money;
    }

    /**
     * Returns the value of field coupon_price
     *
     * @return double
     */
    public function getCouponPrice()
    {
        return $this->coupon_price;
    }

    /**
     * Returns the value of field integral
     *
     * @return integer
     */
    public function getIntegral()
    {
        return $this->integral;
    }

    /**
     * Returns the value of field integral_money
     *
     * @return double
     */
    public function getIntegralMoney()
    {
        return $this->integral_money;
    }

    /**
     * Returns the value of field order_amount
     *
     * @return double
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    /**
     * Returns the value of field total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Returns the value of field add_time
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Returns the value of field shipping_time
     *
     * @return integer
     */
    public function getShippingTime()
    {
        return $this->shipping_time;
    }

    /**
     * Returns the value of field confirm_time
     *
     * @return integer
     */
    public function getConfirmTime()
    {
        return $this->confirm_time;
    }

    /**
     * Returns the value of field pay_time
     *
     * @return integer
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * Returns the value of field order_prom_type
     *
     * @return integer
     */
    public function getOrderPromType()
    {
        return $this->order_prom_type;
    }

    /**
     * Returns the value of field order_prom_id
     *
     * @return integer
     */
    public function getOrderPromId()
    {
        return $this->order_prom_id;
    }

    /**
     * Returns the value of field order_prom_amount
     *
     * @return double
     */
    public function getOrderPromAmount()
    {
        return $this->order_prom_amount;
    }

    /**
     * Returns the value of field discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Returns the value of field user_note
     *
     * @return string
     */
    public function getUserNote()
    {
        return $this->user_note;
    }

    /**
     * Returns the value of field admin_note
     *
     * @return string
     */
    public function getAdminNote()
    {
        return $this->admin_note;
    }

    /**
     * Returns the value of field parent_sn
     *
     * @return string
     */
    public function getParentSn()
    {
        return $this->parent_sn;
    }

    /**
     * Returns the value of field is_distribut
     *
     * @return integer
     */
    public function getIsDistribut()
    {
        return $this->is_distribut;
    }

    /**
     * Returns the value of field paid_money
     *
     * @return double
     */
    public function getPaidMoney()
    {
        return $this->paid_money;
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

        $this->setSource("order");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'order';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Order[]|Order|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Order|\Phalcon\Mvc\Model\ResultInterface
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
            'order_id' => 'order_id',
            'order_sn' => 'order_sn',
            'user_id' => 'user_id',
            'order_status' => 'order_status',
            'shipping_status' => 'shipping_status',
            'pay_status' => 'pay_status',
            'consignee' => 'consignee',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'twon' => 'twon',
            'address' => 'address',
            'zipcode' => 'zipcode',
            'mobile' => 'mobile',
            'email' => 'email',
            'shipping_code' => 'shipping_code',
            'shipping_name' => 'shipping_name',
            'pay_code' => 'pay_code',
            'pay_name' => 'pay_name',
            'invoice_title' => 'invoice_title',
            'goods_price' => 'goods_price',
            'shipping_price' => 'shipping_price',
            'user_money' => 'user_money',
            'coupon_price' => 'coupon_price',
            'integral' => 'integral',
            'integral_money' => 'integral_money',
            'order_amount' => 'order_amount',
            'total_amount' => 'total_amount',
            'add_time' => 'add_time',
            'shipping_time' => 'shipping_time',
            'confirm_time' => 'confirm_time',
            'pay_time' => 'pay_time',
            'order_prom_type' => 'order_prom_type',
            'order_prom_id' => 'order_prom_id',
            'order_prom_amount' => 'order_prom_amount',
            'discount' => 'discount',
            'user_note' => 'user_note',
            'admin_note' => 'admin_note',
            'parent_sn' => 'parent_sn',
            'is_distribut' => 'is_distribut',
            'paid_money' => 'paid_money'
        ];
    }

}

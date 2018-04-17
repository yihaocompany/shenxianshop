<?php

namespace Shenxianshop\Models;

class TpDeliveryDoc extends \Phalcon\Mvc\Model
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
     * @Column(column="order_id", type="integer", length=11, nullable=false)
     */
    protected $order_id;

    /**
     *
     * @var string
     * @Column(column="order_sn", type="string", length=64, nullable=false)
     */
    protected $order_sn;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=11, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(column="admin_id", type="integer", length=11, nullable=false)
     */
    protected $admin_id;

    /**
     *
     * @var string
     * @Column(column="consignee", type="string", length=64, nullable=false)
     */
    protected $consignee;

    /**
     *
     * @var string
     * @Column(column="zipcode", type="string", length=6, nullable=true)
     */
    protected $zipcode;

    /**
     *
     * @var string
     * @Column(column="mobile", type="string", length=20, nullable=false)
     */
    protected $mobile;

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
     * @var string
     * @Column(column="address", type="string", length=255, nullable=false)
     */
    protected $address;

    /**
     *
     * @var string
     * @Column(column="shipping_code", type="string", length=32, nullable=true)
     */
    protected $shipping_code;

    /**
     *
     * @var string
     * @Column(column="shipping_name", type="string", length=64, nullable=true)
     */
    protected $shipping_name;

    /**
     *
     * @var double
     * @Column(column="shipping_price", type="double", length=10, nullable=true)
     */
    protected $shipping_price;

    /**
     *
     * @var string
     * @Column(column="invoice_no", type="string", length=255, nullable=false)
     */
    protected $invoice_no;

    /**
     *
     * @var string
     * @Column(column="tel", type="string", length=64, nullable=true)
     */
    protected $tel;

    /**
     *
     * @var string
     * @Column(column="note", type="string", nullable=true)
     */
    protected $note;

    /**
     *
     * @var integer
     * @Column(column="best_time", type="integer", length=11, nullable=true)
     */
    protected $best_time;

    /**
     *
     * @var integer
     * @Column(column="create_time", type="integer", length=11, nullable=false)
     */
    protected $create_time;

    /**
     *
     * @var integer
     * @Column(column="is_del", type="integer", length=1, nullable=true)
     */
    protected $is_del;

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
     * Method to set the value of field admin_id
     *
     * @param integer $admin_id
     * @return $this
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

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
     * Method to set the value of field invoice_no
     *
     * @param string $invoice_no
     * @return $this
     */
    public function setInvoiceNo($invoice_no)
    {
        $this->invoice_no = $invoice_no;

        return $this;
    }

    /**
     * Method to set the value of field tel
     *
     * @param string $tel
     * @return $this
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Method to set the value of field note
     *
     * @param string $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Method to set the value of field best_time
     *
     * @param integer $best_time
     * @return $this
     */
    public function setBestTime($best_time)
    {
        $this->best_time = $best_time;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param integer $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Method to set the value of field is_del
     *
     * @param integer $is_del
     * @return $this
     */
    public function setIsDel($is_del)
    {
        $this->is_del = $is_del;

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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
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
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
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
     * Returns the value of field shipping_price
     *
     * @return double
     */
    public function getShippingPrice()
    {
        return $this->shipping_price;
    }

    /**
     * Returns the value of field invoice_no
     *
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->invoice_no;
    }

    /**
     * Returns the value of field tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Returns the value of field note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Returns the value of field best_time
     *
     * @return integer
     */
    public function getBestTime()
    {
        return $this->best_time;
    }

    /**
     * Returns the value of field create_time
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Returns the value of field is_del
     *
     * @return integer
     */
    public function getIsDel()
    {
        return $this->is_del;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_delivery_doc");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_delivery_doc';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpDeliveryDoc[]|TpDeliveryDoc|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpDeliveryDoc|\Phalcon\Mvc\Model\ResultInterface
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
            'order_id' => 'order_id',
            'order_sn' => 'order_sn',
            'user_id' => 'user_id',
            'admin_id' => 'admin_id',
            'consignee' => 'consignee',
            'zipcode' => 'zipcode',
            'mobile' => 'mobile',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'address' => 'address',
            'shipping_code' => 'shipping_code',
            'shipping_name' => 'shipping_name',
            'shipping_price' => 'shipping_price',
            'invoice_no' => 'invoice_no',
            'tel' => 'tel',
            'note' => 'note',
            'best_time' => 'best_time',
            'create_time' => 'create_time',
            'is_del' => 'is_del'
        ];
    }

}

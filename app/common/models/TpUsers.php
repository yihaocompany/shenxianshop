<?php

namespace Shenxianshop\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class TpUsers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=60, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(column="password", type="string", length=32, nullable=false)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(column="paypwd", type="string", length=32, nullable=true)
     */
    protected $paypwd;

    /**
     *
     * @var integer
     * @Column(column="sex", type="integer", length=1, nullable=false)
     */
    protected $sex;

    /**
     *
     * @var integer
     * @Column(column="birthday", type="integer", length=11, nullable=false)
     */
    protected $birthday;

    /**
     *
     * @var double
     * @Column(column="user_money", type="double", length=10, nullable=false)
     */
    protected $user_money;

    /**
     *
     * @var double
     * @Column(column="frozen_money", type="double", length=10, nullable=true)
     */
    protected $frozen_money;

    /**
     *
     * @var double
     * @Column(column="distribut_money", type="double", length=10, nullable=true)
     */
    protected $distribut_money;

    /**
     *
     * @var integer
     * @Column(column="underling_number", type="integer", length=5, nullable=true)
     */
    protected $underling_number;

    /**
     *
     * @var integer
     * @Column(column="pay_points", type="integer", length=10, nullable=false)
     */
    protected $pay_points;

    /**
     *
     * @var integer
     * @Column(column="address_id", type="integer", length=8, nullable=false)
     */
    protected $address_id;

    /**
     *
     * @var integer
     * @Column(column="reg_time", type="integer", length=10, nullable=false)
     */
    protected $reg_time;

    /**
     *
     * @var integer
     * @Column(column="last_login", type="integer", length=11, nullable=false)
     */
    protected $last_login;

    /**
     *
     * @var string
     * @Column(column="last_ip", type="string", length=15, nullable=false)
     */
    protected $last_ip;

    /**
     *
     * @var string
     * @Column(column="qq", type="string", length=20, nullable=false)
     */
    protected $qq;

    /**
     *
     * @var string
     * @Column(column="mobile", type="string", length=20, nullable=false)
     */
    protected $mobile;

    /**
     *
     * @var integer
     * @Column(column="mobile_validated", type="integer", length=3, nullable=false)
     */
    protected $mobile_validated;

    /**
     *
     * @var string
     * @Column(column="oauth", type="string", length=10, nullable=true)
     */
    protected $oauth;

    /**
     *
     * @var string
     * @Column(column="openid", type="string", length=100, nullable=true)
     */
    protected $openid;

    /**
     *
     * @var string
     * @Column(column="unionid", type="string", length=100, nullable=true)
     */
    protected $unionid;

    /**
     *
     * @var string
     * @Column(column="head_pic", type="string", length=255, nullable=true)
     */
    protected $head_pic;

    /**
     *
     * @var integer
     * @Column(column="province", type="integer", length=6, nullable=true)
     */
    protected $province;

    /**
     *
     * @var integer
     * @Column(column="city", type="integer", length=6, nullable=true)
     */
    protected $city;

    /**
     *
     * @var integer
     * @Column(column="district", type="integer", length=6, nullable=true)
     */
    protected $district;

    /**
     *
     * @var integer
     * @Column(column="email_validated", type="integer", length=1, nullable=false)
     */
    protected $email_validated;

    /**
     *
     * @var string
     * @Column(column="nickname", type="string", length=50, nullable=true)
     */
    protected $nickname;

    /**
     *
     * @var integer
     * @Column(column="level", type="integer", length=1, nullable=true)
     */
    protected $level;

    /**
     *
     * @var double
     * @Column(column="discount", type="double", length=10, nullable=true)
     */
    protected $discount;

    /**
     *
     * @var double
     * @Column(column="total_amount", type="double", length=10, nullable=true)
     */
    protected $total_amount;

    /**
     *
     * @var integer
     * @Column(column="is_lock", type="integer", length=1, nullable=true)
     */
    protected $is_lock;

    /**
     *
     * @var integer
     * @Column(column="is_distribut", type="integer", length=1, nullable=true)
     */
    protected $is_distribut;

    /**
     *
     * @var integer
     * @Column(column="first_leader", type="integer", length=11, nullable=true)
     */
    protected $first_leader;

    /**
     *
     * @var integer
     * @Column(column="second_leader", type="integer", length=11, nullable=true)
     */
    protected $second_leader;

    /**
     *
     * @var integer
     * @Column(column="third_leader", type="integer", length=11, nullable=true)
     */
    protected $third_leader;

    /**
     *
     * @var string
     * @Column(column="token", type="string", length=64, nullable=true)
     */
    protected $token;

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
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field paypwd
     *
     * @param string $paypwd
     * @return $this
     */
    public function setPaypwd($paypwd)
    {
        $this->paypwd = $paypwd;

        return $this;
    }

    /**
     * Method to set the value of field sex
     *
     * @param integer $sex
     * @return $this
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Method to set the value of field birthday
     *
     * @param integer $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

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
     * Method to set the value of field frozen_money
     *
     * @param double $frozen_money
     * @return $this
     */
    public function setFrozenMoney($frozen_money)
    {
        $this->frozen_money = $frozen_money;

        return $this;
    }

    /**
     * Method to set the value of field distribut_money
     *
     * @param double $distribut_money
     * @return $this
     */
    public function setDistributMoney($distribut_money)
    {
        $this->distribut_money = $distribut_money;

        return $this;
    }

    /**
     * Method to set the value of field underling_number
     *
     * @param integer $underling_number
     * @return $this
     */
    public function setUnderlingNumber($underling_number)
    {
        $this->underling_number = $underling_number;

        return $this;
    }

    /**
     * Method to set the value of field pay_points
     *
     * @param integer $pay_points
     * @return $this
     */
    public function setPayPoints($pay_points)
    {
        $this->pay_points = $pay_points;

        return $this;
    }

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
     * Method to set the value of field reg_time
     *
     * @param integer $reg_time
     * @return $this
     */
    public function setRegTime($reg_time)
    {
        $this->reg_time = $reg_time;

        return $this;
    }

    /**
     * Method to set the value of field last_login
     *
     * @param integer $last_login
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Method to set the value of field last_ip
     *
     * @param string $last_ip
     * @return $this
     */
    public function setLastIp($last_ip)
    {
        $this->last_ip = $last_ip;

        return $this;
    }

    /**
     * Method to set the value of field qq
     *
     * @param string $qq
     * @return $this
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

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
     * Method to set the value of field mobile_validated
     *
     * @param integer $mobile_validated
     * @return $this
     */
    public function setMobileValidated($mobile_validated)
    {
        $this->mobile_validated = $mobile_validated;

        return $this;
    }

    /**
     * Method to set the value of field oauth
     *
     * @param string $oauth
     * @return $this
     */
    public function setOauth($oauth)
    {
        $this->oauth = $oauth;

        return $this;
    }

    /**
     * Method to set the value of field openid
     *
     * @param string $openid
     * @return $this
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * Method to set the value of field unionid
     *
     * @param string $unionid
     * @return $this
     */
    public function setUnionid($unionid)
    {
        $this->unionid = $unionid;

        return $this;
    }

    /**
     * Method to set the value of field head_pic
     *
     * @param string $head_pic
     * @return $this
     */
    public function setHeadPic($head_pic)
    {
        $this->head_pic = $head_pic;

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
     * Method to set the value of field email_validated
     *
     * @param integer $email_validated
     * @return $this
     */
    public function setEmailValidated($email_validated)
    {
        $this->email_validated = $email_validated;

        return $this;
    }

    /**
     * Method to set the value of field nickname
     *
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Method to set the value of field level
     *
     * @param integer $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
     * Method to set the value of field is_lock
     *
     * @param integer $is_lock
     * @return $this
     */
    public function setIsLock($is_lock)
    {
        $this->is_lock = $is_lock;

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
     * Method to set the value of field first_leader
     *
     * @param integer $first_leader
     * @return $this
     */
    public function setFirstLeader($first_leader)
    {
        $this->first_leader = $first_leader;

        return $this;
    }

    /**
     * Method to set the value of field second_leader
     *
     * @param integer $second_leader
     * @return $this
     */
    public function setSecondLeader($second_leader)
    {
        $this->second_leader = $second_leader;

        return $this;
    }

    /**
     * Method to set the value of field third_leader
     *
     * @param integer $third_leader
     * @return $this
     */
    public function setThirdLeader($third_leader)
    {
        $this->third_leader = $third_leader;

        return $this;
    }

    /**
     * Method to set the value of field token
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
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
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field paypwd
     *
     * @return string
     */
    public function getPaypwd()
    {
        return $this->paypwd;
    }

    /**
     * Returns the value of field sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Returns the value of field birthday
     *
     * @return integer
     */
    public function getBirthday()
    {
        return $this->birthday;
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
     * Returns the value of field frozen_money
     *
     * @return double
     */
    public function getFrozenMoney()
    {
        return $this->frozen_money;
    }

    /**
     * Returns the value of field distribut_money
     *
     * @return double
     */
    public function getDistributMoney()
    {
        return $this->distribut_money;
    }

    /**
     * Returns the value of field underling_number
     *
     * @return integer
     */
    public function getUnderlingNumber()
    {
        return $this->underling_number;
    }

    /**
     * Returns the value of field pay_points
     *
     * @return integer
     */
    public function getPayPoints()
    {
        return $this->pay_points;
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
     * Returns the value of field reg_time
     *
     * @return integer
     */
    public function getRegTime()
    {
        return $this->reg_time;
    }

    /**
     * Returns the value of field last_login
     *
     * @return integer
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Returns the value of field last_ip
     *
     * @return string
     */
    public function getLastIp()
    {
        return $this->last_ip;
    }

    /**
     * Returns the value of field qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
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
     * Returns the value of field mobile_validated
     *
     * @return integer
     */
    public function getMobileValidated()
    {
        return $this->mobile_validated;
    }

    /**
     * Returns the value of field oauth
     *
     * @return string
     */
    public function getOauth()
    {
        return $this->oauth;
    }

    /**
     * Returns the value of field openid
     *
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Returns the value of field unionid
     *
     * @return string
     */
    public function getUnionid()
    {
        return $this->unionid;
    }

    /**
     * Returns the value of field head_pic
     *
     * @return string
     */
    public function getHeadPic()
    {
        return $this->head_pic;
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
     * Returns the value of field email_validated
     *
     * @return integer
     */
    public function getEmailValidated()
    {
        return $this->email_validated;
    }

    /**
     * Returns the value of field nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Returns the value of field level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
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
     * Returns the value of field total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Returns the value of field is_lock
     *
     * @return integer
     */
    public function getIsLock()
    {
        return $this->is_lock;
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
     * Returns the value of field first_leader
     *
     * @return integer
     */
    public function getFirstLeader()
    {
        return $this->first_leader;
    }

    /**
     * Returns the value of field second_leader
     *
     * @return integer
     */
    public function getSecondLeader()
    {
        return $this->second_leader;
    }

    /**
     * Returns the value of field third_leader
     *
     * @return integer
     */
    public function getThirdLeader()
    {
        return $this->third_leader;
    }

    /**
     * Returns the value of field token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
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
        $this->setSchema("ming.biz");
        $this->setSource("tp_users");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpUsers[]|TpUsers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpUsers|\Phalcon\Mvc\Model\ResultInterface
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
            'user_id' => 'user_id',
            'email' => 'email',
            'password' => 'password',
            'paypwd' => 'paypwd',
            'sex' => 'sex',
            'birthday' => 'birthday',
            'user_money' => 'user_money',
            'frozen_money' => 'frozen_money',
            'distribut_money' => 'distribut_money',
            'underling_number' => 'underling_number',
            'pay_points' => 'pay_points',
            'address_id' => 'address_id',
            'reg_time' => 'reg_time',
            'last_login' => 'last_login',
            'last_ip' => 'last_ip',
            'qq' => 'qq',
            'mobile' => 'mobile',
            'mobile_validated' => 'mobile_validated',
            'oauth' => 'oauth',
            'openid' => 'openid',
            'unionid' => 'unionid',
            'head_pic' => 'head_pic',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'email_validated' => 'email_validated',
            'nickname' => 'nickname',
            'level' => 'level',
            'discount' => 'discount',
            'total_amount' => 'total_amount',
            'is_lock' => 'is_lock',
            'is_distribut' => 'is_distribut',
            'first_leader' => 'first_leader',
            'second_leader' => 'second_leader',
            'third_leader' => 'third_leader',
            'token' => 'token'
        ];
    }

}

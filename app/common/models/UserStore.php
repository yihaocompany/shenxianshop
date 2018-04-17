<?php

namespace Shenxianshop\Models;

class UserStore extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=8, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=8, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="store_name", type="string", length=50, nullable=true)
     */
    protected $store_name;

    /**
     *
     * @var string
     * @Column(column="true_name", type="string", length=50, nullable=true)
     */
    protected $true_name;

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
     * @var string
     * @Column(column="store_img", type="string", length=255, nullable=true)
     */
    protected $store_img;

    /**
     *
     * @var integer
     * @Column(column="store_time", type="integer", length=10, nullable=false)
     */
    protected $store_time;

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
     * Method to set the value of field store_name
     *
     * @param string $store_name
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->store_name = $store_name;

        return $this;
    }

    /**
     * Method to set the value of field true_name
     *
     * @param string $true_name
     * @return $this
     */
    public function setTrueName($true_name)
    {
        $this->true_name = $true_name;

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
     * Method to set the value of field store_img
     *
     * @param string $store_img
     * @return $this
     */
    public function setStoreImg($store_img)
    {
        $this->store_img = $store_img;

        return $this;
    }

    /**
     * Method to set the value of field store_time
     *
     * @param integer $store_time
     * @return $this
     */
    public function setStoreTime($store_time)
    {
        $this->store_time = $store_time;

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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field store_name
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->store_name;
    }

    /**
     * Returns the value of field true_name
     *
     * @return string
     */
    public function getTrueName()
    {
        return $this->true_name;
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
     * Returns the value of field store_img
     *
     * @return string
     */
    public function getStoreImg()
    {
        return $this->store_img;
    }

    /**
     * Returns the value of field store_time
     *
     * @return integer
     */
    public function getStoreTime()
    {
        return $this->store_time;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("user_store");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_store';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserStore[]|UserStore|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserStore|\Phalcon\Mvc\Model\ResultInterface
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
            'user_id' => 'user_id',
            'store_name' => 'store_name',
            'true_name' => 'true_name',
            'qq' => 'qq',
            'mobile' => 'mobile',
            'store_img' => 'store_img',
            'store_time' => 'store_time'
        ];
    }

}

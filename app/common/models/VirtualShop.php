<?php

namespace Shenxianshop\Models;

class VirtualShop extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=11, nullable=true)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="shop_name", type="string", length=100, nullable=true)
     */
    protected $shop_name;

    /**
     *
     * @var integer
     * @Column(column="shop_level", type="integer", length=1, nullable=true)
     */
    protected $shop_level;

    /**
     *
     * @var string
     * @Column(column="shop_intro", type="string", nullable=true)
     */
    protected $shop_intro;

    /**
     *
     * @var string
     * @Column(column="shop_logo", type="string", length=255, nullable=true)
     */
    protected $shop_logo;

    /**
     *
     * @var string
     * @Column(column="shop_phone", type="string", length=20, nullable=true)
     */
    protected $shop_phone;

    /**
     *
     * @var string
     * @Column(column="shop_qq", type="string", length=20, nullable=true)
     */
    protected $shop_qq;

    /**
     *
     * @var integer
     * @Column(column="shop_theme", type="integer", length=1, nullable=true)
     */
    protected $shop_theme;

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
     * Method to set the value of field shop_name
     *
     * @param string $shop_name
     * @return $this
     */
    public function setShopName($shop_name)
    {
        $this->shop_name = $shop_name;

        return $this;
    }

    /**
     * Method to set the value of field shop_level
     *
     * @param integer $shop_level
     * @return $this
     */
    public function setShopLevel($shop_level)
    {
        $this->shop_level = $shop_level;

        return $this;
    }

    /**
     * Method to set the value of field shop_intro
     *
     * @param string $shop_intro
     * @return $this
     */
    public function setShopIntro($shop_intro)
    {
        $this->shop_intro = $shop_intro;

        return $this;
    }

    /**
     * Method to set the value of field shop_logo
     *
     * @param string $shop_logo
     * @return $this
     */
    public function setShopLogo($shop_logo)
    {
        $this->shop_logo = $shop_logo;

        return $this;
    }

    /**
     * Method to set the value of field shop_phone
     *
     * @param string $shop_phone
     * @return $this
     */
    public function setShopPhone($shop_phone)
    {
        $this->shop_phone = $shop_phone;

        return $this;
    }

    /**
     * Method to set the value of field shop_qq
     *
     * @param string $shop_qq
     * @return $this
     */
    public function setShopQq($shop_qq)
    {
        $this->shop_qq = $shop_qq;

        return $this;
    }

    /**
     * Method to set the value of field shop_theme
     *
     * @param integer $shop_theme
     * @return $this
     */
    public function setShopTheme($shop_theme)
    {
        $this->shop_theme = $shop_theme;

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
     * Returns the value of field shop_name
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->shop_name;
    }

    /**
     * Returns the value of field shop_level
     *
     * @return integer
     */
    public function getShopLevel()
    {
        return $this->shop_level;
    }

    /**
     * Returns the value of field shop_intro
     *
     * @return string
     */
    public function getShopIntro()
    {
        return $this->shop_intro;
    }

    /**
     * Returns the value of field shop_logo
     *
     * @return string
     */
    public function getShopLogo()
    {
        return $this->shop_logo;
    }

    /**
     * Returns the value of field shop_phone
     *
     * @return string
     */
    public function getShopPhone()
    {
        return $this->shop_phone;
    }

    /**
     * Returns the value of field shop_qq
     *
     * @return string
     */
    public function getShopQq()
    {
        return $this->shop_qq;
    }

    /**
     * Returns the value of field shop_theme
     *
     * @return integer
     */
    public function getShopTheme()
    {
        return $this->shop_theme;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("virtual_shop");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'virtual_shop';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return VirtualShop[]|VirtualShop|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return VirtualShop|\Phalcon\Mvc\Model\ResultInterface
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
            'shop_name' => 'shop_name',
            'shop_level' => 'shop_level',
            'shop_intro' => 'shop_intro',
            'shop_logo' => 'shop_logo',
            'shop_phone' => 'shop_phone',
            'shop_qq' => 'shop_qq',
            'shop_theme' => 'shop_theme'
        ];
    }

}

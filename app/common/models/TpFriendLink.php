<?php

namespace Shenxianshop\Models;

class TpFriendLink extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="link_id", type="integer", length=5, nullable=false)
     */
    protected $link_id;

    /**
     *
     * @var string
     * @Column(column="link_name", type="string", length=255, nullable=false)
     */
    protected $link_name;

    /**
     *
     * @var string
     * @Column(column="link_url", type="string", length=255, nullable=false)
     */
    protected $link_url;

    /**
     *
     * @var string
     * @Column(column="link_logo", type="string", length=255, nullable=false)
     */
    protected $link_logo;

    /**
     *
     * @var integer
     * @Column(column="orderby", type="integer", length=3, nullable=false)
     */
    protected $orderby;

    /**
     *
     * @var integer
     * @Column(column="is_show", type="integer", length=1, nullable=true)
     */
    protected $is_show;

    /**
     *
     * @var integer
     * @Column(column="target", type="integer", length=1, nullable=true)
     */
    protected $target;

    /**
     * Method to set the value of field link_id
     *
     * @param integer $link_id
     * @return $this
     */
    public function setLinkId($link_id)
    {
        $this->link_id = $link_id;

        return $this;
    }

    /**
     * Method to set the value of field link_name
     *
     * @param string $link_name
     * @return $this
     */
    public function setLinkName($link_name)
    {
        $this->link_name = $link_name;

        return $this;
    }

    /**
     * Method to set the value of field link_url
     *
     * @param string $link_url
     * @return $this
     */
    public function setLinkUrl($link_url)
    {
        $this->link_url = $link_url;

        return $this;
    }

    /**
     * Method to set the value of field link_logo
     *
     * @param string $link_logo
     * @return $this
     */
    public function setLinkLogo($link_logo)
    {
        $this->link_logo = $link_logo;

        return $this;
    }

    /**
     * Method to set the value of field orderby
     *
     * @param integer $orderby
     * @return $this
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;

        return $this;
    }

    /**
     * Method to set the value of field is_show
     *
     * @param integer $is_show
     * @return $this
     */
    public function setIsShow($is_show)
    {
        $this->is_show = $is_show;

        return $this;
    }

    /**
     * Method to set the value of field target
     *
     * @param integer $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Returns the value of field link_id
     *
     * @return integer
     */
    public function getLinkId()
    {
        return $this->link_id;
    }

    /**
     * Returns the value of field link_name
     *
     * @return string
     */
    public function getLinkName()
    {
        return $this->link_name;
    }

    /**
     * Returns the value of field link_url
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->link_url;
    }

    /**
     * Returns the value of field link_logo
     *
     * @return string
     */
    public function getLinkLogo()
    {
        return $this->link_logo;
    }

    /**
     * Returns the value of field orderby
     *
     * @return integer
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     * Returns the value of field is_show
     *
     * @return integer
     */
    public function getIsShow()
    {
        return $this->is_show;
    }

    /**
     * Returns the value of field target
     *
     * @return integer
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_friend_link");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_friend_link';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpFriendLink[]|TpFriendLink|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpFriendLink|\Phalcon\Mvc\Model\ResultInterface
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
            'link_id' => 'link_id',
            'link_name' => 'link_name',
            'link_url' => 'link_url',
            'link_logo' => 'link_logo',
            'orderby' => 'orderby',
            'is_show' => 'is_show',
            'target' => 'target'
        ];
    }

}

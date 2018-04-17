<?php

namespace Shenxianshop\Models;

class Ad extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="ad_id", type="integer", length=11, nullable=false)
     */
    protected $ad_id;

    /**
     *
     * @var integer
     * @Column(column="pid", type="integer", length=11, nullable=false)
     */
    protected $pid;

    /**
     *
     * @var integer
     * @Column(column="media_type", type="integer", length=3, nullable=false)
     */
    protected $media_type;

    /**
     *
     * @var string
     * @Column(column="ad_name", type="string", length=60, nullable=false)
     */
    protected $ad_name;

    /**
     *
     * @var string
     * @Column(column="ad_link", type="string", length=255, nullable=false)
     */
    protected $ad_link;

    /**
     *
     * @var string
     * @Column(column="ad_code", type="string", nullable=false)
     */
    protected $ad_code;

    /**
     *
     * @var integer
     * @Column(column="start_time", type="integer", length=11, nullable=false)
     */
    protected $start_time;

    /**
     *
     * @var integer
     * @Column(column="end_time", type="integer", length=11, nullable=false)
     */
    protected $end_time;

    /**
     *
     * @var string
     * @Column(column="link_man", type="string", length=60, nullable=false)
     */
    protected $link_man;

    /**
     *
     * @var string
     * @Column(column="link_email", type="string", length=60, nullable=false)
     */
    protected $link_email;

    /**
     *
     * @var string
     * @Column(column="link_phone", type="string", length=60, nullable=false)
     */
    protected $link_phone;

    /**
     *
     * @var integer
     * @Column(column="click_count", type="integer", length=8, nullable=false)
     */
    protected $click_count;

    /**
     *
     * @var integer
     * @Column(column="enabled", type="integer", length=3, nullable=false)
     */
    protected $enabled;

    /**
     *
     * @var integer
     * @Column(column="orderby", type="integer", length=6, nullable=true)
     */
    protected $orderby;

    /**
     *
     * @var integer
     * @Column(column="target", type="integer", length=1, nullable=true)
     */
    protected $target;

    /**
     *
     * @var string
     * @Column(column="bgcolor", type="string", length=20, nullable=true)
     */
    protected $bgcolor;

    /**
     * Method to set the value of field ad_id
     *
     * @param integer $ad_id
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->ad_id = $ad_id;

        return $this;
    }

    /**
     * Method to set the value of field pid
     *
     * @param integer $pid
     * @return $this
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Method to set the value of field media_type
     *
     * @param integer $media_type
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->media_type = $media_type;

        return $this;
    }

    /**
     * Method to set the value of field ad_name
     *
     * @param string $ad_name
     * @return $this
     */
    public function setAdName($ad_name)
    {
        $this->ad_name = $ad_name;

        return $this;
    }

    /**
     * Method to set the value of field ad_link
     *
     * @param string $ad_link
     * @return $this
     */
    public function setAdLink($ad_link)
    {
        $this->ad_link = $ad_link;

        return $this;
    }

    /**
     * Method to set the value of field ad_code
     *
     * @param string $ad_code
     * @return $this
     */
    public function setAdCode($ad_code)
    {
        $this->ad_code = $ad_code;

        return $this;
    }

    /**
     * Method to set the value of field start_time
     *
     * @param integer $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }

    /**
     * Method to set the value of field end_time
     *
     * @param integer $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    /**
     * Method to set the value of field link_man
     *
     * @param string $link_man
     * @return $this
     */
    public function setLinkMan($link_man)
    {
        $this->link_man = $link_man;

        return $this;
    }

    /**
     * Method to set the value of field link_email
     *
     * @param string $link_email
     * @return $this
     */
    public function setLinkEmail($link_email)
    {
        $this->link_email = $link_email;

        return $this;
    }

    /**
     * Method to set the value of field link_phone
     *
     * @param string $link_phone
     * @return $this
     */
    public function setLinkPhone($link_phone)
    {
        $this->link_phone = $link_phone;

        return $this;
    }

    /**
     * Method to set the value of field click_count
     *
     * @param integer $click_count
     * @return $this
     */
    public function setClickCount($click_count)
    {
        $this->click_count = $click_count;

        return $this;
    }

    /**
     * Method to set the value of field enabled
     *
     * @param integer $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

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
     * Method to set the value of field bgcolor
     *
     * @param string $bgcolor
     * @return $this
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    /**
     * Returns the value of field ad_id
     *
     * @return integer
     */
    public function getAdId()
    {
        return $this->ad_id;
    }

    /**
     * Returns the value of field pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Returns the value of field media_type
     *
     * @return integer
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Returns the value of field ad_name
     *
     * @return string
     */
    public function getAdName()
    {
        return $this->ad_name;
    }

    /**
     * Returns the value of field ad_link
     *
     * @return string
     */
    public function getAdLink()
    {
        return $this->ad_link;
    }

    /**
     * Returns the value of field ad_code
     *
     * @return string
     */
    public function getAdCode()
    {
        return $this->ad_code;
    }

    /**
     * Returns the value of field start_time
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Returns the value of field end_time
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Returns the value of field link_man
     *
     * @return string
     */
    public function getLinkMan()
    {
        return $this->link_man;
    }

    /**
     * Returns the value of field link_email
     *
     * @return string
     */
    public function getLinkEmail()
    {
        return $this->link_email;
    }

    /**
     * Returns the value of field link_phone
     *
     * @return string
     */
    public function getLinkPhone()
    {
        return $this->link_phone;
    }

    /**
     * Returns the value of field click_count
     *
     * @return integer
     */
    public function getClickCount()
    {
        return $this->click_count;
    }

    /**
     * Returns the value of field enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
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
     * Returns the value of field target
     *
     * @return integer
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Returns the value of field bgcolor
     *
     * @return string
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("ad");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ad';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ad[]|Ad|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ad|\Phalcon\Mvc\Model\ResultInterface
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
            'ad_id' => 'ad_id',
            'pid' => 'pid',
            'media_type' => 'media_type',
            'ad_name' => 'ad_name',
            'ad_link' => 'ad_link',
            'ad_code' => 'ad_code',
            'start_time' => 'start_time',
            'end_time' => 'end_time',
            'link_man' => 'link_man',
            'link_email' => 'link_email',
            'link_phone' => 'link_phone',
            'click_count' => 'click_count',
            'enabled' => 'enabled',
            'orderby' => 'orderby',
            'target' => 'target',
            'bgcolor' => 'bgcolor'
        ];
    }

}

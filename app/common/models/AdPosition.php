<?php

namespace Shenxianshop\Models;

class AdPosition extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="position_id", type="integer", length=3, nullable=false)
     */
    protected $position_id;

    /**
     *
     * @var string
     * @Column(column="position_name", type="string", length=60, nullable=false)
     */
    protected $position_name;

    /**
     *
     * @var integer
     * @Column(column="ad_width", type="integer", length=5, nullable=false)
     */
    protected $ad_width;

    /**
     *
     * @var integer
     * @Column(column="ad_height", type="integer", length=5, nullable=false)
     */
    protected $ad_height;

    /**
     *
     * @var string
     * @Column(column="position_desc", type="string", length=255, nullable=false)
     */
    protected $position_desc;

    /**
     *
     * @var string
     * @Column(column="position_style", type="string", nullable=true)
     */
    protected $position_style;

    /**
     *
     * @var integer
     * @Column(column="is_open", type="integer", length=1, nullable=true)
     */
    protected $is_open;

    /**
     * Method to set the value of field position_id
     *
     * @param integer $position_id
     * @return $this
     */
    public function setPositionId($position_id)
    {
        $this->position_id = $position_id;

        return $this;
    }

    /**
     * Method to set the value of field position_name
     *
     * @param string $position_name
     * @return $this
     */
    public function setPositionName($position_name)
    {
        $this->position_name = $position_name;

        return $this;
    }

    /**
     * Method to set the value of field ad_width
     *
     * @param integer $ad_width
     * @return $this
     */
    public function setAdWidth($ad_width)
    {
        $this->ad_width = $ad_width;

        return $this;
    }

    /**
     * Method to set the value of field ad_height
     *
     * @param integer $ad_height
     * @return $this
     */
    public function setAdHeight($ad_height)
    {
        $this->ad_height = $ad_height;

        return $this;
    }

    /**
     * Method to set the value of field position_desc
     *
     * @param string $position_desc
     * @return $this
     */
    public function setPositionDesc($position_desc)
    {
        $this->position_desc = $position_desc;

        return $this;
    }

    /**
     * Method to set the value of field position_style
     *
     * @param string $position_style
     * @return $this
     */
    public function setPositionStyle($position_style)
    {
        $this->position_style = $position_style;

        return $this;
    }

    /**
     * Method to set the value of field is_open
     *
     * @param integer $is_open
     * @return $this
     */
    public function setIsOpen($is_open)
    {
        $this->is_open = $is_open;

        return $this;
    }

    /**
     * Returns the value of field position_id
     *
     * @return integer
     */
    public function getPositionId()
    {
        return $this->position_id;
    }

    /**
     * Returns the value of field position_name
     *
     * @return string
     */
    public function getPositionName()
    {
        return $this->position_name;
    }

    /**
     * Returns the value of field ad_width
     *
     * @return integer
     */
    public function getAdWidth()
    {
        return $this->ad_width;
    }

    /**
     * Returns the value of field ad_height
     *
     * @return integer
     */
    public function getAdHeight()
    {
        return $this->ad_height;
    }

    /**
     * Returns the value of field position_desc
     *
     * @return string
     */
    public function getPositionDesc()
    {
        return $this->position_desc;
    }

    /**
     * Returns the value of field position_style
     *
     * @return string
     */
    public function getPositionStyle()
    {
        return $this->position_style;
    }

    /**
     * Returns the value of field is_open
     *
     * @return integer
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("ad_position");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ad_position';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdPosition[]|AdPosition|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdPosition|\Phalcon\Mvc\Model\ResultInterface
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
            'position_id' => 'position_id',
            'position_name' => 'position_name',
            'ad_width' => 'ad_width',
            'ad_height' => 'ad_height',
            'position_desc' => 'position_desc',
            'position_style' => 'position_style',
            'is_open' => 'is_open'
        ];
    }

}

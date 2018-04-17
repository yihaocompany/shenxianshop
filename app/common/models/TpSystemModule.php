<?php

namespace Shenxianshop\Models;

class TpSystemModule extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="mod_id", type="integer", length=6, nullable=false)
     */
    protected $mod_id;

    /**
     *
     * @var string
     * @Column(column="module", type="string", nullable=true)
     */
    protected $module;

    /**
     *
     * @var integer
     * @Column(column="level", type="integer", length=1, nullable=true)
     */
    protected $level;

    /**
     *
     * @var string
     * @Column(column="ctl", type="string", length=20, nullable=true)
     */
    protected $ctl;

    /**
     *
     * @var string
     * @Column(column="act", type="string", length=30, nullable=true)
     */
    protected $act;

    /**
     *
     * @var string
     * @Column(column="title", type="string", length=20, nullable=true)
     */
    protected $title;

    /**
     *
     * @var integer
     * @Column(column="visible", type="integer", length=1, nullable=true)
     */
    protected $visible;

    /**
     *
     * @var integer
     * @Column(column="parent_id", type="integer", length=6, nullable=true)
     */
    protected $parent_id;

    /**
     *
     * @var integer
     * @Column(column="orderby", type="integer", length=6, nullable=true)
     */
    protected $orderby;

    /**
     *
     * @var string
     * @Column(column="icon", type="string", length=30, nullable=true)
     */
    protected $icon;

    /**
     * Method to set the value of field mod_id
     *
     * @param integer $mod_id
     * @return $this
     */
    public function setModId($mod_id)
    {
        $this->mod_id = $mod_id;

        return $this;
    }

    /**
     * Method to set the value of field module
     *
     * @param string $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->module = $module;

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
     * Method to set the value of field ctl
     *
     * @param string $ctl
     * @return $this
     */
    public function setCtl($ctl)
    {
        $this->ctl = $ctl;

        return $this;
    }

    /**
     * Method to set the value of field act
     *
     * @param string $act
     * @return $this
     */
    public function setAct($act)
    {
        $this->act = $act;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field visible
     *
     * @param integer $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Method to set the value of field parent_id
     *
     * @param integer $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

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
     * Method to set the value of field icon
     *
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Returns the value of field mod_id
     *
     * @return integer
     */
    public function getModId()
    {
        return $this->mod_id;
    }

    /**
     * Returns the value of field module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
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
     * Returns the value of field ctl
     *
     * @return string
     */
    public function getCtl()
    {
        return $this->ctl;
    }

    /**
     * Returns the value of field act
     *
     * @return string
     */
    public function getAct()
    {
        return $this->act;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Returns the value of field parent_id
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parent_id;
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
     * Returns the value of field icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_system_module");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_system_module';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSystemModule[]|TpSystemModule|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSystemModule|\Phalcon\Mvc\Model\ResultInterface
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
            'mod_id' => 'mod_id',
            'module' => 'module',
            'level' => 'level',
            'ctl' => 'ctl',
            'act' => 'act',
            'title' => 'title',
            'visible' => 'visible',
            'parent_id' => 'parent_id',
            'orderby' => 'orderby',
            'icon' => 'icon'
        ];
    }

}

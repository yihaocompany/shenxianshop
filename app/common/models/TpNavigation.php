<?php

namespace Shenxianshop\Models;

class TpNavigation extends \Phalcon\Mvc\Model
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
     * @var string
     * @Column(column="name", type="string", length=32, nullable=true)
     */
    protected $name;

    /**
     *
     * @var integer
     * @Column(column="is_show", type="integer", length=1, nullable=true)
     */
    protected $is_show;

    /**
     *
     * @var integer
     * @Column(column="is_new", type="integer", length=1, nullable=true)
     */
    protected $is_new;

    /**
     *
     * @var integer
     * @Column(column="sort", type="integer", length=6, nullable=true)
     */
    protected $sort;

    /**
     *
     * @var string
     * @Column(column="url", type="string", length=255, nullable=true)
     */
    protected $url;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Method to set the value of field is_new
     *
     * @param integer $is_new
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->is_new = $is_new;

        return $this;
    }

    /**
     * Method to set the value of field sort
     *
     * @param integer $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field is_new
     *
     * @return integer
     */
    public function getIsNew()
    {
        return $this->is_new;
    }

    /**
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_navigation");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_navigation';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpNavigation[]|TpNavigation|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpNavigation|\Phalcon\Mvc\Model\ResultInterface
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
            'name' => 'name',
            'is_show' => 'is_show',
            'is_new' => 'is_new',
            'sort' => 'sort',
            'url' => 'url'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class TpBrand extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=5, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=60, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(column="logo", type="string", length=80, nullable=false)
     */
    protected $logo;

    /**
     *
     * @var string
     * @Column(column="desc", type="string", nullable=false)
     */
    protected $desc;

    /**
     *
     * @var string
     * @Column(column="url", type="string", length=255, nullable=false)
     */
    protected $url;

    /**
     *
     * @var integer
     * @Column(column="sort", type="integer", length=3, nullable=false)
     */
    protected $sort;

    /**
     *
     * @var string
     * @Column(column="cat_name", type="string", length=128, nullable=true)
     */
    protected $cat_name;

    /**
     *
     * @var integer
     * @Column(column="parent_cat_id", type="integer", length=11, nullable=true)
     */
    protected $parent_cat_id;

    /**
     *
     * @var integer
     * @Column(column="cat_id", type="integer", length=10, nullable=true)
     */
    protected $cat_id;

    /**
     *
     * @var integer
     * @Column(column="is_hot", type="integer", length=1, nullable=true)
     */
    protected $is_hot;

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
     * Method to set the value of field logo
     *
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Method to set the value of field desc
     *
     * @param string $desc
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

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
     * Method to set the value of field cat_name
     *
     * @param string $cat_name
     * @return $this
     */
    public function setCatName($cat_name)
    {
        $this->cat_name = $cat_name;

        return $this;
    }

    /**
     * Method to set the value of field parent_cat_id
     *
     * @param integer $parent_cat_id
     * @return $this
     */
    public function setParentCatId($parent_cat_id)
    {
        $this->parent_cat_id = $parent_cat_id;

        return $this;
    }

    /**
     * Method to set the value of field cat_id
     *
     * @param integer $cat_id
     * @return $this
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Method to set the value of field is_hot
     *
     * @param integer $is_hot
     * @return $this
     */
    public function setIsHot($is_hot)
    {
        $this->is_hot = $is_hot;

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
     * Returns the value of field logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Returns the value of field desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
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
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Returns the value of field cat_name
     *
     * @return string
     */
    public function getCatName()
    {
        return $this->cat_name;
    }

    /**
     * Returns the value of field parent_cat_id
     *
     * @return integer
     */
    public function getParentCatId()
    {
        return $this->parent_cat_id;
    }

    /**
     * Returns the value of field cat_id
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Returns the value of field is_hot
     *
     * @return integer
     */
    public function getIsHot()
    {
        return $this->is_hot;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_brand");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_brand';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpBrand[]|TpBrand|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpBrand|\Phalcon\Mvc\Model\ResultInterface
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
            'logo' => 'logo',
            'desc' => 'desc',
            'url' => 'url',
            'sort' => 'sort',
            'cat_name' => 'cat_name',
            'parent_cat_id' => 'parent_cat_id',
            'cat_id' => 'cat_id',
            'is_hot' => 'is_hot'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class ArticleCat2 extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="cat_id", type="integer", length=10, nullable=false)
     */
    protected $cat_id;

    /**
     *
     * @var string
     * @Column(column="cat_name", type="string", length=20, nullable=true)
     */
    protected $cat_name;

    /**
     *
     * @var integer
     * @Column(column="cat_type", type="integer", length=6, nullable=true)
     */
    protected $cat_type;

    /**
     *
     * @var integer
     * @Column(column="parent_id", type="integer", length=6, nullable=true)
     */
    protected $parent_id;

    /**
     *
     * @var integer
     * @Column(column="show_in_nav", type="integer", length=1, nullable=true)
     */
    protected $show_in_nav;

    /**
     *
     * @var integer
     * @Column(column="sort_order", type="integer", length=6, nullable=true)
     */
    protected $sort_order;

    /**
     *
     * @var string
     * @Column(column="cat_desc", type="string", length=255, nullable=true)
     */
    protected $cat_desc;

    /**
     *
     * @var string
     * @Column(column="keywords", type="string", length=30, nullable=true)
     */
    protected $keywords;

    /**
     *
     * @var string
     * @Column(column="cat_alias", type="string", length=20, nullable=true)
     */
    protected $cat_alias;

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
     * Method to set the value of field cat_type
     *
     * @param integer $cat_type
     * @return $this
     */
    public function setCatType($cat_type)
    {
        $this->cat_type = $cat_type;

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
     * Method to set the value of field show_in_nav
     *
     * @param integer $show_in_nav
     * @return $this
     */
    public function setShowInNav($show_in_nav)
    {
        $this->show_in_nav = $show_in_nav;

        return $this;
    }

    /**
     * Method to set the value of field sort_order
     *
     * @param integer $sort_order
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;

        return $this;
    }

    /**
     * Method to set the value of field cat_desc
     *
     * @param string $cat_desc
     * @return $this
     */
    public function setCatDesc($cat_desc)
    {
        $this->cat_desc = $cat_desc;

        return $this;
    }

    /**
     * Method to set the value of field keywords
     *
     * @param string $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Method to set the value of field cat_alias
     *
     * @param string $cat_alias
     * @return $this
     */
    public function setCatAlias($cat_alias)
    {
        $this->cat_alias = $cat_alias;

        return $this;
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
     * Returns the value of field cat_name
     *
     * @return string
     */
    public function getCatName()
    {
        return $this->cat_name;
    }

    /**
     * Returns the value of field cat_type
     *
     * @return integer
     */
    public function getCatType()
    {
        return $this->cat_type;
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
     * Returns the value of field show_in_nav
     *
     * @return integer
     */
    public function getShowInNav()
    {
        return $this->show_in_nav;
    }

    /**
     * Returns the value of field sort_order
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Returns the value of field cat_desc
     *
     * @return string
     */
    public function getCatDesc()
    {
        return $this->cat_desc;
    }

    /**
     * Returns the value of field keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Returns the value of field cat_alias
     *
     * @return string
     */
    public function getCatAlias()
    {
        return $this->cat_alias;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("article_cat_2");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'article_cat_2';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleCat2[]|ArticleCat2|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleCat2|\Phalcon\Mvc\Model\ResultInterface
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
            'cat_id' => 'cat_id',
            'cat_name' => 'cat_name',
            'cat_type' => 'cat_type',
            'parent_id' => 'parent_id',
            'show_in_nav' => 'show_in_nav',
            'sort_order' => 'sort_order',
            'cat_desc' => 'cat_desc',
            'keywords' => 'keywords',
            'cat_alias' => 'cat_alias'
        ];
    }

}

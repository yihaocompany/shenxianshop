<?php

namespace Shenxianshop\Models;

class TpSearchWord extends \Phalcon\Mvc\Model
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
     * @var string
     * @Column(column="keywords", type="string", length=255, nullable=false)
     */
    protected $keywords;

    /**
     *
     * @var string
     * @Column(column="pinyin_full", type="string", length=255, nullable=false)
     */
    protected $pinyin_full;

    /**
     *
     * @var string
     * @Column(column="pinyin_simple", type="string", length=255, nullable=false)
     */
    protected $pinyin_simple;

    /**
     *
     * @var integer
     * @Column(column="search_num", type="integer", length=8, nullable=false)
     */
    protected $search_num;

    /**
     *
     * @var integer
     * @Column(column="goods_num", type="integer", length=8, nullable=false)
     */
    protected $goods_num;

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
     * Method to set the value of field pinyin_full
     *
     * @param string $pinyin_full
     * @return $this
     */
    public function setPinyinFull($pinyin_full)
    {
        $this->pinyin_full = $pinyin_full;

        return $this;
    }

    /**
     * Method to set the value of field pinyin_simple
     *
     * @param string $pinyin_simple
     * @return $this
     */
    public function setPinyinSimple($pinyin_simple)
    {
        $this->pinyin_simple = $pinyin_simple;

        return $this;
    }

    /**
     * Method to set the value of field search_num
     *
     * @param integer $search_num
     * @return $this
     */
    public function setSearchNum($search_num)
    {
        $this->search_num = $search_num;

        return $this;
    }

    /**
     * Method to set the value of field goods_num
     *
     * @param integer $goods_num
     * @return $this
     */
    public function setGoodsNum($goods_num)
    {
        $this->goods_num = $goods_num;

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
     * Returns the value of field keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Returns the value of field pinyin_full
     *
     * @return string
     */
    public function getPinyinFull()
    {
        return $this->pinyin_full;
    }

    /**
     * Returns the value of field pinyin_simple
     *
     * @return string
     */
    public function getPinyinSimple()
    {
        return $this->pinyin_simple;
    }

    /**
     * Returns the value of field search_num
     *
     * @return integer
     */
    public function getSearchNum()
    {
        return $this->search_num;
    }

    /**
     * Returns the value of field goods_num
     *
     * @return integer
     */
    public function getGoodsNum()
    {
        return $this->goods_num;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_search_word");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_search_word';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSearchWord[]|TpSearchWord|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSearchWord|\Phalcon\Mvc\Model\ResultInterface
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
            'keywords' => 'keywords',
            'pinyin_full' => 'pinyin_full',
            'pinyin_simple' => 'pinyin_simple',
            'search_num' => 'search_num',
            'goods_num' => 'goods_num'
        ];
    }

}

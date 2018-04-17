<?php

namespace Shenxianshop\Models;

class Goods extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="goods_id", type="integer", length=8, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Column(column="cat_id", type="integer", length=11, nullable=false)
     */
    protected $cat_id;

    /**
     *
     * @var integer
     * @Column(column="extend_cat_id", type="integer", length=11, nullable=true)
     */
    protected $extend_cat_id;

    /**
     *
     * @var string
     * @Column(column="goods_sn", type="string", length=60, nullable=false)
     */
    protected $goods_sn;

    /**
     *
     * @var string
     * @Column(column="goods_name", type="string", length=120, nullable=false)
     */
    protected $goods_name;

    /**
     *
     * @var integer
     * @Column(column="click_count", type="integer", length=10, nullable=false)
     */
    protected $click_count;

    /**
     *
     * @var integer
     * @Column(column="brand_id", type="integer", length=5, nullable=false)
     */
    protected $brand_id;

    /**
     *
     * @var integer
     * @Column(column="store_count", type="integer", length=5, nullable=false)
     */
    protected $store_count;

    /**
     *
     * @var integer
     * @Column(column="comment_count", type="integer", length=5, nullable=true)
     */
    protected $comment_count;

    /**
     *
     * @var integer
     * @Column(column="weight", type="integer", length=11, nullable=false)
     */
    protected $weight;

    /**
     *
     * @var double
     * @Column(column="market_price", type="double", length=10, nullable=false)
     */
    protected $market_price;

    /**
     *
     * @var double
     * @Column(column="shop_price", type="double", length=10, nullable=false)
     */
    protected $shop_price;

    /**
     *
     * @var double
     * @Column(column="cost_price", type="double", length=10, nullable=true)
     */
    protected $cost_price;

    /**
     *
     * @var string
     * @Column(column="price_ladder", type="string", nullable=true)
     */
    protected $price_ladder;

    /**
     *
     * @var string
     * @Column(column="keywords", type="string", length=255, nullable=false)
     */
    protected $keywords;

    /**
     *
     * @var string
     * @Column(column="goods_remark", type="string", length=255, nullable=false)
     */
    protected $goods_remark;

    /**
     *
     * @var string
     * @Column(column="goods_content", type="string", nullable=true)
     */
    protected $goods_content;

    /**
     *
     * @var string
     * @Column(column="original_img", type="string", length=255, nullable=false)
     */
    protected $original_img;

    /**
     *
     * @var integer
     * @Column(column="is_real", type="integer", length=3, nullable=false)
     */
    protected $is_real;

    /**
     *
     * @var integer
     * @Column(column="is_on_sale", type="integer", length=1, nullable=false)
     */
    protected $is_on_sale;

    /**
     *
     * @var integer
     * @Column(column="is_free_shipping", type="integer", length=1, nullable=false)
     */
    protected $is_free_shipping;

    /**
     *
     * @var integer
     * @Column(column="on_time", type="integer", length=10, nullable=false)
     */
    protected $on_time;

    /**
     *
     * @var integer
     * @Column(column="sort", type="integer", length=4, nullable=false)
     */
    protected $sort;

    /**
     *
     * @var integer
     * @Column(column="is_recommend", type="integer", length=1, nullable=false)
     */
    protected $is_recommend;

    /**
     *
     * @var integer
     * @Column(column="is_new", type="integer", length=1, nullable=false)
     */
    protected $is_new;

    /**
     *
     * @var integer
     * @Column(column="is_hot", type="integer", length=1, nullable=true)
     */
    protected $is_hot;

    /**
     *
     * @var integer
     * @Column(column="last_update", type="integer", length=10, nullable=false)
     */
    protected $last_update;

    /**
     *
     * @var integer
     * @Column(column="goods_type", type="integer", length=5, nullable=false)
     */
    protected $goods_type;

    /**
     *
     * @var integer
     * @Column(column="spec_type", type="integer", length=5, nullable=true)
     */
    protected $spec_type;

    /**
     *
     * @var integer
     * @Column(column="give_integral", type="integer", length=8, nullable=true)
     */
    protected $give_integral;

    /**
     *
     * @var integer
     * @Column(column="exchange_integral", type="integer", length=10, nullable=false)
     */
    protected $exchange_integral;

    /**
     *
     * @var integer
     * @Column(column="suppliers_id", type="integer", length=5, nullable=false)
     */
    protected $suppliers_id;

    /**
     *
     * @var integer
     * @Column(column="sales_sum", type="integer", length=11, nullable=true)
     */
    protected $sales_sum;

    /**
     *
     * @var integer
     * @Column(column="prom_type", type="integer", length=1, nullable=true)
     */
    protected $prom_type;

    /**
     *
     * @var integer
     * @Column(column="prom_id", type="integer", length=11, nullable=true)
     */
    protected $prom_id;

    /**
     *
     * @var double
     * @Column(column="commission", type="double", length=10, nullable=true)
     */
    protected $commission;

    /**
     *
     * @var string
     * @Column(column="spu", type="string", length=128, nullable=true)
     */
    protected $spu;

    /**
     *
     * @var string
     * @Column(column="sku", type="string", length=128, nullable=true)
     */
    protected $sku;

    /**
     *
     * @var string
     * @Column(column="shipping_area_ids", type="string", length=255, nullable=false)
     */
    protected $shipping_area_ids;

    /**
     * Method to set the value of field goods_id
     *
     * @param integer $goods_id
     * @return $this
     */
    public function setGoodsId($goods_id)
    {
        $this->goods_id = $goods_id;

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
     * Method to set the value of field extend_cat_id
     *
     * @param integer $extend_cat_id
     * @return $this
     */
    public function setExtendCatId($extend_cat_id)
    {
        $this->extend_cat_id = $extend_cat_id;

        return $this;
    }

    /**
     * Method to set the value of field goods_sn
     *
     * @param string $goods_sn
     * @return $this
     */
    public function setGoodsSn($goods_sn)
    {
        $this->goods_sn = $goods_sn;

        return $this;
    }

    /**
     * Method to set the value of field goods_name
     *
     * @param string $goods_name
     * @return $this
     */
    public function setGoodsName($goods_name)
    {
        $this->goods_name = $goods_name;

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
     * Method to set the value of field brand_id
     *
     * @param integer $brand_id
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Method to set the value of field store_count
     *
     * @param integer $store_count
     * @return $this
     */
    public function setStoreCount($store_count)
    {
        $this->store_count = $store_count;

        return $this;
    }

    /**
     * Method to set the value of field comment_count
     *
     * @param integer $comment_count
     * @return $this
     */
    public function setCommentCount($comment_count)
    {
        $this->comment_count = $comment_count;

        return $this;
    }

    /**
     * Method to set the value of field weight
     *
     * @param integer $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Method to set the value of field market_price
     *
     * @param double $market_price
     * @return $this
     */
    public function setMarketPrice($market_price)
    {
        $this->market_price = $market_price;

        return $this;
    }

    /**
     * Method to set the value of field shop_price
     *
     * @param double $shop_price
     * @return $this
     */
    public function setShopPrice($shop_price)
    {
        $this->shop_price = $shop_price;

        return $this;
    }

    /**
     * Method to set the value of field cost_price
     *
     * @param double $cost_price
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->cost_price = $cost_price;

        return $this;
    }

    /**
     * Method to set the value of field price_ladder
     *
     * @param string $price_ladder
     * @return $this
     */
    public function setPriceLadder($price_ladder)
    {
        $this->price_ladder = $price_ladder;

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
     * Method to set the value of field goods_remark
     *
     * @param string $goods_remark
     * @return $this
     */
    public function setGoodsRemark($goods_remark)
    {
        $this->goods_remark = $goods_remark;

        return $this;
    }

    /**
     * Method to set the value of field goods_content
     *
     * @param string $goods_content
     * @return $this
     */
    public function setGoodsContent($goods_content)
    {
        $this->goods_content = $goods_content;

        return $this;
    }

    /**
     * Method to set the value of field original_img
     *
     * @param string $original_img
     * @return $this
     */
    public function setOriginalImg($original_img)
    {
        $this->original_img = $original_img;

        return $this;
    }

    /**
     * Method to set the value of field is_real
     *
     * @param integer $is_real
     * @return $this
     */
    public function setIsReal($is_real)
    {
        $this->is_real = $is_real;

        return $this;
    }

    /**
     * Method to set the value of field is_on_sale
     *
     * @param integer $is_on_sale
     * @return $this
     */
    public function setIsOnSale($is_on_sale)
    {
        $this->is_on_sale = $is_on_sale;

        return $this;
    }

    /**
     * Method to set the value of field is_free_shipping
     *
     * @param integer $is_free_shipping
     * @return $this
     */
    public function setIsFreeShipping($is_free_shipping)
    {
        $this->is_free_shipping = $is_free_shipping;

        return $this;
    }

    /**
     * Method to set the value of field on_time
     *
     * @param integer $on_time
     * @return $this
     */
    public function setOnTime($on_time)
    {
        $this->on_time = $on_time;

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
     * Method to set the value of field is_recommend
     *
     * @param integer $is_recommend
     * @return $this
     */
    public function setIsRecommend($is_recommend)
    {
        $this->is_recommend = $is_recommend;

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
     * Method to set the value of field last_update
     *
     * @param integer $last_update
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;

        return $this;
    }

    /**
     * Method to set the value of field goods_type
     *
     * @param integer $goods_type
     * @return $this
     */
    public function setGoodsType($goods_type)
    {
        $this->goods_type = $goods_type;

        return $this;
    }

    /**
     * Method to set the value of field spec_type
     *
     * @param integer $spec_type
     * @return $this
     */
    public function setSpecType($spec_type)
    {
        $this->spec_type = $spec_type;

        return $this;
    }

    /**
     * Method to set the value of field give_integral
     *
     * @param integer $give_integral
     * @return $this
     */
    public function setGiveIntegral($give_integral)
    {
        $this->give_integral = $give_integral;

        return $this;
    }

    /**
     * Method to set the value of field exchange_integral
     *
     * @param integer $exchange_integral
     * @return $this
     */
    public function setExchangeIntegral($exchange_integral)
    {
        $this->exchange_integral = $exchange_integral;

        return $this;
    }

    /**
     * Method to set the value of field suppliers_id
     *
     * @param integer $suppliers_id
     * @return $this
     */
    public function setSuppliersId($suppliers_id)
    {
        $this->suppliers_id = $suppliers_id;

        return $this;
    }

    /**
     * Method to set the value of field sales_sum
     *
     * @param integer $sales_sum
     * @return $this
     */
    public function setSalesSum($sales_sum)
    {
        $this->sales_sum = $sales_sum;

        return $this;
    }

    /**
     * Method to set the value of field prom_type
     *
     * @param integer $prom_type
     * @return $this
     */
    public function setPromType($prom_type)
    {
        $this->prom_type = $prom_type;

        return $this;
    }

    /**
     * Method to set the value of field prom_id
     *
     * @param integer $prom_id
     * @return $this
     */
    public function setPromId($prom_id)
    {
        $this->prom_id = $prom_id;

        return $this;
    }

    /**
     * Method to set the value of field commission
     *
     * @param double $commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Method to set the value of field spu
     *
     * @param string $spu
     * @return $this
     */
    public function setSpu($spu)
    {
        $this->spu = $spu;

        return $this;
    }

    /**
     * Method to set the value of field sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Method to set the value of field shipping_area_ids
     *
     * @param string $shipping_area_ids
     * @return $this
     */
    public function setShippingAreaIds($shipping_area_ids)
    {
        $this->shipping_area_ids = $shipping_area_ids;

        return $this;
    }

    /**
     * Returns the value of field goods_id
     *
     * @return integer
     */
    public function getGoodsId()
    {
        return $this->goods_id;
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
     * Returns the value of field extend_cat_id
     *
     * @return integer
     */
    public function getExtendCatId()
    {
        return $this->extend_cat_id;
    }

    /**
     * Returns the value of field goods_sn
     *
     * @return string
     */
    public function getGoodsSn()
    {
        return $this->goods_sn;
    }

    /**
     * Returns the value of field goods_name
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goods_name;
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
     * Returns the value of field brand_id
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Returns the value of field store_count
     *
     * @return integer
     */
    public function getStoreCount()
    {
        return $this->store_count;
    }

    /**
     * Returns the value of field comment_count
     *
     * @return integer
     */
    public function getCommentCount()
    {
        return $this->comment_count;
    }

    /**
     * Returns the value of field weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Returns the value of field market_price
     *
     * @return double
     */
    public function getMarketPrice()
    {
        return $this->market_price;
    }

    /**
     * Returns the value of field shop_price
     *
     * @return double
     */
    public function getShopPrice()
    {
        return $this->shop_price;
    }

    /**
     * Returns the value of field cost_price
     *
     * @return double
     */
    public function getCostPrice()
    {
        return $this->cost_price;
    }

    /**
     * Returns the value of field price_ladder
     *
     * @return string
     */
    public function getPriceLadder()
    {
        return $this->price_ladder;
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
     * Returns the value of field goods_remark
     *
     * @return string
     */
    public function getGoodsRemark()
    {
        return $this->goods_remark;
    }

    /**
     * Returns the value of field goods_content
     *
     * @return string
     */
    public function getGoodsContent()
    {
        return $this->goods_content;
    }

    /**
     * Returns the value of field original_img
     *
     * @return string
     */
    public function getOriginalImg()
    {
        return $this->original_img;
    }

    /**
     * Returns the value of field is_real
     *
     * @return integer
     */
    public function getIsReal()
    {
        return $this->is_real;
    }

    /**
     * Returns the value of field is_on_sale
     *
     * @return integer
     */
    public function getIsOnSale()
    {
        return $this->is_on_sale;
    }

    /**
     * Returns the value of field is_free_shipping
     *
     * @return integer
     */
    public function getIsFreeShipping()
    {
        return $this->is_free_shipping;
    }

    /**
     * Returns the value of field on_time
     *
     * @return integer
     */
    public function getOnTime()
    {
        return $this->on_time;
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
     * Returns the value of field is_recommend
     *
     * @return integer
     */
    public function getIsRecommend()
    {
        return $this->is_recommend;
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
     * Returns the value of field is_hot
     *
     * @return integer
     */
    public function getIsHot()
    {
        return $this->is_hot;
    }

    /**
     * Returns the value of field last_update
     *
     * @return integer
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Returns the value of field goods_type
     *
     * @return integer
     */
    public function getGoodsType()
    {
        return $this->goods_type;
    }

    /**
     * Returns the value of field spec_type
     *
     * @return integer
     */
    public function getSpecType()
    {
        return $this->spec_type;
    }

    /**
     * Returns the value of field give_integral
     *
     * @return integer
     */
    public function getGiveIntegral()
    {
        return $this->give_integral;
    }

    /**
     * Returns the value of field exchange_integral
     *
     * @return integer
     */
    public function getExchangeIntegral()
    {
        return $this->exchange_integral;
    }

    /**
     * Returns the value of field suppliers_id
     *
     * @return integer
     */
    public function getSuppliersId()
    {
        return $this->suppliers_id;
    }

    /**
     * Returns the value of field sales_sum
     *
     * @return integer
     */
    public function getSalesSum()
    {
        return $this->sales_sum;
    }

    /**
     * Returns the value of field prom_type
     *
     * @return integer
     */
    public function getPromType()
    {
        return $this->prom_type;
    }

    /**
     * Returns the value of field prom_id
     *
     * @return integer
     */
    public function getPromId()
    {
        return $this->prom_id;
    }

    /**
     * Returns the value of field commission
     *
     * @return double
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Returns the value of field spu
     *
     * @return string
     */
    public function getSpu()
    {
        return $this->spu;
    }

    /**
     * Returns the value of field sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Returns the value of field shipping_area_ids
     *
     * @return string
     */
    public function getShippingAreaIds()
    {
        return $this->shipping_area_ids;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("goods");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'goods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Goods[]|Goods|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Goods|\Phalcon\Mvc\Model\ResultInterface
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
            'goods_id' => 'goods_id',
            'cat_id' => 'cat_id',
            'extend_cat_id' => 'extend_cat_id',
            'goods_sn' => 'goods_sn',
            'goods_name' => 'goods_name',
            'click_count' => 'click_count',
            'brand_id' => 'brand_id',
            'store_count' => 'store_count',
            'comment_count' => 'comment_count',
            'weight' => 'weight',
            'market_price' => 'market_price',
            'shop_price' => 'shop_price',
            'cost_price' => 'cost_price',
            'price_ladder' => 'price_ladder',
            'keywords' => 'keywords',
            'goods_remark' => 'goods_remark',
            'goods_content' => 'goods_content',
            'original_img' => 'original_img',
            'is_real' => 'is_real',
            'is_on_sale' => 'is_on_sale',
            'is_free_shipping' => 'is_free_shipping',
            'on_time' => 'on_time',
            'sort' => 'sort',
            'is_recommend' => 'is_recommend',
            'is_new' => 'is_new',
            'is_hot' => 'is_hot',
            'last_update' => 'last_update',
            'goods_type' => 'goods_type',
            'spec_type' => 'spec_type',
            'give_integral' => 'give_integral',
            'exchange_integral' => 'exchange_integral',
            'suppliers_id' => 'suppliers_id',
            'sales_sum' => 'sales_sum',
            'prom_type' => 'prom_type',
            'prom_id' => 'prom_id',
            'commission' => 'commission',
            'spu' => 'spu',
            'sku' => 'sku',
            'shipping_area_ids' => 'shipping_area_ids'
        ];
    }

}

<?php
namespace Shenxianshop\Models;
class GoodsCategory extends ModelBase
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
     * @Column(column="name", type="string", length=90, nullable=false)
     */
    protected $name;
    /**
     *
     * @var string
     * @Column(column="mobile_name", type="string", length=64, nullable=true)
     */
    protected $mobile_name;
    /**
     *
     * @var integer
     * @Column(column="parent_id", type="integer", length=5, nullable=false)
     */
    protected $parent_id;

    /**
     *
     * @var string
     * @Column(column="parent_id_path", type="string", length=128, nullable=true)
     */
    protected $parent_id_path;
    /**
     *
     * @var integer
     * @Column(column="level", type="integer", length=1, nullable=true)
     */
    protected $level;
    /**
     *
     * @var integer
     * @Column(column="sort_order", type="integer", length=1, nullable=false)
     */
    protected $sort_order;
    /**
     *
     * @var integer
     * @Column(column="is_show", type="integer", length=1, nullable=false)
     */
    protected $is_show;
    /**
     *
     * @var string
     * @Column(column="image", type="string", length=512, nullable=true)
     */
    protected $image;
    /**
     *
     * @var integer
     * @Column(column="is_hot", type="integer", length=1, nullable=true)
     */
    protected $is_hot;
    /**
     *
     * @var integer
     * @Column(column="cat_group", type="integer", length=1, nullable=true)
     */
    protected $cat_group;
    /**
     *
     * @var integer
     * @Column(column="commission_rate", type="integer", length=1, nullable=true)
     */
    protected $commission_rate;
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
     * Method to set the value of field mobile_name
     *
     * @param string $mobile_name
     * @return $this
     */
    public function setMobileName($mobile_name)
    {
        $this->mobile_name = $mobile_name;
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
     * Method to set the value of field parent_id_path
     *
     * @param string $parent_id_path
     * @return $this
     */
    public function setParentIdPath($parent_id_path)
    {
        $this->parent_id_path = $parent_id_path;
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
     * Method to set the value of field image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * Method to set the value of field cat_group
     *
     * @param integer $cat_group
     * @return $this
     */
    public function setCatGroup($cat_group)
    {
        $this->cat_group = $cat_group;
        return $this;
    }

    /**
     * Method to set the value of field commission_rate
     *
     * @param integer $commission_rate
     * @return $this
     */
    public function setCommissionRate($commission_rate)
    {
        $this->commission_rate = $commission_rate;
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
     * Returns the value of field mobile_name
     *
     * @return string
     */
    public function getMobileName()
    {
        return $this->mobile_name;
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
     * Returns the value of field parent_id_path
     *
     * @return string
     */
    public function getParentIdPath()
    {
        return $this->parent_id_path;
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
     * Returns the value of field sort_order
     *
     * @return integer
     */
    public function getSortOrder(){
        return $this->sort_order;
    }

    /**
     * Returns the value of field is_show
     *
     * @return integer
     */
    public function getIsShow(){
        return $this->is_show;
    }

    /**
     * Returns the value of field image
     *
     * @return string
     */
    public function getImage(){
        return $this->image;
    }

    /**
     * Returns the value of field is_hot
     *
     * @return integer
     */
    public function getIsHot(){
        return $this->is_hot;
    }

    /**
     * Returns the value of field cat_group
     *
     * @return integer
     */
    public function getCatGroup(){
        return $this->cat_group;
    }

    /**
     * Returns the value of field commission_rate
     *
     * @return integer
     */
    public function getCommissionRate(){
        return $this->commission_rate;
    }

    /**
     * Initialize method for model.
     */
    public function initialize(){
        parent::initialize();
        $this->setSource("goods_category");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource(){
        return 'goods_category';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsCategory[]|GoodsCategory|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null){
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return GoodsCategory|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null){
        return parent::findFirst($parameters);
    }
    /**
     * 商品分类
     * 加上REDIS支持
     *
     */

    public  function get_goods_category(){
             $redis =$this->_redis;
             if($redis){
                if(!$redis->get('goodscategory')){
                    $redis->set('goodscategory',serialize(parent::find()->toArray()));
                }
                return unserialize($redis->get('goodscategory'));
            }else{
                return parent::find()->toArray();
            }
    }
    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap(){
        return [
            'id' => 'id',
            'name' => 'name',
            'mobile_name' => 'mobile_name',
            'parent_id' => 'parent_id',
            'parent_id_path' => 'parent_id_path',
            'level' => 'level',
            'sort_order' => 'sort_order',
            'is_show' => 'is_show',
            'image' => 'image',
            'is_hot' => 'is_hot',
            'cat_group' => 'cat_group',
            'commission_rate' => 'commission_rate'
        ];
    }
}

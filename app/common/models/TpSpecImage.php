<?php

namespace Shenxianshop\Models;

class TpSpecImage extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=11, nullable=true)
     */
    protected $goods_id;

    /**
     *
     * @var integer
     * @Column(column="spec_image_id", type="integer", length=11, nullable=true)
     */
    protected $spec_image_id;

    /**
     *
     * @var string
     * @Column(column="src", type="string", length=512, nullable=true)
     */
    protected $src;

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
     * Method to set the value of field spec_image_id
     *
     * @param integer $spec_image_id
     * @return $this
     */
    public function setSpecImageId($spec_image_id)
    {
        $this->spec_image_id = $spec_image_id;

        return $this;
    }

    /**
     * Method to set the value of field src
     *
     * @param string $src
     * @return $this
     */
    public function setSrc($src)
    {
        $this->src = $src;

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
     * Returns the value of field spec_image_id
     *
     * @return integer
     */
    public function getSpecImageId()
    {
        return $this->spec_image_id;
    }

    /**
     * Returns the value of field src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_spec_image");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_spec_image';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSpecImage[]|TpSpecImage|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpSpecImage|\Phalcon\Mvc\Model\ResultInterface
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
            'spec_image_id' => 'spec_image_id',
            'src' => 'src'
        ];
    }

}

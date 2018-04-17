<?php

namespace Shenxianshop\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class TpComment extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="comment_id", type="integer", length=10, nullable=false)
     */
    protected $comment_id;

    /**
     *
     * @var integer
     * @Column(column="goods_id", type="integer", length=8, nullable=false)
     */
    protected $goods_id;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=60, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(column="username", type="string", length=60, nullable=false)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(column="content", type="string", nullable=false)
     */
    protected $content;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=10, nullable=false)
     */
    protected $add_time;

    /**
     *
     * @var string
     * @Column(column="ip_address", type="string", length=15, nullable=false)
     */
    protected $ip_address;

    /**
     *
     * @var integer
     * @Column(column="is_show", type="integer", length=1, nullable=false)
     */
    protected $is_show;

    /**
     *
     * @var integer
     * @Column(column="parent_id", type="integer", length=10, nullable=false)
     */
    protected $parent_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=10, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(column="img", type="string", nullable=true)
     */
    protected $img;

    /**
     *
     * @var integer
     * @Column(column="order_id", type="integer", length=8, nullable=true)
     */
    protected $order_id;

    /**
     *
     * @var integer
     * @Column(column="deliver_rank", type="integer", length=1, nullable=false)
     */
    protected $deliver_rank;

    /**
     *
     * @var integer
     * @Column(column="goods_rank", type="integer", length=1, nullable=true)
     */
    protected $goods_rank;

    /**
     *
     * @var integer
     * @Column(column="service_rank", type="integer", length=1, nullable=true)
     */
    protected $service_rank;

    /**
     *
     * @var integer
     * @Column(column="zan_num", type="integer", length=10, nullable=false)
     */
    protected $zan_num;

    /**
     *
     * @var string
     * @Column(column="zan_userid", type="string", length=255, nullable=false)
     */
    protected $zan_userid;

    /**
     *
     * @var integer
     * @Column(column="is_anonymous", type="integer", length=1, nullable=false)
     */
    protected $is_anonymous;

    /**
     * Method to set the value of field comment_id
     *
     * @param integer $comment_id
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->comment_id = $comment_id;

        return $this;
    }

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
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field add_time
     *
     * @param integer $add_time
     * @return $this
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;

        return $this;
    }

    /**
     * Method to set the value of field ip_address
     *
     * @param string $ip_address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;

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
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field img
     *
     * @param string $img
     * @return $this
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Method to set the value of field order_id
     *
     * @param integer $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Method to set the value of field deliver_rank
     *
     * @param integer $deliver_rank
     * @return $this
     */
    public function setDeliverRank($deliver_rank)
    {
        $this->deliver_rank = $deliver_rank;

        return $this;
    }

    /**
     * Method to set the value of field goods_rank
     *
     * @param integer $goods_rank
     * @return $this
     */
    public function setGoodsRank($goods_rank)
    {
        $this->goods_rank = $goods_rank;

        return $this;
    }

    /**
     * Method to set the value of field service_rank
     *
     * @param integer $service_rank
     * @return $this
     */
    public function setServiceRank($service_rank)
    {
        $this->service_rank = $service_rank;

        return $this;
    }

    /**
     * Method to set the value of field zan_num
     *
     * @param integer $zan_num
     * @return $this
     */
    public function setZanNum($zan_num)
    {
        $this->zan_num = $zan_num;

        return $this;
    }

    /**
     * Method to set the value of field zan_userid
     *
     * @param string $zan_userid
     * @return $this
     */
    public function setZanUserid($zan_userid)
    {
        $this->zan_userid = $zan_userid;

        return $this;
    }

    /**
     * Method to set the value of field is_anonymous
     *
     * @param integer $is_anonymous
     * @return $this
     */
    public function setIsAnonymous($is_anonymous)
    {
        $this->is_anonymous = $is_anonymous;

        return $this;
    }

    /**
     * Returns the value of field comment_id
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->comment_id;
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
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field add_time
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Returns the value of field ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
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
     * Returns the value of field parent_id
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Returns the value of field order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Returns the value of field deliver_rank
     *
     * @return integer
     */
    public function getDeliverRank()
    {
        return $this->deliver_rank;
    }

    /**
     * Returns the value of field goods_rank
     *
     * @return integer
     */
    public function getGoodsRank()
    {
        return $this->goods_rank;
    }

    /**
     * Returns the value of field service_rank
     *
     * @return integer
     */
    public function getServiceRank()
    {
        return $this->service_rank;
    }

    /**
     * Returns the value of field zan_num
     *
     * @return integer
     */
    public function getZanNum()
    {
        return $this->zan_num;
    }

    /**
     * Returns the value of field zan_userid
     *
     * @return string
     */
    public function getZanUserid()
    {
        return $this->zan_userid;
    }

    /**
     * Returns the value of field is_anonymous
     *
     * @return integer
     */
    public function getIsAnonymous()
    {
        return $this->is_anonymous;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_comment");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_comment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpComment[]|TpComment|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpComment|\Phalcon\Mvc\Model\ResultInterface
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
            'comment_id' => 'comment_id',
            'goods_id' => 'goods_id',
            'email' => 'email',
            'username' => 'username',
            'content' => 'content',
            'add_time' => 'add_time',
            'ip_address' => 'ip_address',
            'is_show' => 'is_show',
            'parent_id' => 'parent_id',
            'user_id' => 'user_id',
            'img' => 'img',
            'order_id' => 'order_id',
            'deliver_rank' => 'deliver_rank',
            'goods_rank' => 'goods_rank',
            'service_rank' => 'service_rank',
            'zan_num' => 'zan_num',
            'zan_userid' => 'zan_userid',
            'is_anonymous' => 'is_anonymous'
        ];
    }

}

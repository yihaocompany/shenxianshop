<?php

namespace Shenxianshop\Models;

class TpWxUser extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(column="uid", type="integer", length=11, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var string
     * @Column(column="wxname", type="string", length=60, nullable=false)
     */
    protected $wxname;

    /**
     *
     * @var string
     * @Column(column="aeskey", type="string", length=256, nullable=false)
     */
    protected $aeskey;

    /**
     *
     * @var integer
     * @Column(column="encode", type="integer", length=1, nullable=false)
     */
    protected $encode;

    /**
     *
     * @var string
     * @Column(column="appid", type="string", length=50, nullable=false)
     */
    protected $appid;

    /**
     *
     * @var string
     * @Column(column="appsecret", type="string", length=50, nullable=false)
     */
    protected $appsecret;

    /**
     *
     * @var string
     * @Column(column="wxid", type="string", length=64, nullable=false)
     */
    protected $wxid;

    /**
     *
     * @var string
     * @Column(column="weixin", type="string", length=64, nullable=false)
     */
    protected $weixin;

    /**
     *
     * @var string
     * @Column(column="headerpic", type="string", length=255, nullable=false)
     */
    protected $headerpic;

    /**
     *
     * @var string
     * @Column(column="token", type="string", length=255, nullable=false)
     */
    protected $token;

    /**
     *
     * @var string
     * @Column(column="w_token", type="string", length=150, nullable=false)
     */
    protected $w_token;

    /**
     *
     * @var integer
     * @Column(column="create_time", type="integer", length=11, nullable=false)
     */
    protected $create_time;

    /**
     *
     * @var integer
     * @Column(column="updatetime", type="integer", length=11, nullable=false)
     */
    protected $updatetime;

    /**
     *
     * @var string
     * @Column(column="tplcontentid", type="string", length=2, nullable=false)
     */
    protected $tplcontentid;

    /**
     *
     * @var string
     * @Column(column="share_ticket", type="string", length=150, nullable=false)
     */
    protected $share_ticket;

    /**
     *
     * @var string
     * @Column(column="share_dated", type="string", length=15, nullable=false)
     */
    protected $share_dated;

    /**
     *
     * @var string
     * @Column(column="authorizer_access_token", type="string", length=200, nullable=false)
     */
    protected $authorizer_access_token;

    /**
     *
     * @var string
     * @Column(column="authorizer_refresh_token", type="string", length=200, nullable=false)
     */
    protected $authorizer_refresh_token;

    /**
     *
     * @var string
     * @Column(column="authorizer_expires", type="string", length=10, nullable=false)
     */
    protected $authorizer_expires;

    /**
     *
     * @var integer
     * @Column(column="type", type="integer", length=1, nullable=false)
     */
    protected $type;

    /**
     *
     * @var string
     * @Column(column="web_access_token", type="string", length=200, nullable=true)
     */
    protected $web_access_token;

    /**
     *
     * @var string
     * @Column(column="web_refresh_token", type="string", length=200, nullable=false)
     */
    protected $web_refresh_token;

    /**
     *
     * @var integer
     * @Column(column="web_expires", type="integer", length=11, nullable=false)
     */
    protected $web_expires;

    /**
     *
     * @var string
     * @Column(column="qr", type="string", length=200, nullable=false)
     */
    protected $qr;

    /**
     *
     * @var string
     * @Column(column="menu_config", type="string", nullable=true)
     */
    protected $menu_config;

    /**
     *
     * @var integer
     * @Column(column="wait_access", type="integer", length=1, nullable=true)
     */
    protected $wait_access;

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
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field wxname
     *
     * @param string $wxname
     * @return $this
     */
    public function setWxname($wxname)
    {
        $this->wxname = $wxname;

        return $this;
    }

    /**
     * Method to set the value of field aeskey
     *
     * @param string $aeskey
     * @return $this
     */
    public function setAeskey($aeskey)
    {
        $this->aeskey = $aeskey;

        return $this;
    }

    /**
     * Method to set the value of field encode
     *
     * @param integer $encode
     * @return $this
     */
    public function setEncode($encode)
    {
        $this->encode = $encode;

        return $this;
    }

    /**
     * Method to set the value of field appid
     *
     * @param string $appid
     * @return $this
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Method to set the value of field appsecret
     *
     * @param string $appsecret
     * @return $this
     */
    public function setAppsecret($appsecret)
    {
        $this->appsecret = $appsecret;

        return $this;
    }

    /**
     * Method to set the value of field wxid
     *
     * @param string $wxid
     * @return $this
     */
    public function setWxid($wxid)
    {
        $this->wxid = $wxid;

        return $this;
    }

    /**
     * Method to set the value of field weixin
     *
     * @param string $weixin
     * @return $this
     */
    public function setWeixin($weixin)
    {
        $this->weixin = $weixin;

        return $this;
    }

    /**
     * Method to set the value of field headerpic
     *
     * @param string $headerpic
     * @return $this
     */
    public function setHeaderpic($headerpic)
    {
        $this->headerpic = $headerpic;

        return $this;
    }

    /**
     * Method to set the value of field token
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Method to set the value of field w_token
     *
     * @param string $w_token
     * @return $this
     */
    public function setWToken($w_token)
    {
        $this->w_token = $w_token;

        return $this;
    }

    /**
     * Method to set the value of field create_time
     *
     * @param integer $create_time
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Method to set the value of field updatetime
     *
     * @param integer $updatetime
     * @return $this
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Method to set the value of field tplcontentid
     *
     * @param string $tplcontentid
     * @return $this
     */
    public function setTplcontentid($tplcontentid)
    {
        $this->tplcontentid = $tplcontentid;

        return $this;
    }

    /**
     * Method to set the value of field share_ticket
     *
     * @param string $share_ticket
     * @return $this
     */
    public function setShareTicket($share_ticket)
    {
        $this->share_ticket = $share_ticket;

        return $this;
    }

    /**
     * Method to set the value of field share_dated
     *
     * @param string $share_dated
     * @return $this
     */
    public function setShareDated($share_dated)
    {
        $this->share_dated = $share_dated;

        return $this;
    }

    /**
     * Method to set the value of field authorizer_access_token
     *
     * @param string $authorizer_access_token
     * @return $this
     */
    public function setAuthorizerAccessToken($authorizer_access_token)
    {
        $this->authorizer_access_token = $authorizer_access_token;

        return $this;
    }

    /**
     * Method to set the value of field authorizer_refresh_token
     *
     * @param string $authorizer_refresh_token
     * @return $this
     */
    public function setAuthorizerRefreshToken($authorizer_refresh_token)
    {
        $this->authorizer_refresh_token = $authorizer_refresh_token;

        return $this;
    }

    /**
     * Method to set the value of field authorizer_expires
     *
     * @param string $authorizer_expires
     * @return $this
     */
    public function setAuthorizerExpires($authorizer_expires)
    {
        $this->authorizer_expires = $authorizer_expires;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field web_access_token
     *
     * @param string $web_access_token
     * @return $this
     */
    public function setWebAccessToken($web_access_token)
    {
        $this->web_access_token = $web_access_token;

        return $this;
    }

    /**
     * Method to set the value of field web_refresh_token
     *
     * @param string $web_refresh_token
     * @return $this
     */
    public function setWebRefreshToken($web_refresh_token)
    {
        $this->web_refresh_token = $web_refresh_token;

        return $this;
    }

    /**
     * Method to set the value of field web_expires
     *
     * @param integer $web_expires
     * @return $this
     */
    public function setWebExpires($web_expires)
    {
        $this->web_expires = $web_expires;

        return $this;
    }

    /**
     * Method to set the value of field qr
     *
     * @param string $qr
     * @return $this
     */
    public function setQr($qr)
    {
        $this->qr = $qr;

        return $this;
    }

    /**
     * Method to set the value of field menu_config
     *
     * @param string $menu_config
     * @return $this
     */
    public function setMenuConfig($menu_config)
    {
        $this->menu_config = $menu_config;

        return $this;
    }

    /**
     * Method to set the value of field wait_access
     *
     * @param integer $wait_access
     * @return $this
     */
    public function setWaitAccess($wait_access)
    {
        $this->wait_access = $wait_access;

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
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field wxname
     *
     * @return string
     */
    public function getWxname()
    {
        return $this->wxname;
    }

    /**
     * Returns the value of field aeskey
     *
     * @return string
     */
    public function getAeskey()
    {
        return $this->aeskey;
    }

    /**
     * Returns the value of field encode
     *
     * @return integer
     */
    public function getEncode()
    {
        return $this->encode;
    }

    /**
     * Returns the value of field appid
     *
     * @return string
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Returns the value of field appsecret
     *
     * @return string
     */
    public function getAppsecret()
    {
        return $this->appsecret;
    }

    /**
     * Returns the value of field wxid
     *
     * @return string
     */
    public function getWxid()
    {
        return $this->wxid;
    }

    /**
     * Returns the value of field weixin
     *
     * @return string
     */
    public function getWeixin()
    {
        return $this->weixin;
    }

    /**
     * Returns the value of field headerpic
     *
     * @return string
     */
    public function getHeaderpic()
    {
        return $this->headerpic;
    }

    /**
     * Returns the value of field token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Returns the value of field w_token
     *
     * @return string
     */
    public function getWToken()
    {
        return $this->w_token;
    }

    /**
     * Returns the value of field create_time
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Returns the value of field updatetime
     *
     * @return integer
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Returns the value of field tplcontentid
     *
     * @return string
     */
    public function getTplcontentid()
    {
        return $this->tplcontentid;
    }

    /**
     * Returns the value of field share_ticket
     *
     * @return string
     */
    public function getShareTicket()
    {
        return $this->share_ticket;
    }

    /**
     * Returns the value of field share_dated
     *
     * @return string
     */
    public function getShareDated()
    {
        return $this->share_dated;
    }

    /**
     * Returns the value of field authorizer_access_token
     *
     * @return string
     */
    public function getAuthorizerAccessToken()
    {
        return $this->authorizer_access_token;
    }

    /**
     * Returns the value of field authorizer_refresh_token
     *
     * @return string
     */
    public function getAuthorizerRefreshToken()
    {
        return $this->authorizer_refresh_token;
    }

    /**
     * Returns the value of field authorizer_expires
     *
     * @return string
     */
    public function getAuthorizerExpires()
    {
        return $this->authorizer_expires;
    }

    /**
     * Returns the value of field type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field web_access_token
     *
     * @return string
     */
    public function getWebAccessToken()
    {
        return $this->web_access_token;
    }

    /**
     * Returns the value of field web_refresh_token
     *
     * @return string
     */
    public function getWebRefreshToken()
    {
        return $this->web_refresh_token;
    }

    /**
     * Returns the value of field web_expires
     *
     * @return integer
     */
    public function getWebExpires()
    {
        return $this->web_expires;
    }

    /**
     * Returns the value of field qr
     *
     * @return string
     */
    public function getQr()
    {
        return $this->qr;
    }

    /**
     * Returns the value of field menu_config
     *
     * @return string
     */
    public function getMenuConfig()
    {
        return $this->menu_config;
    }

    /**
     * Returns the value of field wait_access
     *
     * @return integer
     */
    public function getWaitAccess()
    {
        return $this->wait_access;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_wx_user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_wx_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpWxUser[]|TpWxUser|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpWxUser|\Phalcon\Mvc\Model\ResultInterface
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
            'uid' => 'uid',
            'wxname' => 'wxname',
            'aeskey' => 'aeskey',
            'encode' => 'encode',
            'appid' => 'appid',
            'appsecret' => 'appsecret',
            'wxid' => 'wxid',
            'weixin' => 'weixin',
            'headerpic' => 'headerpic',
            'token' => 'token',
            'w_token' => 'w_token',
            'create_time' => 'create_time',
            'updatetime' => 'updatetime',
            'tplcontentid' => 'tplcontentid',
            'share_ticket' => 'share_ticket',
            'share_dated' => 'share_dated',
            'authorizer_access_token' => 'authorizer_access_token',
            'authorizer_refresh_token' => 'authorizer_refresh_token',
            'authorizer_expires' => 'authorizer_expires',
            'type' => 'type',
            'web_access_token' => 'web_access_token',
            'web_refresh_token' => 'web_refresh_token',
            'web_expires' => 'web_expires',
            'qr' => 'qr',
            'menu_config' => 'menu_config',
            'wait_access' => 'wait_access'
        ];
    }

}

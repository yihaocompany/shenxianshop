<?php

namespace Shenxianshop\Models;

class TpPlugin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(column="code", type="string", length=13, nullable=true)
     */
    protected $code;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=55, nullable=true)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(column="version", type="string", length=255, nullable=true)
     */
    protected $version;

    /**
     *
     * @var string
     * @Column(column="author", type="string", length=30, nullable=true)
     */
    protected $author;

    /**
     *
     * @var string
     * @Column(column="config", type="string", nullable=true)
     */
    protected $config;

    /**
     *
     * @var string
     * @Column(column="config_value", type="string", nullable=true)
     */
    protected $config_value;

    /**
     *
     * @var string
     * @Column(column="desc", type="string", length=255, nullable=true)
     */
    protected $desc;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=1, nullable=true)
     */
    protected $status;

    /**
     *
     * @var string
     * @Column(column="type", type="string", length=50, nullable=true)
     */
    protected $type;

    /**
     *
     * @var string
     * @Column(column="icon", type="string", length=255, nullable=true)
     */
    protected $icon;

    /**
     *
     * @var string
     * @Column(column="bank_code", type="string", nullable=true)
     */
    protected $bank_code;

    /**
     *
     * @var integer
     * @Column(column="scene", type="integer", length=1, nullable=true)
     */
    protected $scene;

    /**
     * Method to set the value of field code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * Method to set the value of field version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Method to set the value of field author
     *
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Method to set the value of field config
     *
     * @param string $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Method to set the value of field config_value
     *
     * @param string $config_value
     * @return $this
     */
    public function setConfigValue($config_value)
    {
        $this->config_value = $config_value;

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
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * Method to set the value of field bank_code
     *
     * @param string $bank_code
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->bank_code = $bank_code;

        return $this;
    }

    /**
     * Method to set the value of field scene
     *
     * @param integer $scene
     * @return $this
     */
    public function setScene($scene)
    {
        $this->scene = $scene;

        return $this;
    }

    /**
     * Returns the value of field code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
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
     * Returns the value of field version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Returns the value of field author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Returns the value of field config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Returns the value of field config_value
     *
     * @return string
     */
    public function getConfigValue()
    {
        return $this->config_value;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
     * Returns the value of field bank_code
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bank_code;
    }

    /**
     * Returns the value of field scene
     *
     * @return integer
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("tp_plugin");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_plugin';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpPlugin[]|TpPlugin|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpPlugin|\Phalcon\Mvc\Model\ResultInterface
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
            'code' => 'code',
            'name' => 'name',
            'version' => 'version',
            'author' => 'author',
            'config' => 'config',
            'config_value' => 'config_value',
            'desc' => 'desc',
            'status' => 'status',
            'type' => 'type',
            'icon' => 'icon',
            'bank_code' => 'bank_code',
            'scene' => 'scene'
        ];
    }

}

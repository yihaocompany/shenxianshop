<?php

namespace Shenxianshop\Models;

class AdminLog extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="log_id", type="integer", length=16, nullable=false)
     */
    protected $log_id;

    /**
     *
     * @var integer
     * @Column(column="admin_id", type="integer", length=10, nullable=true)
     */
    protected $admin_id;

    /**
     *
     * @var string
     * @Column(column="log_info", type="string", length=255, nullable=true)
     */
    protected $log_info;

    /**
     *
     * @var string
     * @Column(column="log_ip", type="string", length=30, nullable=true)
     */
    protected $log_ip;

    /**
     *
     * @var string
     * @Column(column="log_url", type="string", length=50, nullable=true)
     */
    protected $log_url;

    /**
     *
     * @var integer
     * @Column(column="log_time", type="integer", length=10, nullable=true)
     */
    protected $log_time;

    /**
     * Method to set the value of field log_id
     *
     * @param integer $log_id
     * @return $this
     */
    public function setLogId($log_id)
    {
        $this->log_id = $log_id;

        return $this;
    }

    /**
     * Method to set the value of field admin_id
     *
     * @param integer $admin_id
     * @return $this
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * Method to set the value of field log_info
     *
     * @param string $log_info
     * @return $this
     */
    public function setLogInfo($log_info)
    {
        $this->log_info = $log_info;

        return $this;
    }

    /**
     * Method to set the value of field log_ip
     *
     * @param string $log_ip
     * @return $this
     */
    public function setLogIp($log_ip)
    {
        $this->log_ip = $log_ip;

        return $this;
    }

    /**
     * Method to set the value of field log_url
     *
     * @param string $log_url
     * @return $this
     */
    public function setLogUrl($log_url)
    {
        $this->log_url = $log_url;

        return $this;
    }

    /**
     * Method to set the value of field log_time
     *
     * @param integer $log_time
     * @return $this
     */
    public function setLogTime($log_time)
    {
        $this->log_time = $log_time;

        return $this;
    }

    /**
     * Returns the value of field log_id
     *
     * @return integer
     */
    public function getLogId()
    {
        return $this->log_id;
    }

    /**
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Returns the value of field log_info
     *
     * @return string
     */
    public function getLogInfo()
    {
        return $this->log_info;
    }

    /**
     * Returns the value of field log_ip
     *
     * @return string
     */
    public function getLogIp()
    {
        return $this->log_ip;
    }

    /**
     * Returns the value of field log_url
     *
     * @return string
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * Returns the value of field log_time
     *
     * @return integer
     */
    public function getLogTime()
    {
        return $this->log_time;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("admin_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_log';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdminLog[]|AdminLog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdminLog|\Phalcon\Mvc\Model\ResultInterface
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
            'log_id' => 'log_id',
            'admin_id' => 'admin_id',
            'log_info' => 'log_info',
            'log_ip' => 'log_ip',
            'log_url' => 'log_url',
            'log_time' => 'log_time'
        ];
    }

}

<?php

namespace Shenxianshop\Models;

class AdminRole extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="role_id", type="integer", length=6, nullable=false)
     */
    protected $role_id;

    /**
     *
     * @var string
     * @Column(column="role_name", type="string", length=30, nullable=true)
     */
    protected $role_name;

    /**
     *
     * @var string
     * @Column(column="act_list", type="string", nullable=true)
     */
    protected $act_list;

    /**
     *
     * @var string
     * @Column(column="role_desc", type="string", length=255, nullable=true)
     */
    protected $role_desc;

    /**
     * Method to set the value of field role_id
     *
     * @param integer $role_id
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }

    /**
     * Method to set the value of field role_name
     *
     * @param string $role_name
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->role_name = $role_name;

        return $this;
    }

    /**
     * Method to set the value of field act_list
     *
     * @param string $act_list
     * @return $this
     */
    public function setActList($act_list)
    {
        $this->act_list = $act_list;

        return $this;
    }

    /**
     * Method to set the value of field role_desc
     *
     * @param string $role_desc
     * @return $this
     */
    public function setRoleDesc($role_desc)
    {
        $this->role_desc = $role_desc;

        return $this;
    }

    /**
     * Returns the value of field role_id
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * Returns the value of field role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->role_name;
    }

    /**
     * Returns the value of field act_list
     *
     * @return string
     */
    public function getActList()
    {
        return $this->act_list;
    }

    /**
     * Returns the value of field role_desc
     *
     * @return string
     */
    public function getRoleDesc()
    {
        return $this->role_desc;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        $this->setSource("admin_role");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin_role';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdminRole[]|AdminRole|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdminRole|\Phalcon\Mvc\Model\ResultInterface
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
            'role_id' => 'role_id',
            'role_name' => 'role_name',
            'act_list' => 'act_list',
            'role_desc' => 'role_desc'
        ];
    }

}

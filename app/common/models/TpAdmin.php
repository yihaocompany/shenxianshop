<?php

namespace Shenxianshop\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class TpAdmin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="admin_id", type="integer", length=5, nullable=false)
     */
    protected $admin_id;

    /**
     *
     * @var string
     * @Column(column="user_name", type="string", length=60, nullable=false)
     */
    protected $user_name;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=60, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(column="password", type="string", length=32, nullable=false)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(column="ec_salt", type="string", length=10, nullable=true)
     */
    protected $ec_salt;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=11, nullable=false)
     */
    protected $add_time;

    /**
     *
     * @var integer
     * @Column(column="last_login", type="integer", length=11, nullable=false)
     */
    protected $last_login;

    /**
     *
     * @var string
     * @Column(column="last_ip", type="string", length=15, nullable=false)
     */
    protected $last_ip;

    /**
     *
     * @var string
     * @Column(column="nav_list", type="string", nullable=true)
     */
    protected $nav_list;

    /**
     *
     * @var string
     * @Column(column="lang_type", type="string", length=50, nullable=false)
     */
    protected $lang_type;

    /**
     *
     * @var integer
     * @Column(column="agency_id", type="integer", length=5, nullable=false)
     */
    protected $agency_id;

    /**
     *
     * @var integer
     * @Column(column="suppliers_id", type="integer", length=5, nullable=true)
     */
    protected $suppliers_id;

    /**
     *
     * @var string
     * @Column(column="todolist", type="string", nullable=true)
     */
    protected $todolist;

    /**
     *
     * @var integer
     * @Column(column="role_id", type="integer", length=5, nullable=true)
     */
    protected $role_id;

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
     * Method to set the value of field user_name
     *
     * @param string $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

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
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field ec_salt
     *
     * @param string $ec_salt
     * @return $this
     */
    public function setEcSalt($ec_salt)
    {
        $this->ec_salt = $ec_salt;

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
     * Method to set the value of field last_login
     *
     * @param integer $last_login
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Method to set the value of field last_ip
     *
     * @param string $last_ip
     * @return $this
     */
    public function setLastIp($last_ip)
    {
        $this->last_ip = $last_ip;

        return $this;
    }

    /**
     * Method to set the value of field nav_list
     *
     * @param string $nav_list
     * @return $this
     */
    public function setNavList($nav_list)
    {
        $this->nav_list = $nav_list;

        return $this;
    }

    /**
     * Method to set the value of field lang_type
     *
     * @param string $lang_type
     * @return $this
     */
    public function setLangType($lang_type)
    {
        $this->lang_type = $lang_type;

        return $this;
    }

    /**
     * Method to set the value of field agency_id
     *
     * @param integer $agency_id
     * @return $this
     */
    public function setAgencyId($agency_id)
    {
        $this->agency_id = $agency_id;

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
     * Method to set the value of field todolist
     *
     * @param string $todolist
     * @return $this
     */
    public function setTodolist($todolist)
    {
        $this->todolist = $todolist;

        return $this;
    }

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
     * Returns the value of field admin_id
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Returns the value of field user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
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
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field ec_salt
     *
     * @return string
     */
    public function getEcSalt()
    {
        return $this->ec_salt;
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
     * Returns the value of field last_login
     *
     * @return integer
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Returns the value of field last_ip
     *
     * @return string
     */
    public function getLastIp()
    {
        return $this->last_ip;
    }

    /**
     * Returns the value of field nav_list
     *
     * @return string
     */
    public function getNavList()
    {
        return $this->nav_list;
    }

    /**
     * Returns the value of field lang_type
     *
     * @return string
     */
    public function getLangType()
    {
        return $this->lang_type;
    }

    /**
     * Returns the value of field agency_id
     *
     * @return integer
     */
    public function getAgencyId()
    {
        return $this->agency_id;
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
     * Returns the value of field todolist
     *
     * @return string
     */
    public function getTodolist()
    {
        return $this->todolist;
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
        $this->setSource("tp_admin");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tp_admin';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAdmin[]|TpAdmin|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TpAdmin|\Phalcon\Mvc\Model\ResultInterface
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
            'admin_id' => 'admin_id',
            'user_name' => 'user_name',
            'email' => 'email',
            'password' => 'password',
            'ec_salt' => 'ec_salt',
            'add_time' => 'add_time',
            'last_login' => 'last_login',
            'last_ip' => 'last_ip',
            'nav_list' => 'nav_list',
            'lang_type' => 'lang_type',
            'agency_id' => 'agency_id',
            'suppliers_id' => 'suppliers_id',
            'todolist' => 'todolist',
            'role_id' => 'role_id'
        ];
    }

}

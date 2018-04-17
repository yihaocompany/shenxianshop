<?php

namespace Shenxianshop\Models;

class Suppliers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="suppliers_id", type="integer", length=5, nullable=false)
     */
    protected $suppliers_id;

    /**
     *
     * @var string
     * @Column(column="suppliers_name", type="string", length=255, nullable=false)
     */
    protected $suppliers_name;

    /**
     *
     * @var string
     * @Column(column="suppliers_desc", type="string", nullable=false)
     */
    protected $suppliers_desc;

    /**
     *
     * @var integer
     * @Column(column="is_check", type="integer", length=1, nullable=false)
     */
    protected $is_check;

    /**
     *
     * @var string
     * @Column(column="suppliers_contacts", type="string", length=255, nullable=false)
     */
    protected $suppliers_contacts;

    /**
     *
     * @var string
     * @Column(column="suppliers_phone", type="string", length=20, nullable=false)
     */
    protected $suppliers_phone;

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
     * Method to set the value of field suppliers_name
     *
     * @param string $suppliers_name
     * @return $this
     */
    public function setSuppliersName($suppliers_name)
    {
        $this->suppliers_name = $suppliers_name;

        return $this;
    }

    /**
     * Method to set the value of field suppliers_desc
     *
     * @param string $suppliers_desc
     * @return $this
     */
    public function setSuppliersDesc($suppliers_desc)
    {
        $this->suppliers_desc = $suppliers_desc;

        return $this;
    }

    /**
     * Method to set the value of field is_check
     *
     * @param integer $is_check
     * @return $this
     */
    public function setIsCheck($is_check)
    {
        $this->is_check = $is_check;

        return $this;
    }

    /**
     * Method to set the value of field suppliers_contacts
     *
     * @param string $suppliers_contacts
     * @return $this
     */
    public function setSuppliersContacts($suppliers_contacts)
    {
        $this->suppliers_contacts = $suppliers_contacts;

        return $this;
    }

    /**
     * Method to set the value of field suppliers_phone
     *
     * @param string $suppliers_phone
     * @return $this
     */
    public function setSuppliersPhone($suppliers_phone)
    {
        $this->suppliers_phone = $suppliers_phone;

        return $this;
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
     * Returns the value of field suppliers_name
     *
     * @return string
     */
    public function getSuppliersName()
    {
        return $this->suppliers_name;
    }

    /**
     * Returns the value of field suppliers_desc
     *
     * @return string
     */
    public function getSuppliersDesc()
    {
        return $this->suppliers_desc;
    }

    /**
     * Returns the value of field is_check
     *
     * @return integer
     */
    public function getIsCheck()
    {
        return $this->is_check;
    }

    /**
     * Returns the value of field suppliers_contacts
     *
     * @return string
     */
    public function getSuppliersContacts()
    {
        return $this->suppliers_contacts;
    }

    /**
     * Returns the value of field suppliers_phone
     *
     * @return string
     */
    public function getSuppliersPhone()
    {
        return $this->suppliers_phone;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("suppliers");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'suppliers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Suppliers[]|Suppliers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Suppliers|\Phalcon\Mvc\Model\ResultInterface
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
            'suppliers_id' => 'suppliers_id',
            'suppliers_name' => 'suppliers_name',
            'suppliers_desc' => 'suppliers_desc',
            'is_check' => 'is_check',
            'suppliers_contacts' => 'suppliers_contacts',
            'suppliers_phone' => 'suppliers_phone'
        ];
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 5:40 PM
 */

namespace App\Creational\Prototype2\OOP;


abstract class  IAcmePrototype
{

    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmployeePic()
    {
        return $this->employeePic;
    }

    /**
     * @param mixed $employeePic
     */
    public function setEmployeePic($employeePic)
    {
        $this->employeePic = $employeePic;
    }

    /**
     * @return mixed
     */


    abstract  public  function setDept($orgCode);
    abstract  public  function  getDept();









}
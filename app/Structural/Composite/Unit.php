<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/14/2019
 * Time: 11:39 AM
 */

namespace App\Structural\Composite;


abstract    class Unit
{

    abstract public function bombardStrength():int;

  public  function  addUnit($unit){
        throw new UnitException(get_class($this) . "is a leaf");
    }

    public function removeUnit($unit){
        throw new UnitException(get_class($this) . "is a leaf");
    }




}
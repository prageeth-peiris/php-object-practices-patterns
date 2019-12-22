<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/22/2019
 * Time: 7:57 PM
 */

namespace App\Structural\Composite;




class AnimalForce extends  CompositeUnit
{


    public function addUnit($unit)
    {
        if($unit instanceof Witcher){
            throw new \Exception("witcher are not allowed");
        }

        parent::addUnit($unit);


    }


    public function bombardStrength():int{
        return 0;
    }


}
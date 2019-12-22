<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/14/2019
 * Time: 11:39 AM
 */

namespace App\Structural\Composite;


abstract class Unit
{

    abstract public function bombardStrength():int;

    public function getComposite(){
        return null;
    }



}
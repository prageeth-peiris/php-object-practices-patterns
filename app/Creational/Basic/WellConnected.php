<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:50 PM
 */

namespace App\Creational\Basic;


class WellConnected extends  Employee
{
    public function fire()
    {
       print "{$this->getName()} : I will call my dad";
    }


}
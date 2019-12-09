<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:51 PM
 */

namespace App\Creational\Basic;


class CluedUp extends  Employee
{
    public function fire()
    {
        print "{$this->getName()} : I will call my lawyer";
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:38 PM
 */

namespace App\Creational\Basic;


class Minion extends Employee
{
    public function fire()
    {
        print "{$this->getName()} : i will clear my desk";
    }


}
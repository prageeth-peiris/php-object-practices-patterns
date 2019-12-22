<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/14/2019
 * Time: 11:50 AM
 */

namespace App\Structural\Composite;






class Army extends  CompositeUnit
{

    public function bombardStrength(): int
    {
       $total = 0;


       foreach ($this->units as $unit){
           $total += $unit->bombardStrength();

       }

       return $total;
    }



}
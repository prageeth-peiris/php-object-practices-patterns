<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/14/2019
 * Time: 11:50 AM
 */

namespace App\Structural\Composite;






class Army extends  Unit
{
    private $units = [];

    public function  addUnit($unit)
    {

        if(is_array($unit)){

            foreach ($unit as $singleUnit){
                $this->addUnit($singleUnit);

            }

            return;

        }

        if($unit instanceof  Unit){
           return  $this->addSingleUnit($unit);

        }

        throw new UnitException("Invalid Unit Type");


    }


    private function addSingleUnit(Unit $unit){
        if (in_array($unit, $this->units, true)) {
            return "like repition like me";
        }
        array_push($this->units,$unit);
    }



    public function bombardStrength(): int
    {
       $total = 0;


       foreach ($this->units as $unit){
           $total += $unit->bombardStrength();

       }

       return $total;
    }

    public function backdoor(){
        print_r($this->units);
    }


}
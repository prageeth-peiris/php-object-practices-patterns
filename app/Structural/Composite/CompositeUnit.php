<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/22/2019
 * Time: 7:06 PM
 */

namespace App\Structural\Composite;


abstract  class CompositeUnit extends  Unit
{


    protected  $units = [];

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

    //this only works with object referneces
    public function removeUnit(Unit $unit)
    {

        $idx = array_search($unit,$this->units,true);

        if(is_int($idx)){
            array_splice($this->units,$idx,1,[]);

        }

    }


    private function addSingleUnit(Unit $unit){


        if (in_array($unit, $this->units, true)) {
            return;
        }

        array_push($this->units,$unit);

    }




    public function  getComposite():CompositeUnit{

return $this;

    }

    public function getUnits(): array {
        return $this->units;

    }

}
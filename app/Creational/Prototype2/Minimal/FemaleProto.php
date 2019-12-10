<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 5:17 PM
 */

namespace App\Creational\Prototype2\Minimal;


class FemaleProto extends IPrototype
{


    const  GENDER = "FEMALE";

    public $fecundity;

    /**
     * FemaleProto constructor.
     * @param $fecundity
     */
    public function __construct()
    {
        $this->eyeColor="red";
        $this->wingBeat="220";
        $this->unitEyes="760 ";
    }


}
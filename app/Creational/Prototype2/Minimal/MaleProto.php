<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 5:15 PM
 */

namespace App\Creational\Prototype2\Minimal;


class MaleProto extends  IPrototype
{

    const GENDER = "MALE";

    public $mated;

    /**
     * MaleProto constructor.
     * @param $mated
     */
    public function __construct()
    {
        $this->eyeColor="red";
        $this->wingBeat="220";
        $this->unitEyes="760 ";
    }


}
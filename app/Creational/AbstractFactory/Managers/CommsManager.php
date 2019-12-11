<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 10:56 AM
 */

namespace App\Creational\AbstractFactory\Managers;






use App\Creational\AbstractFactory\Encoder;

abstract class CommsManager
{

    const APPt = 1;
    const TTD = 2;
    const CONTACT = 3;



    abstract public function getHeaderText():string ;


    abstract public function getFooterText():string;

    abstract  public  function  make(int $flag_int):Encoder;


}
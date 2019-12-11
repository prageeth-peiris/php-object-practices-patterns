<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 10:58 AM
 */

namespace App\Creational\AbstractFactory;


abstract class ApptEncoder implements Encoder
{

    abstract public function encode():string;

}
<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 4:42 PM
 */

namespace App\Creational\Prototype2;


abstract  class CloneMe
{

    public $name;
    public $picture;

    abstract  function  __clone();

}
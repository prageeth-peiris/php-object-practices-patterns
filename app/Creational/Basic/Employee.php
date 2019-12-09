<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:36 PM
 */

namespace App\Creational\Basic;


 abstract  class Employee
{

private $name;
private static $types = ['Minion','CluedUp','WellConnected'];


public static function recruit(string $name){
    $num = rand(1,count(self::$types))-1;

    $class = __NAMESPACE__ . "\\". self::$types[$num];

    return new $class($name);


}

     /**
      * Employee constructor.
      * @param $name
      */
     public function __construct($name)
     {
         $this->name = $name;
     }

     /**
      * @return mixed
      */
     public function getName()
     {
         return $this->name;
     }

     abstract public function fire();




 }
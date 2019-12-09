<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 4:30 PM
 */

namespace App\Creational\Singleton;


class Preferences
{


    private $props = [];
    private static $instance;

    /**
     * Preferences constructor.
     * @param array $props
     */
    private function __construct()
    {

    }

    public static function getInstance(){
        if(empty(self::$instance)){

           self::$instance =  new Preferences();

        }

        return self::$instance;

}


    public function  setProperty(string $key,string $val){

        $this->props[$key] = $val;

    }

    public function getProperty(string $key):string{

        return $this->props[$key];

    }


}
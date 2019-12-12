<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/12/2019
 * Time: 1:11 PM
 */

namespace App\ServiceLocator;


use App\Creational\Factory\Managers\BlogManager;
use App\Creational\Factory\Managers\CommsManager;
use App\Creational\Factory\Managers\MegaManager;

class AppConfig
{

    private $CommsManager;
    private static $instance;

    /**
     * AppConfig constructor.
     */
    private function __construct()
    {
        $this->init();

    }

    /**
     * @return mixed
     */
    public function getCommsManager():CommsManager
    {
        return $this->CommsManager;
    }

private function init(){
        switch (Settings::$COMMSTYPE){

            case 'Mega':
                $this->CommsManager = new MegaManager();
                break;

           default:
                $this->CommsManager = new BlogManager();


        }
}

public static function getInstance():AppConfig{

        if(empty(self::$instance)){
            self::$instance = new self();

        }

        return self::$instance;

}








}
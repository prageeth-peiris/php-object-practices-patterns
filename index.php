<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";




$proc = new \App\Structural\Decorator\EEExample\AuthenticateRequest(new \App\Structural\Decorator\EEExample\LogRequest(new \App\Structural\Decorator\EEExample\MainProcess()));



$proc->process(new \App\Structural\Decorator\EEExample\Request());























<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";


$facade = new \App\Structural\Facade\ProductFacade(__DIR__."/app/Structural/Facade/test.txt");


$object = $facade->getProduct("234");

print_r($object);




























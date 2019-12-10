<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";



$manger = new \App\Creational\AbstractFactory\Managers\BlogManager();


echo $manger->getHeaderText();

echo $manger->getFooterText();

echo $manger->make(\App\Creational\AbstractFactory\Managers\CommsManager::CONTACT)->encode();















<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";




$manger = new \App\Creational\Factory\Managers\BlogManager();


echo $manger->getHeaderText();

echo $manger->getApptEncoder()->encode();

echo $manger->getFooterText();













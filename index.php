<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";



$pref = \App\Creational\Singleton\Preferences::getInstance();

$pref->setProperty("name","prageeth");


unset($pref);

$pref2 =  \App\Creational\Singleton\Preferences::getInstance();

print $pref2->getProperty("name");








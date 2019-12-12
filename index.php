<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";




$commsMgr = \App\ServiceLocator\AppConfig::getInstance()->getCommsManager();

echo $commsMgr->getApptEncoder()->encode();















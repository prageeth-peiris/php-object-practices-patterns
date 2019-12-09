<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/9/2019
 * Time: 9:17 PM
 */

namespace App\Creational\Factory\Managers;


 use App\Creational\Factory\ApptEncoder;

 abstract class CommsManager
{


abstract  public function getApptEncoder():ApptEncoder;

abstract  public function  getHeaderText():string ;


abstract  public  function getFooterText(): string ;




}
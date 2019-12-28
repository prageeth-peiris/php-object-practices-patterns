<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 10:39 AM
 */

namespace App\Structural\Decorator;


 class PollutionDecorator extends  TileDecorator
{
     public function getWealthFactor(): int
     {
         // TODO: Implement getWealthFactor() method.

           return  $this->tile->getWealthFactor() - 4;

     }


 }
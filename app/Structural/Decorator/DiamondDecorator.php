<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 10:38 AM
 */

namespace App\Structural\Decorator;


class DiamondDecorator extends  TileDecorator
{


    public function getWealthFactor(): int
    {
      return   $this->tile->getWealthFactor() + 2;
    }


}
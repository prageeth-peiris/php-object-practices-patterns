<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 10:17 AM
 */

namespace App\Structural\Decorator;

class PollutedPlains extends  Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor()- 4 ;
    }


}
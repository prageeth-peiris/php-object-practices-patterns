<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 10:11 AM
 */

namespace App\Structural\Decorator;


class Plains extends  Tile
{

    private $wealthFactor = 2;

    public function getWealthFactor(): int
    {
        // TODO: Implement getWealthFactor() method.

        return $this->wealthFactor;
    }


}
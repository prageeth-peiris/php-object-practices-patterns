<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 10:37 AM
 */

namespace App\Structural\Decorator;


abstract  class TileDecorator extends  Tile
{

    protected  $tile;

    /**
     * TileDecorator constructor.
     * @param $tile
     */
    public function __construct(Tile  $tile)
    {
        $this->tile = $tile;
    }


}
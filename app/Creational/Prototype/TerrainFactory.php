<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 1:32 PM
 */

namespace App\Creational\Prototype;


use App\Creational\Prototype\Assests\Forest\Forest;
use App\Creational\Prototype\Assests\Plains\Plains;
use App\Creational\Prototype\Assests\Sea\Sea;

class TerrainFactory
{

    private $sea;

    private $forest;

    private $plains;

    /**
     * TerrainFactory constructor.
     * @param $sea
     * @param $forest
     * @param $plains
     */
    public function __construct(Sea $sea,Forest  $forest,Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    /**
     * @return Sea
     */
    public function getSea()
    {
        return clone $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest()
    {
        return clone $this->forest;
    }

    /**
     * @return Plains
     */
    public function getPlains()
    {
        return clone $this->plains;
    }




}
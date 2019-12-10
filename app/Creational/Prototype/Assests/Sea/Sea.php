<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 1:27 PM
 */

namespace App\Creational\Prototype\Assests\Sea;


abstract  class Sea
{

    private $navigability = 0;

    /**
     * Sea constructor.
     * @param int $navigability
     */
    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }




}
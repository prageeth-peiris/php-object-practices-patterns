<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/29/2019
 * Time: 7:47 PM
 */

namespace App\Structural\Facade;


class Product
{

    protected $id;

    protected $name;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


}
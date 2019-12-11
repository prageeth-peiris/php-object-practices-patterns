<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 4:44 PM
 */

namespace App\Creational\Prototype2;


class Person extends CloneMe
{


    /**
     * Person constructor.
     */
    public function __construct()
    {
        $this->picture =  "cloneMan.png";
        $this->name = "Original";
    }

    public function display(){

        echo "<img src='$this->picture'>";
        echo "<br />$this->name <p />";

    }


    function __clone()
    {

    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 11:05 AM
 */

namespace App\Creational\AbstractFactory;


class BlogApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        // TODO: Implement encode() method.

        return "I have  encoded appointment data in BlogCal Format";
    }


}
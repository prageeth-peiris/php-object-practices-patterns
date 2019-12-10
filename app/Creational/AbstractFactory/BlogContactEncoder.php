<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 1:08 PM
 */

namespace App\Creational\AbstractFactory;


class BlogContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
      return "I am  encoidng contact data in blog cal format";
    }


}
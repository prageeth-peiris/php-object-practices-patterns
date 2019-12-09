<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/9/2019
 * Time: 9:56 PM
 */

namespace App\Creational\Factory\Managers;


use App\Creational\Factory\ApptEncoder;
use App\Creational\Factory\BlogsApptEncoder;



class BlogManager extends CommsManager
{
    public function getApptEncoder():ApptEncoder
    {
       return new BlogsApptEncoder();
    }

    public function getHeaderText():string
    {
        return "Blog Header Text";
    }

    public function getFooterText():string
    {
        return "Blog Footer Text";
    }


}
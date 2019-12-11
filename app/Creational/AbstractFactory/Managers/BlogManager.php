<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/10/2019
 * Time: 11:04 AM
 */

namespace App\Creational\AbstractFactory\Managers;




use App\Creational\AbstractFactory\BlogApptEncoder;
use App\Creational\AbstractFactory\BlogContactEncoder;
use App\Creational\AbstractFactory\Encoder;

class BlogManager extends CommsManager
{
    public function getHeaderText(): string
    {
        // TODO: Implement getHeaderText() method.

        return "Blog Format Header";
    }

    public function make(int $flag_int): Encoder
    {
        switch ($flag_int){

            case self::APPt:
                return new BlogApptEncoder();
                break;

            case self::CONTACT:
             return new BlogContactEncoder();

             break;

            default:

                return new BlogApptEncoder();





        }
    }


    public function getFooterText(): string
    {
        return "Blog Format Footer";
    }


}
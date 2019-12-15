<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/12/2019
 * Time: 1:17 PM
 */

namespace App\Creational\Factory\Managers;


use App\Creational\Factory\ApptEncoder;
use App\Creational\Factory\MegaApptEncoder;

class MegaManager extends  CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getHeaderText(): string
    {
        return "Mega header";
    }

    public function getFooterText(): string
    {

        return "Mega footer";
        // TODO: Implement getFooterText() method.
    }


}
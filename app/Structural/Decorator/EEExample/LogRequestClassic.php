<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:24 AM
 */

namespace App\Structural\Decorator\EEExample;


class LogRequestClassic extends MainProcess
{
    public function process(Request $request)
    {
        parent::process($request); // TODO: Change the autogenerated stub
        print __CLASS__ . ":Logging the Request \n";

    }


}
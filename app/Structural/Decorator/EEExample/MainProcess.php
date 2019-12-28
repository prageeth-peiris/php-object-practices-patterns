<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:22 AM
 */

namespace App\Structural\Decorator\EEExample;


class MainProcess extends ProcessRequest
{
    public function process(Request $request)
    {
        // TODO: Implement process() method.

        print __CLASS__. ": dOING THE MAIN PROCESS \n";
    }


}
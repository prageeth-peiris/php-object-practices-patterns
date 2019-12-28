<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:28 AM
 */

namespace App\Structural\Decorator\EEExample;


class LogRequest extends  ProcessDecorator
{
    public function process(Request $request)
    {
        print __CLASS__ . "Logging the request \n\n";

        $this->process->process($request);
    }


}
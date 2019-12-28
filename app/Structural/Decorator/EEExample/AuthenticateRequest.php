<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:36 AM
 */

namespace App\Structural\Decorator\EEExample;


class AuthenticateRequest extends  ProcessDecorator
{
    public function process(Request $request)
    {
      print __CLASS__ . "Authenticating the request \n";

      $this->process->process($request);
    }


}
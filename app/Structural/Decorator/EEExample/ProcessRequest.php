<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:21 AM
 */

namespace App\Structural\Decorator\EEExample;


abstract  class ProcessRequest
{

    abstract  public function process(Request $request);


}
<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/28/2019
 * Time: 11:27 AM
 */

namespace App\Structural\Decorator\EEExample;


abstract  class ProcessDecorator extends  ProcessRequest
{


    protected $process;

    /**
     * ProcessDecorator constructor.
     * @param $process
     */
    public function __construct(ProcessRequest  $process)
    {
        $this->process = $process;
    }


}
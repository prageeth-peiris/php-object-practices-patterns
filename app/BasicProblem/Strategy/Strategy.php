<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 1:55 PM
 */

namespace App\BasicProblem\Strategy;


use App\BasicProblem\Lesson;

abstract class Strategy
{


    abstract  function cost(Lesson $lesson):int;

    abstract function chargeType():string;




}
<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 1:57 PM
 */

namespace App\BasicProblem\Strategy;


use App\BasicProblem\Lesson;

class Fixed extends Strategy
{
    function cost(Lesson $lesson): int
    {
        return 30;
    }

    function chargeType(): string
    {
        return "I am fixed startegy";
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:56 PM
 */

namespace App\BasicProblem\Registration;


use App\BasicProblem\Lesson;

class RegistartionMgr
{


public function register(Lesson $lesson){


    $notifier = Notifier::getNotifier();

    $notifier->inform("new lesson: cost ({$lesson->cost()})");



}

}
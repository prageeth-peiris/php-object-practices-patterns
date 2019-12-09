<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:05 PM
 */

namespace App\BasicProblem\Registration;


class TextNotifier extends Notifier
{
    public function inform($message)
    {
       print "Text Notification : {$message}";
    }


}
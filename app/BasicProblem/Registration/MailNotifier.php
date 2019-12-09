<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:02 PM
 */

namespace  App\BasicProblem\Registration;
class MailNotifier extends  \App\BasicProblem\Registration\Notifier{
    public function inform($message)
    {
        print "Mail Notification :{$message}";
    }


}
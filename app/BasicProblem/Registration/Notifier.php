<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:58 PM
 */

namespace App\BasicProblem\Registration;


abstract  class Notifier
{


   public static function getNotifier():Notifier{

if(rand(1,2)===1){
    return new MailNotifier();

}else{
    return new TextNotifier();
}


   }

   abstract public function inform($message);

}
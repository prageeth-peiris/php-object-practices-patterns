<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 1:48 PM
 */

namespace App\BasicProblem;
use App\BasicProblem\Strategy\Strategy;

abstract class Lesson
{

  private $duartion;
  private $costStrategy;

    /**
     * Lesson constructor.
     * @param $duartion
     * @param $costStrategy
     */
    public function __construct(int $duartion, Strategy $costStrategy)
    {
        $this->duartion = $duartion;
        $this->costStrategy = $costStrategy;
    }

    /**
     * @return int
     */
    public function getDuartion()
    {
        return $this->duartion;
    }


    public function chargeType(){
        return  $this->costStrategy->chargeType();
    }

    public function cost(){

        return $this->costStrategy->cost($this);
}





}
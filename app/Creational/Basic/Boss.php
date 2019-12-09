<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 3:41 PM
 */

namespace App\Creational\Basic;


class Boss
{


    private $employees = [];




    public function addEmployee(Employee $employee){

        if(!$employee instanceof Employee){

            throw new Exception("Invalid employee type");
        }

        $this->employees[] =  $employee;

    }



    public function fails(){

        if(count($this->employees) >0){

            $emp = array_pop($this->employees);

            $emp->fire();



        }else {

            print "I will take responsibility : dear boss";

        }

    }



}
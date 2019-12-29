<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 12/29/2019
 * Time: 8:30 PM
 */

namespace App\Structural\Facade;


class ProductFacade
{

private $products  = [];


private $file;

    /**
     * ProductFacade constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;

        $this->compile($file);
    }




    private function  compile($file){

        $lines = $this->getProductFileLines($file);


        foreach($lines as $line){

            $id = $this->getIDFromLine($line);
            $name = $this->getNameFromLine($line);

            $this->products[$id] = $this->getProductObjectFromId($id,$name);

        }

    }


    public function getProducts():array{

        if(!$this->products){
            return $this->products;

        }

        return [];
    }


    public function getProduct(string $id):Product{



        if(isset($this->products[$id])){

            return $this->products[$id];

        }

        return  null;
    }


    private function getProductObjectFromId($id,$name){


        return new \App\Structural\Facade\Product($id,$name);

    }

   private function getProductFileLines($file){


        return file($file);

    }

    function getNameFromLine($line)
    {
        if (preg_match("/.*-(.*)\s\d+/", $line, $array)) {
            return str_replace('_', ' ', $array[1]);
        }
        return '';
    }

    function getIDFromLine($line)
    {
        if (preg_match("/^(\d{1,3})-/", $line, $array)) {
            return $array[1];
        }
        return -1;
    }



}
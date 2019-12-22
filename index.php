<?php
/**
 * Created by PhpStorm.
 * User: Prageeth
 * Date: 12/9/2019
 * Time: 2:08 PM
 */

require_once "./vendor/autoload.php";




$main_army = new \App\Structural\Composite\Army();


$main_army->addUnit([
    new \App\Structural\Composite\LaserCanonUnit(),
    new \App\Structural\Composite\Archer()

]);

$animal_army = new \App\Structural\Composite\AnimalForce();

$animal_army->addUnit(new  \App\Structural\Composite\Archer());


$main_army->addUnit($animal_army);


//(new \App\Structural\Composite\Archer())->addUnit(new \App\Structural\Composite\LaserCanonUnit());


echo $main_army->bombardStrength();



















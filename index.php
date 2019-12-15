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
    new \App\Structural\Composite\Archer(),
    new \App\Structural\Composite\Archer(),
    new \App\Structural\Composite\Archer(),

]);

$sub_army = new \App\Structural\Composite\Army();


$sub_army->addUnit([

    new \App\Structural\Composite\LaserCanonUnit(),
    new \App\Structural\Composite\Archer(),
    new \App\Structural\Composite\Army()
]);

$main_army->addUnit($sub_army);
$main_army->addUnit($sub_army);
$main_army->addUnit($sub_army);

$main_army->backdoor();
//echo $main_army->bombardStrength();

















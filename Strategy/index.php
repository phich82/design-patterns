<?php
require __DIR__ . '/../autoloader.php';

use Strategy\CityDuck;
use Strategy\JetFly;
use Strategy\ModelDuck;
use Strategy\WildDuck;

$wildDuck = new WildDuck();
$cityDuck = new CityDuck();

$modelDuck = new ModelDuck;
$modelDuck->setFlyBehavior(new JetFly);

var_dump($modelDuck->fly());

// var_dump(
//     $wildDuck->fly(),
//     $wildDuck->quack(),
//     $wildDuck->display(),
//     $cityDuck->fly(),
//     $cityDuck->quack(),
//     $cityDuck->display(),
// );

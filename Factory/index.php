<?php
require __DIR__ . '/../autoloader.php';

use Factory\SeaLogistics;
use Factory\RoadLogistics;
use Factory\Transporter;

$roadLogistics = new RoadLogistics();
$seaLogistics = new SeaLogistics();

var_dump($roadLogistics->deliver());
var_dump($seaLogistics->deliver());

var_dump(Transporter::get(Transporter::ROAD)->deliver());
var_dump(Transporter::get(Transporter::SEA)->deliver());
var_dump(Transporter::get(Transporter::SHIP)->deliver());

var_dump(Transporter::road()->deliver());
var_dump(Transporter::sea()->deliver());
var_dump(Transporter::ship()->deliver());

var_dump(Transporter::getRoad()->deliver());
var_dump(Transporter::getSea()->deliver());
var_dump(Transporter::getShip()->deliver());

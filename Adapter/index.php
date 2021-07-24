<?php
require __DIR__ . '/../autoloader.php';

use Adapter\Adaptee;
use Adapter\Adapter;

$adapter = new Adapter(new Adaptee());

var_dump($adapter->request());
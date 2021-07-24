<?php
namespace Adapter;

use Adapter\Adaptee;
use Adapter\AdapterContract;

class Adapter implements AdapterContract
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return $this->adaptee->specialRequest();
    }
}
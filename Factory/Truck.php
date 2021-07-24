<?php
namespace Factory;

use Factory\Transport;

/**
 * ConcreteProduct
 */
class Truck implements Transport
{
    public function deliver()
    {
        return "Deliver by ".__CLASS__;
    }
}
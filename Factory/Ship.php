<?php
namespace Factory;

use Factory\Transport;

/**
 * ConcreteProduct
 */
class Ship implements Transport
{
    public function deliver()
    {
        return "Deliver by ".__CLASS__;
    }
}
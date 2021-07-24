<?php
namespace Factory;

use Factory\Ship;
use Factory\Logistics;

/**
 * ConcreteCreator
 */
class SeaLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
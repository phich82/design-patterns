<?php
namespace Factory;

use Factory\Truck;
use Factory\Logistics;

/**
 * ConcreteCreator
 */
class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
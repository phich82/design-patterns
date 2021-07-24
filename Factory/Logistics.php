<?php
namespace Factory;

use Factory\Transport;

/**
 * Creator
 */
abstract class Logistics
{
    abstract public function createTransport(): Transport;

    public function deliver()
    {
        $transport = $this->createTransport();

        return $transport->deliver();
    }
}
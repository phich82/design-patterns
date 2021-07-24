<?php
namespace Decorator;

use Decorator\BeverageContract;

/**
 * Primary menu
 */
class Espresso extends BeverageContract
{
    public function cost()
    {
        return 2000;
    }
}
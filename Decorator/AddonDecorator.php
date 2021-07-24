<?php

namespace Decorator;

use Decorator\BeverageContract;

abstract class AddonDecorator extends BeverageContract
{
    abstract public function cost();
}
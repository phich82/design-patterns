<?php
namespace Decorator;

use Decorator\AddonDecorator;
use Decorator\BeverageContract;

/**
 * Submenu (decorator)
 */
class Cafe extends AddonDecorator
{
    private $beverage;
    private static $cost = 10000;

    public function __construct(BeverageContract $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + self::$cost;
    }
}
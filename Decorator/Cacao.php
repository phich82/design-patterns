<?php
namespace Decorator;

use Decorator\AddonDecorator;
use Decorator\BeverageContract;

/**
 * Submenu (decorator)
 */
class Cacao extends AddonDecorator
{
    private $beverage;
    private static $cost = 30000;

    public function __construct(BeverageContract $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + self::$cost;
    }
}
<?php
namespace Strategy;

use Strategy\Duck;
use Strategy\SimpleFly;
use Strategy\SimpleQuack;
use Strategy\DisplayAsGraphic;

class CityDuck extends Duck
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->flyBehavior = new SimpleFly();
        $this->quackBehavior = new SimpleQuack();
        $this->displayBehavior = new DisplayAsGraphic();
    }
}

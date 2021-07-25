<?php
namespace Strategy;

use Strategy\Duck;
use Strategy\NoFly;
use Strategy\NoQuack;
use Strategy\DisplayAsText;

class WildDuck extends Duck
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->flyBehavior = new NoFly();
        $this->quackBehavior = new NoQuack();
        $this->displayBehavior = new DisplayAsText();
    }
}

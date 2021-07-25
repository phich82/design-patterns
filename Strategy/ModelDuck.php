<?php
namespace Strategy;

use Strategy\Duck;
use Strategy\NoFly;
use Strategy\SimpleQuack;
use Strategy\DisplayAsGraphic;

class ModelDuck extends Duck
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->flyBehavior = new NoFly;
        $this->quackBehavior = new SimpleQuack;
        $this->displayBehavior = new DisplayAsGraphic;
    }
}

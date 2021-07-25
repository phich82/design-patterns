<?php
namespace Strategy;

use Strategy\FlyBehavior;

class NoFly implements FlyBehavior
{
    public function fly()
    {
        return "I cannot fly.";
    }
}

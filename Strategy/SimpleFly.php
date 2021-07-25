<?php
namespace Strategy;

use Strategy\FlyBehavior;

class SimpleFly implements FlyBehavior
{
    public function fly()
    {
        return "I can fly simple.";
    }
}

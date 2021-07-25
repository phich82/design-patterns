<?php
namespace Strategy;

use Strategy\FlyBehavior;

class JetFly implements FlyBehavior
{
    public function fly()
    {
        return "I can fly as a jet.";
    }
}

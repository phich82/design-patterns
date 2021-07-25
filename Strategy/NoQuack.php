<?php
namespace Strategy;

use Strategy\QuackBehavior;

class NoQuack implements QuackBehavior
{
    public function quack()
    {
        return "I cannot quack.";
    }
}

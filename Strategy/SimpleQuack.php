<?php
namespace Strategy;

use Strategy\QuackBehavior;

class SimpleQuack implements QuackBehavior
{
    public function quack()
    {
        return "I can quack simple.";
    }
}

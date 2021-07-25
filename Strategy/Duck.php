<?php
namespace Strategy;

use Strategy\FlyBehavior;
use Strategy\QuackBehavior;
use Strategy\DisplayBehavior;

abstract class Duck
{
    /**
     * @var \Strategy\FlyBehavior
     */
    protected $flyBehavior;
    /**
     * @var \Strategy\QuackBehavior
     */
    protected $quackBehavior;
    /**
     * @var \Strategy\DisplayBehavior
     */
    protected $displayBehavior;

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function setDisplayBehavior(DisplayBehavior $displayBehavior)
    {
        $this->displayBehavior = $displayBehavior;
    }

    public function fly()
    {
        return $this->flyBehavior->fly();
    }

    public function quack()
    {
        return $this->quackBehavior->quack();
    }

    public function display()
    {
        return $this->displayBehavior->display();
    }
}

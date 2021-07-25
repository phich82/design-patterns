<?php
namespace Strategy;

use Strategy\DisplayBehavior;

class DisplayAsGraphic implements DisplayBehavior
{
    public function display()
    {
        return "I can display as a graphic.";
    }
}

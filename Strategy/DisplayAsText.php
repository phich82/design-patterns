<?php
namespace Strategy;

use Strategy\DisplayBehavior;

class DisplayAsText implements DisplayBehavior
{
    public function display()
    {
        return "I can display as a text.";
    }
}

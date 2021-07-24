<?php

require __DIR__ . '/../autoloader.php';

use Decorator\Soy;
use Decorator\Cafe;
use Decorator\Cacao;
use Decorator\Caramel;
use Decorator\Espresso;

// Only add caramel to espresso
$costWithCaramel = new Caramel(new Espresso);

// Add caramel and soy to espresso
$costWithCaramelSoy = new Soy(new Caramel(new Espresso));

var_dump(
    'Cost: (+ caramel): '.$costWithCaramel->cost(),
    'Cost: (caramel + soy): '.$costWithCaramelSoy->cost(),
    (
        new Cafe(
            new Soy(
                new Caramel(new Espresso)
            )
        )
    )->cost(),
    (
        new Cacao(
            new Cafe(
                new Soy(
                    new Caramel(new Espresso)
                )
            )
        )
    )->cost()
);
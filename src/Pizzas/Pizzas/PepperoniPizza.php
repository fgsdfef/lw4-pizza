<?php

declare(strict_types=1);

namespace PizzaStoreLib\Pizzas;

use PizzaStoreLib\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'томатный соус';
        $this->toppings = ['пепперони', 'моцарелла', 'оливки'];
    }
}

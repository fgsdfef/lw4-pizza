<?php

declare(strict_types=1);

namespace PizzaStoreLib\Pizzas;

use PizzaStoreLib\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пицца';
        $this->sauce = 'томатный соус';
        $this->toppings = ['моцарелла', 'пармезан', 'чеддер'];
    }
}

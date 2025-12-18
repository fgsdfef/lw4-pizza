<?php

declare(strict_types=1);

namespace PizzaStoreLib\Pizzas;

use PizzaStoreLib\Pizza;

class VegetarianPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Вегетарианская пицца';
        $this->sauce = 'песто';
        $this->toppings = ['грибы', 'перец', 'лук', 'оливки', 'помидоры'];
    }
}

<?php

declare(strict_types=1);

namespace PizzaStoreLib\Stores;

use PizzaStoreLib\Pizza;
use PizzaStoreLib\PizzaStore;
use PizzaStoreLib\Pizzas\CheesePizza;
use PizzaStoreLib\Pizzas\PepperoniPizza;
use PizzaStoreLib\Pizzas\VegetarianPizza;

class ItalianPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch (strtolower($type)) {
            case 'cheese':
                return new CheesePizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'vegetarian':
                return new VegetarianPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: {$type}");
        }
    }
}

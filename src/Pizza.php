<?php

declare(strict_types=1);

namespace PizzaStoreLib;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;
        
        $toppingsList = implode(', ', $this->toppings);
        echo "Добавлены топики: {$toppingsList}" . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSauce(): string
    {
        return $this->sauce;
    }

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }

    public function setToppings(array $toppings): void
    {
        $this->toppings = $toppings;
    }

    public function addTopping(string $topping): void
    {
        $this->toppings[] = $topping;
    }
}

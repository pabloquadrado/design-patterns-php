<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$budget = new Budget(400);

$budget->addItem(new Item('Cola', 10));
$budget->addItem(new Item('Caneta', 10));
$budget->addItem(new Item('Pasta', 10));
$budget->addItem(new Item('Cadeira', 10));
$budget->addItem(new Item('Calendário', 10));

$discountCalculator = new DiscountApplier();

$discountCalculator->getDiscount($budget);

echo 'Desconto sobre R$'. $budget->getPrice() . ': R$' . $discountCalculator->getDiscount($budget) .'<br><br>';

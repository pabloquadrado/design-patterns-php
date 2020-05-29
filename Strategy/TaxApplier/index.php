<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$budget = new Budget(100);

$taxCalculator = new TaxCalculator();

$taxAmountOfICMS = $taxCalculator->getTaxAmount($budget, new ICMS());
$taxAmountOfISS = $taxCalculator->getTaxAmount($budget, new ISS());

echo 'Imposto de ICMS sobre R$' . $budget->getPrice() . ': R$'. $taxAmountOfICMS . '<br><br>';
echo 'Imposto de ISS sobre R$' . $budget->getPrice() . ': R$'. $taxAmountOfISS . '<br><br>';

<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$budget = new Budget(600);

$taxCalculator = new TaxCalculator();

$taxAmountOfICMS = $taxCalculator->getTaxAmount($budget, new ICMS(new ISS()));
$taxAmountOfISS = $taxCalculator->getTaxAmount($budget, new ISS(new ISS()));

echo 'Imposto de ICMS e ISS sobre R$' . $budget->getPrice() . ': R$'. $taxAmountOfICMS . '<br><br>';
echo 'Imposto de ISS ao dobro sobre R$' . $budget->getPrice() . ': R$'. $taxAmountOfISS . '<br><br>';

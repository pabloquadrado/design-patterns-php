<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$budget = new Budget(600);

echo 'Valor inicial do orçamento: R$' . $budget->getPrice();

try {

    $budget->getStatus()->approve($budget);

    $budget->getStatus()->applyDiscount($budget);

    $budget->getStatus()->finalize($budget);

} catch (Exception $exception) {
    echo '<br><br>' . $exception->getMessage();
}

echo '<br><br>Valor final do orçamento: R$' . $budget->getPrice() . '<br><br>';

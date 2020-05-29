<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$account = (new Account())->deposit(100);

echo 'Investimento <strong>moderado</strong> sobre R$100: R$' . (new InvestmentSimulator())->applyInvestment($account, new Moderate());
echo '<br>Investimento <strong>conservador</strong> sobre R$100: R$' . (new InvestmentSimulator())->applyInvestment($account, new Conservative());
echo '<br>Investimento <strong>arriscado</strong> sobre R$100: R$' . (new InvestmentSimulator())->applyInvestment($account, new Risky());
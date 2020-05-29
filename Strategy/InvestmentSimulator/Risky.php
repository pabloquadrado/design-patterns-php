<?php

/**
 * Investimento arriscado.
 */
class Risky implements Investment {

    /**
     * @inheritDoc
     */
    public function getInvestmentAmount(Account $account)
    {
        $random = mt_rand(1, 100);

        if ($random >= 1 && $random <= 20) {
            return $account->getBalance() * 0.2;
        }

        if ($random > 20 && $random <= 50) {
            return $account->getBalance() * 0.1;
        }

        return $account->getBalance() * 0.08;
    }
}
<?php

/**
 * Investimento moderado.
 */
class Moderate implements Investment {

    /**
     * @inheritDoc
     */
    public function getInvestmentAmount(Account $account) {
        $random = mt_rand(1, 100);

        if ($random >= 50) {
            return $account->getBalance() * 0.025;
        } else {
            return $account->getBalance() * 0.010;
        }
    }
}
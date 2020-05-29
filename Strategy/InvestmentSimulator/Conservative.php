<?php

/**
 * Investimento conservador.
 */
class Conservative implements Investment {

    /**
     * @inheritDoc
     */
    public function getInvestmentAmount(Account $account)
    {
        return $account->getBalance() * 0.008;
    }
}

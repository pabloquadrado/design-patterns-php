<?php

/**
 * Simulador de investimentos.
 */
class InvestmentSimulator {

    /**
     * Aplica um investimento.
     *
     * @param Account $account
     * @param Investment $investment
     *
     * @return float
     */
    public function applyInvestment(Account $account, Investment $investment)
    {
        $investmentValue = $investment->getInvestmentAmount($account);

        $account->deposit($investmentValue * 0.75);

        return number_format($account->getBalance(), 2, ',', '.');
    }
}
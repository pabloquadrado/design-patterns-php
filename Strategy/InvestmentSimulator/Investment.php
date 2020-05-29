<?php

/**
 * Interface de investimentos.
 */
interface Investment {

    /**
     * Retorna o valor do investimento.
     *
     * @param Account $account
     *
     * @return float
     */
    public function getInvestmentAmount(Account $account);
}
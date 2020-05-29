<?php

/**
 * Conta bancária
 */
class Account {

    /** @var float Saldo da conta. */
    private $balance;

    /**
     * Deposita um valor na conta.
     *
     * @param float $value
     *
     * @return Account
     */
    public function deposit($value)
    {
        $this->balance += $value;

        return $this;
    }

    /**
     * Retorna a propriedade $balance.
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }
}

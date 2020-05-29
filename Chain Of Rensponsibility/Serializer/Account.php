<?php

/**
 * Conta bancária.
 */
class Account
{
    /** @var string Titular da conta */
    private $holder;

    /** @var float Saldo da conta */
    private $balance;

    /**
     * Construtor da classe Account.
     *
     * @param string $holder
     * @param float $balance
     */
    public function __construct($holder, $balance)
    {
        $this->holder = $holder;
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }
}
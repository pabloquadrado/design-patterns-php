<?php

/**
 * Estado finalizado de um orçamento.
 */
class Finalized implements Status
{
    /**
     * @inheritDoc
     */
    public function applyDiscount(Budget $budget)
    {
        throw new Exception('Um orçamento finalizado não pode receber descontos.');
    }

    /**
     * @inheritDoc
     */
    public function approve(Budget $budget)
    {
        throw new Exception('Um orçamento finalizado não pode ser aprovado.');
    }

    /**
     * @inheritDoc
     */
    public function reprove(Budget $budget)
    {
        throw new Exception('Um orçamento finalizado não pode ser reprovado.');
    }

    /**
     * @inheritDoc
     */
    public function finalize(Budget $budget)
    {
        throw new Exception('O orçamento já está finalizado.');
    }
}
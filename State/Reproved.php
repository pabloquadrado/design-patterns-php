<?php

/**
 * Estado reprovado de um orçamento.
 */
class Reproved implements Status
{
    /**
     * @inheritDoc
     */
    public function applyDiscount(Budget $budget)
    {
        throw new Exception('Um orçamento reprovado não pode receber descontos.');
    }

    /**
     * @inheritDoc
     */
    public function approve(Budget $budget)
    {
        throw new Exception('Um orçamento reprovado não pode ser aprovado.');
    }

    /**
     * @inheritDoc
     */
    public function reprove(Budget $budget)
    {
        throw new Exception('O orçamento já está reprovado.');
    }

    /**
     * @inheritDoc
     */
    public function finalize(Budget $budget)
    {
        throw new Exception('Um orçamento reprovado não pode ser finalizado.');
    }
}
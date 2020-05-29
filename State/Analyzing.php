<?php

/**
 * Estado em análise de um orçamento.
 */
class Analyzing implements Status
{
    /**
     * @inheritDoc
     */
    public function applyDiscount(Budget $budget)
    {
        return $budget->setPrice(
            $budget->getPrice() - ($budget->getPrice() * 0.1)
        );
    }

    /**
     * @inheritDoc
     */
    public function approve(Budget $budget)
    {
        $budget->setStatus(new Approved());
    }

    /**
     * @inheritDoc
     */
    public function reprove(Budget $budget)
    {
        $budget->setStatus(new Reproved());
    }

    /**
     * @inheritDoc
     */
    public function finalize(Budget $budget)
    {
        throw new Exception('Apenas orçamentos aprovados podem ser finalizados.');
    }
}
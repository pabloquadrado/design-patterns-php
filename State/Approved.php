<?php

/**
 * Estado aprovado de um orçamento.
 */
class Approved implements Status
{
    /**
     * @inheritDoc
     */
    public function applyDiscount(Budget $budget)
    {
        return $budget->setPrice(
            $budget->getPrice() - ($budget->getPrice() * 0.5)
        );
    }

    /**
     * @inheritDoc
     */
    public function approve(Budget $budget)
    {
        throw new Exception('O orçamento já está aprovado.');
    }

    /**
     * @inheritDoc
     */
    public function reprove(Budget $budget)
    {
        throw new Exception('Não é possível reprovar um orçamento já aprovado.');
    }

    /**
     * @inheritDoc
     */
    public function finalize(Budget $budget)
    {
        $budget->setStatus(new Finalized());
    }
}
<?php

/**
 * Classe para não retornar descontos sobre o orçamento.
 *
 * @author <pabloquadrado27@gmail.com>
 */
class WithoutDiscount implements Discount
{
    /**
     * @inheritDoc
     */
    public function setNext(Discount $nextDiscount) {}

    /**
     * @inheritDoc
     */
    public function getDiscount(Budget $budgets)
    {
        return 0.00;
    }
}
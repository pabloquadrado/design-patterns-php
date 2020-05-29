<?php

require_once 'FiveItemsDiscountApplier.php';
require_once 'FiveHundredsDiscountApplier.php';
require_once 'WithoutDiscount.php';

/**
 * Aplicadora de descontos.
 *
 * @author <pabloquadrado27@gmail.com>
 */
class DiscountApplier
{
    /**
     * Retorna o valor do desconto sobre o orçamento.
     *
     * @param Budget $budget
     *
     * @return float valor do desconto.
     */
    public function getDiscount(Budget $budget)
    {
        $firstDiscountApplier = new FiveItemsDiscountApplier();
        $secondDiscountApplier = new FiveHundredsDiscountApplier();

        $firstDiscountApplier->setNext($secondDiscountApplier);
        $secondDiscountApplier->setNext(new WithoutDiscount());

        return $firstDiscountApplier->getDiscount($budget);
    }
}
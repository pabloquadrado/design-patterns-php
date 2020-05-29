<?php

/**
 * Contrato com métodos de descontos.
 *
 * @author <pabloquadrado27@gmail.com>
 */
interface Discount
{
    /**
     * Retorna o desconto que deve ser aplicado sobre o orçamento.
     *
     * @param Budget $budget orçamento realizado.
     *
     * @return float valor do desconto.
     */
    public function getDiscount(Budget $budget);

    /**
     * Define qual será o próximo desconto.
     *
     * @param Discount $discount
     */
    public function setNext(Discount $discount);
}
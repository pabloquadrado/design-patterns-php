<?php

/**
 * Template de impostos.
 */
abstract class AbstractTemplate extends Tax
{
    /**
     * @inheritDoc
     */
    public final function getTaxAmount(Budget $budget)
    {
        if ($this->useMaximumTax($budget)) {
            return $this->maximumTax($budget) + $this->getNextTaxAmount($budget);
        }

        return $this->minimumTax($budget) + $this->getNextTaxAmount($budget);
    }

    /**
     * Define se será aplicado o imposto máximo.
     *
     * @param Budget $budget
     *
     * @return bool
     */
    protected abstract function useMaximumTax(Budget $budget);

    /**
     * Retorna o valor máximo do imposto.
     *
     * @param Budget $budget
     *
     * @return float
     */
    protected abstract function maximumTax(Budget $budget);

    /**
     * Retorna o valor mínimo do imposto.
     *
     * @param Budget $budget
     *
     * @return float
     */
    protected abstract function minimumTax(Budget $budget);
}
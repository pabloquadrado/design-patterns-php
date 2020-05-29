<?php

/**
 * Classe abstrata de impostos.
 */
abstract class Tax {

    /** @var Tax */
    protected $nextTax;

    public function __construct($tax = null)
    {
        $this->nextTax = $tax;
    }

    /**
     * Retorna o valor do imposto sobre o orçamento.
     *
     * @param Budget $budget
     *
     * @return float
     */
	public abstract function getTaxAmount(Budget $budget);

    /**
     * Retorna o próximo imposto a ser aplicado.
     *
     * @param Budget $budget
     *
     * @return float
     */
	public function getNextTaxAmount(Budget $budget)
    {
        if (is_null($this->nextTax)) {
            return 0.00;
        }

        return $this->nextTax->getTaxAmount($budget);
    }
}
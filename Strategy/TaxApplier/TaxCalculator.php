<?php

/**
 * Calculadora de impostos.
 */
class TaxCalculator {

    /**
     * Retorna o valor do imposto sobre o or�amento.
     *
     * @param Budget $budget
     * @param Tax $tax
     *
     * @return mixed
     */
	public function getTaxAmount(Budget $budget, Tax $tax)
	{
		return $tax->getTaxAmount($budget);	
	}
}
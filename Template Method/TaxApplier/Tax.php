<?php

/**
 * Interface de impostos.
 */
interface Tax {

    /**
     * Retorna o valor do imposto sobre o orçamento.
     *
     * @param Budget $budget
     *
     * @return float
     */
	public function getTaxAmount(Budget $budget);
}
<?php

/**
 * Imposto de ICMS.
 */
class ICMS implements Tax {

    /**
     * Calcula o imposto de ICMS.
     *
     * @param Budget $budget
     *
     * @return float|int
     */
	public function getTaxAmount(Budget $budget)
	{
		return ($budget->getPrice() * 0.06) + 50;
	}
}

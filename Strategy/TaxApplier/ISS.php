<?php

/**
 * Imposto de ISS.
 */
class ISS implements Tax {

    /**
     * Calcula o imposto de ISS.
     *
     * @param Budget $budget
     *
     * @return float|int
     */
	public function getTaxAmount(Budget $budget)
	{
		return $budget->getPrice() * 0.06;
	}
}
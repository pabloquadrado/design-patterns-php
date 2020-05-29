<?php

/**
 * Entidade de Or�amento.
 */
class Budget {

    /** @var float Pre�o do or�amento. */
	private $price;

    /**
     * Construtor da classe Budget.
     *
     * @param float $newPrice
     */
	public function __construct($newPrice)
    {
        $this->price = $newPrice;
	}

    /**
     * Retorna a propriedade $price.
     *
     * @return float
     */
	public function getPrice()
	{
		return $this->price;
	}
}
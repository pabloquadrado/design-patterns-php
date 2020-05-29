<?php

/**
 * Entidade de Orçamento.
 */
class Budget {

    /** @var float Preço do orçamento. */
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
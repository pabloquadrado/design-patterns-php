<?php

/**
 * Entidade de Orçamento.
 */
class Budget {

    /** @var float Preço do orçamento. */
	private $price;

	/** @var array Itens de reforma do orçamento */
	private $items = [];

    /**
     * Construtor da classe Budget1.
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

    /**
     * Adiciona um Item na propriedade $item.
     *
     * @param Item $item
     */
	public function addItem(Item $item)
    {
	    $this->items[] = $item;
    }

    /**
     * Retorna a propriedade $items.
     *
     * @return array
     */
    public function getItems()
    {
	    return $this->items;
    }
}
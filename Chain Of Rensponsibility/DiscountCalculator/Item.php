<?php

/**
 * Representa o item de um orçamento.
 */
class Item
{
    /** @var string Nome do item. */
    private $name;

    /** @var float Preço do item */
    private $price;

    /**
     * Construtor do item.
     *
     * @param string $name
     * @param float $price
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
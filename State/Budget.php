<?php

/**
 * Entidade de Orçamento.
 */
class Budget {

    /** @var float Preço do orçamento. */
    protected $price;

    /** @var Status Status de um orçamento. */
    protected $status;

    /**
     * Construtor da classe Budget.
     *
     * @param float $newPrice
     */
    public function __construct($newPrice)
    {
        $this->price = $newPrice;
        $this->status = new Analyzing();
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
     * Define a propriedade $price.
     *
     * @param float $price
     *
     * @return Budget
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Retorna a propriedade $status.
     *
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Define a propriedade $status.
     *
     * @param Status $status
     *
     * @return Budget
     */
    public function setStatus(Status $status)
    {
        $this->status = $status;
        return $this;
    }
}
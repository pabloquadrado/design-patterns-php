<?php

/**
 * Imposto de ISS.
 */
class ISS extends AbstractTemplate {

    public function __construct($tax = null)
    {
        parent::__construct($tax);
    }

    /**
     * @inheritDoc
     */
    protected function useMaximumTax(Budget $budget)
    {
        return $budget->getPrice() > 500;
    }

    /**
     * @inheritDoc
     */
    protected function maximumTax(Budget $budget)
    {
        return $budget->getPrice() * 0.1;
    }

    /**
     * @inheritDoc
     */
    protected function minimumTax(Budget $budget)
    {
        return $budget->getPrice() * 0.05;
    }
}
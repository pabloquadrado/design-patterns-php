<?php

/**
 * Imposto de ISS.
 */
class ISS extends AbstractTemplate {

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
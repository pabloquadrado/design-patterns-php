<?php

/**
 * Imposto de ICMS.

 */
class ICMS extends AbstractTemplate {

    /**
     * @inheritDoc
     */
    protected function useMaximumTax(Budget $budget)
    {
        return $budget->getPrice() > 300;
    }

    /**
     * @inheritDoc
     */
    protected function maximumTax(Budget $budget)
    {
        return $budget->getPrice() * 0.5;
    }

    /**
     * @inheritDoc
     */
    protected function minimumTax(Budget $budget)
    {
        return $budget->getPrice() * 0.1;
    }
}

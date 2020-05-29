<?php

/**
 * Aplicador de desconto para orçamento acima de 500 reais.
 *
 * @author <pabloquadrado27@gmail.com>
 */
class FiveHundredsDiscountApplier implements Discount
{
    /** @var Discount Próximo desconto que será aplicado. */
    private $next;

    /**
     * @inheritDoc
     */
    public function setNext(Discount $nextDiscount)
    {
        $this->next = $nextDiscount;
    }

    /**
     * @inheritDoc
     */
    public function getDiscount(Budget $budget)
    {
        if ($budget->getPrice() > 500) {
            return $budget->getPrice() * 0.07;
        }

        return $this->next->getDiscount($budget);
    }
}
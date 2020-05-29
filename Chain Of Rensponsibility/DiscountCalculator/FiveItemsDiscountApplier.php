<?php

/**
 * Aplicador de desconto para orçamento com mais de 5 itens.
 *
 * @author <pabloquadrado27@gmail.com>
 */
class FiveItemsDiscountApplier implements Discount
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
        if (count($budget->getItems()) >= 5) {
            return $budget->getPrice() * 0.1;
        }

        return $this->next->getDiscount($budget);
    }
}
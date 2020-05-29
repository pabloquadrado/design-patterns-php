<?php

/**
 * Contrato de um estado de orçamento.
 */
interface Status
{
    /**
     * Aplica um desconto sobre o orçamento.
     *
     * @param Budget $budget
     */
    public function applyDiscount(Budget $budget);

    /**
     * Aprova um orçamento
     *
     * @param Budget $budget
     */
    public function approve(Budget $budget);

    /**
     * Reprova um orçamento
     *
     * @param Budget $budget
     */
    public function reprove(Budget $budget);

    /**
     * Finaliza um orçamento
     *
     * @param Budget $budget
     */
    public function finalize(Budget $budget);
}
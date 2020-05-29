<?php

/**
 * Contrato de um observador.
 *
 * @author Pablo R. Quadrado <pabloquadrado27@gmail.com>
 */
interface Observer
{
    /**
     * Processa notifica��o recebida.
     *
     * @param Invoice $invoice
     *
     * @return mixed
     */
    public function notify(Invoice $invoice);
}
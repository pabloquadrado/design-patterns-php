<?php

/**
 * Observador respons�vel por executar a��o de imprimir a nota fiscal.
 *
 * @author Pablo R. Quadrado <pabloquadrado27@gmail.com>
 */
class Printer implements Observer
{
    /**
     * @inheritDoc
     */
    public function notify(Invoice $invoice)
    {
        echo 'Nota fiscal foi impressa.';
    }
}
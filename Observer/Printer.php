<?php

/**
 * Observador responsável por executar ação de imprimir a nota fiscal.
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
<?php

/**
 * Observador responsável por executar ação de enviar e-mail de NF gerada.
 *
 * @author Pablo R. Quadrado <pabloquadrado27@gmail.com>
 */
class EmailSender implements Observer
{
    /**
     * @inheritDoc
     */
    public function notify(Invoice $invoice)
    {
        echo 'E-mail enviado ao cliente';
    }
}
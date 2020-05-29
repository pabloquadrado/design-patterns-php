<?php

date_default_timezone_set('Brazil/East');

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$invoiceBuilder = (new InvoiceBuilder())
    ->setCompany('Alura')
    ->setDocumentNumber(1234)
    ->addItem(new Item('Tijolo', 250))
    ->addItem(new Item('Tijolo', 250))
    ->setNotes('Obra')
    ->setEmissionDate();
 
$invoice = $invoiceBuilder->build();

echo '<pre>';
print_r($invoice);
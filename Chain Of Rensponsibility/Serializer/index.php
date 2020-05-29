<?php

function loadFiles($class)
{
    require $class . '.php';
}

spl_autoload_register('loadFiles');

$account = new Account('Pablo', 1000);

$responseFactory = new ResponseFactory();

echo 'CSV: '. $responseFactory->getResponse(new Request('csv'), $account);
echo '<br><br>XML: '. $responseFactory->getResponse(new Request('xml'), $account);
echo '<br><br>PERCENT: '. $responseFactory->getResponse(new Request('percent'), $account);
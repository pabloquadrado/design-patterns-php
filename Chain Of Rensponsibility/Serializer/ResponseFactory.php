<?php

require_once 'Xml.php';
require_once 'Csv.php';
require_once 'Percent.php';

/**
 * Fábrica de retornos.
 */
class ResponseFactory
{
    /**
     * Retorna a requisição.
     *
     * @param Account $account
     * @param Request $request
     *
     * @return string retorno.
     */
    public function getResponse(Request $request, Account $account)
    {
        $firstReturnFormat = new Xml();
        $secondReturnFormat = new Csv();

        $firstReturnFormat->setNext($secondReturnFormat);
        $secondReturnFormat->setNext(new Percent());

        return $firstReturnFormat->getResponse($request, $account);
    }
}
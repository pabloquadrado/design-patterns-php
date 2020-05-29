<?php

/**
 * Contrato das respostas da API.
 */
interface Response
{
    /**
     * Retorna a requisição recebida.
     *
     * @param Request $request
     * @param Account $account
     *
     * @return string resposta.
     */
    public function getResponse(Request $request, Account $account);

    /**
     * Define a próxima resposta dentro da cadeia.
     *
     * @param Response $response
     */
    public function setNext(Response $response);
}
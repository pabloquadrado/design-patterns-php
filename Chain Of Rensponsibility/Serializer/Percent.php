<?php

require_once 'Format.php';

/**
 * Classe para retorno no formato Percent.
 */
class Percent implements Response
{
    /** @var Response Próximo tipo de retorno. */
    private $nextResponse;

    /**
     * @inheritDoc
     */
    public function setNext(Response $response) {
        $this->nextResponse = $response;
    }

    /**
     * @inheritDoc
     */
    public function getResponse(Request $request, Account $account) {
        if ($request->getFormat() == Format::PERCENT) {
            return $account->getHolder() . "%" . $account->getBalance();
        }

        return $this->nextResponse->getResponse($request, $account);
    }
}
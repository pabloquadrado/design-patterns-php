<?php

/**
 * Classe para retorno no formato CSV.
 */
class Csv implements Response
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
        if ($request->getFormat() == Format::CSV) {
            return $account->getHolder() . ";" . $account->getBalance();
        }

        return $this->nextResponse->getResponse($request, $account);
    }
}
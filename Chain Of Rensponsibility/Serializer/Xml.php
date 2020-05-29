<?php

/**
 * Classe para retorno no formato XML.
 */
class Xml implements Response
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
        if ($request->getFormat() == Format::XML) {
            return "
                <conta><titular>" . $account->getHolder() . "
                </titular><saldo>" . $account->getBalance() . "
                </saldo></conta>";
        }

        return $this->nextResponse->getResponse($request, $account);
    }
}
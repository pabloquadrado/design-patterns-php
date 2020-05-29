<?php

/**
 * Classe de requisição.
 */
class Request
{
    /** @var int Formato da requisição */
    private $format;

    /**
     * Construtor da classe Request.
     *
     * @param string $format
     */
    public function __construct($format)
    {
        $this->format = $format;
    }

    /**
     * Retorna a propriedade $format.
     *
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }
}
<?php

/**
 * Entidade de Nota Fiscal.
 */
class Invoice
{
    /** @var string Nome da empresa. */
    private $company;

    /** @var int CNPJ da empresa. */
    private $documentNumber;

    /** @var Item[] Itens da NF. */
    private $items;

    /** @var float Valor bruto da NF. */
    private $grossValue;

    /** @var float Valor tributário da NF. */
    private $taxValue;

    /** @var string Observações da NF. */
    private $notes;

    /** @var string Data de emissão da NF. */
    private $emissionDate;

    /**
     * Invoice constructor.
     *
     * @param string $company
     * @param int $documentNumber
     * @param Item[] $items
     * @param float $grossValue
     * @param float $taxValue
     * @param string $notes
     * @param string $emissionDate
     */
    public function __construct(
        $company,
        $documentNumber,
        array $items,
        $grossValue,
        $taxValue,
        $notes,
        $emissionDate
    ) {
        $this->company = $company;
        $this->documentNumber = $documentNumber;
        $this->items = $items;
        $this->grossValue = $grossValue;
        $this->taxValue = $taxValue;
        $this->notes = $notes;
        $this->emissionDate = $emissionDate;
    }

    /**
     * Retorna a propriedade {@see Invoice::$company}
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Retorna a propriedade {@see Invoice::$documentNumber}
     *
     * @return int
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }
}
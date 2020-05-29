<?php

/**
 * Construtor de Notas Fiscais.
 */
class InvoiceBuilder
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
     * InvoiceBuilder constructor.
     */
    public function __construct()
    {
        $this->grossValue = 0.00;
        $this->taxValue = 0.00;
        $this->items = [];
    }

    /**
     * Define a propriedade {@see Invoice::$company}
     *
     * @param string $company
     *
     * @return InvoiceBuilder
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Define a propriedade {@see Invoice::$documentNumber}
     *
     * @param int $documentNumber
     *
     * @return InvoiceBuilder
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * Adiciona um item na NF.
     *
     * @param Item $items
     *
     * @return InvoiceBuilder
     */
    public function addItem($items)
    {
        $this->items[] = $items;
        return $this;
    }

    /**
     * Define a propriedade {@see Invoice::$notes}
     *
     * @param string $notes
     *
     * @return InvoiceBuilder
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Define a propriedade {@see Invoice::$emissionDate}
     *
     * @param string $emissionDate
     *
     * @return InvoiceBuilder
     */
    public function setEmissionDate($emissionDate = null)
    {
        if (is_null($emissionDate)) {
            $this->emissionDate = date('Y-m-d H:i:s');

            return $this;
        }

        $this->emissionDate = $emissionDate;

        return $this;
    }

    /**
     * Constrói nota fiscal.
     *
     * @return Invoice
     */
    public function build()
    {
        return new Invoice(
            $this->company,
            $this->documentNumber,
            $this->items,
            $this->grossValue,
            $this->taxValue,
            $this->notes,
            $this->emissionDate
        );
    }
}
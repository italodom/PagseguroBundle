<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment;

use \Italodom\PagseguroBundle\Pagseguro\CustomerInterface;
use \Italodom\PagseguroBundle\Pagseguro\ShippingAddress;

class Payment
{
    /**
     * Referência
     * @var string
     */
    private $reference;

    /**
     * Moeda
     * @var string
     */
    private $currency = 'BRL';

    /**
     * Itens do pagamento
     * @var array
     */
    private $paymentItems;

    /**
     * Consumidor
     * @var CustomerInterface
     */
    private $customer;

    /**
     * Endereço de envio
     * @var ShippingAddress
     */
    private $shippingAddress;

    public function getReference()
    {
        return $this->reference;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getPaymentItems()
    {
        return $this->paymentItems;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setPaymentItems($paymentItems)
    {
        $this->paymentItems = $paymentItems;
    }

    public function setCustomer(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    public function setShippingAddress(ShippingAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

}
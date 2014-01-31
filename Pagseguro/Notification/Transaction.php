<?php

namespace Italodom\PagseguroBundle\Pagseguro\Notification;

class Transaction
{
    /**
     * Data
     * @var \DateTime
     */
    private $date;

    /**
     * Código
     * @var string
     */
    private $code;

    /**
     * Referência
     * @var string
     */
    private $reference;

    /**
     * Tipo
     * @var integer
     */
    private $type;

    /**
     * Status
     * @var integer
     */
    private $status;

    /**
     * Data do último evento
     * @var \DateTime
     */
    private $lastEventDate;

    /**
     * Método de pagamento
     * @var PaymentMethod
     */
    private $paymentMethod;

    /**
     * Valor bruto da transação
     * @var decimal
     */
    private $grossAmount;

    /**
     * Valor do desconto dado
     * @var decimal
     */
    private $discountAmount;

    /**
     * Valor total das taxas cobradas
     * @var decimal
     */
    private $feeAmount;

    /**
     * Valor líquido da transação
     * @var decimal
     */
    private $netAmount;

    /**
     * Valor extra
     * @var decimal
     */
    private $extraAmount;

    /**
     * Número de parcelas
     * @var inteiro
     */
    private $installmentCount;

    /**
     * Número de itens da transação
     * @var integer
     */
    private $itemCount;

    /**
     * Payment
     * @var \Italodom\PagseguroBundle\Pagseguro\Payment\Payment
     */
    private $itens;

    /**
     * Consumidor
     * @var \Italodom\PagseguroBundle\Pagseguro\CustomerInterface
     */
    private $customer;

    /**
     * Endereço de envio
     * @var \Italodom\PagseguroBundle\Pagseguro\ShippingAddress
     */
    private $shippingAddress;

    public function getDate()
    {
        return $this->date;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getLastEventDate()
    {
        return $this->lastEventDate;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    public function getNetAmount()
    {
        return $this->netAmount;
    }

    public function getExtraAmount()
    {
        return $this->extraAmount;
    }

    public function getInstallmentCount()
    {
        return $this->installmentCount;
    }

    public function getItemCount()
    {
        return $this->itemCount;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setLastEventDate(\DateTime $lastEventDate)
    {
        $this->lastEventDate = $lastEventDate;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function setGrossAmount(decimal $grossAmount)
    {
        $this->grossAmount = $grossAmount;
    }

    public function setDiscountAmount(decimal $discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }

    public function setFeeAmount(decimal $feeAmount)
    {
        $this->feeAmount = $feeAmount;
    }

    public function setNetAmount(decimal $netAmount)
    {
        $this->netAmount = $netAmount;
    }

    public function setExtraAmount(decimal $extraAmount)
    {
        $this->extraAmount = $extraAmount;
    }

    public function setInstallmentCount(inteiro $installmentCount)
    {
        $this->installmentCount = $installmentCount;
    }

    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
    }

    public function setItens(\Italodom\PagseguroBundle\Pagseguro\Payment\Payment $itens)
    {
        $this->itens = $itens;
    }

    public function setCustomer(\Italodom\PagseguroBundle\Pagseguro\CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    public function setShippingAddress(\Italodom\PagseguroBundle\Pagseguro\ShippingAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

}
<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment;

use \Italodom\PagseguroBundle\Pagseguro\CustomerInterface;
use \Italodom\PagseguroBundle\Pagseguro\ProductInterface;
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

    public function addItem(ProductInterface $product, $quantity)
    {
        $item = new PaymentItem();
        $item->setItemId($product->getId());
        $item->setItemDescription($product->getDescription());
        $item->setItemWeight($product->getWeight());
        $item->setItemAmount($product->getAmount());

        // Adiciona quantidade do item
        $this->addQuantityItem($item, $quantity);

        // Atualiza quantidade de item já existente na lista
        $this->updateQuantityItem($product, $item, $quantity);

        return $this;
    }

    private function updateQuantityItem(ProductInterface $product, PaymentItem $item, $quantity)
    {
        if (isset($this->paymentItems[$product->getId()])) {
            $quantity = $this->paymentItems[$product->getId()]->getItemQuantity();
            $this->paymentItems[$product->getId()]->setItemQuantity($quantity + $item->getItemQuantity());
        } else {
            $this->paymentItems[$product->getId()] = $item;
        }
    }

    private function addQuantityItem(PaymentItem $item, $quantity)
    {
        if ($quantity <= 0) {
            $item->setItemQuantity(1);
        } else {
            $item->setItemQuantity($quantity);
        }
    }

}
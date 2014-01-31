<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment;

use \Italodom\PagseguroBundle\Pagseguro\Value\Decimal;

class PaymentItem
{
    private $itemId;
    private $itemDescription;
    private $itemAmount;
    private $itemQuantity;
    private $shippingCost;
    private $itemWeight;

    public function getItemId()
    {
        return $this->itemId;
    }

    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    public function getItemWeight()
    {
        return $this->itemWeight;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    public function setItemAmount($itemAmount)
    {
        $this->itemAmount = Decimal::replaceComma($itemAmount);
    }

    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;
    }

    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = Decimal::replaceComma($shippingCost);
    }

    public function setItemWeight($itemWeight)
    {
        $this->itemWeight = $itemWeight;
    }

}
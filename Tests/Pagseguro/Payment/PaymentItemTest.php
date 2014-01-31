<?php

namespace Italodom\PagseguroBundle\Tests;

use \Italodom\PagseguroBundle\Pagseguro\Payment\PaymentItem;
use \PHPUnit_Framework_TestCase;

class PaymentItemTest extends PHPUnit_Framework_TestCase
{
    private $paymentItem;

    public function setUp()
    {
        $this->paymentItem = new PaymentItem();
    }

    public function testSetAndGetItemId()
    {
        $this->paymentItem->setItemId(123);
        $this->assertEquals(123, $this->paymentItem->getItemId());
    }

    public function testSetItemIdInString()
    {
        $this->paymentItem->setItemId('123');
        $this->assertEquals(123, $this->paymentItem->getItemId());
    }

    public function testSetAndGetItemDescription()
    {
        $this->paymentItem->setItemDescription('Descrição do item');
        $this->assertEquals('Descrição do item', $this->paymentItem->getItemDescription());
    }

    public function testSetAndGetItemAmount()
    {
        $this->paymentItem->setItemAmount(155.45);
        $this->assertEquals(155.45, $this->paymentItem->getItemAmount());
    }

    public function testSetItemAmountInString()
    {
        $this->paymentItem->setItemAmount('155.45');
        $this->assertEquals(155.45, $this->paymentItem->getItemAmount());
    }

    public function testSetItemAmountInStringWithComma()
    {
        $this->paymentItem->setItemAmount('155,45');
        $this->assertEquals(155.45, $this->paymentItem->getItemAmount());
    }

    public function testSetAndGetItemQuantity()
    {
        $this->paymentItem->setItemQuantity(23);
        $this->assertEquals(23, $this->paymentItem->getItemQuantity());
    }

    public function testSetItemQuantityInString()
    {
        $this->paymentItem->setItemQuantity('23');
        $this->assertEquals(23, $this->paymentItem->getItemQuantity());
    }

    public function testSetAndGetShippingCost()
    {
        $this->paymentItem->setShippingCost(345.90);
        $this->assertEquals(345.90, $this->paymentItem->getShippingCost());
    }

    public function testSetShippingCostInStringWithComma()
    {
        $this->paymentItem->setShippingCost('345,90');
        $this->assertEquals(345.90, $this->paymentItem->getShippingCost());
    }

    public function testSetAndGetItemWeight()
    {
        $this->paymentItem->setItemWeight(234);
        $this->assertEquals(234, $this->paymentItem->getItemWeight());
    }

    public function testSetItemWeightInString()
    {
        $this->paymentItem->setItemWeight('234');
        $this->assertEquals(234, $this->paymentItem->getItemWeight());
    }
}
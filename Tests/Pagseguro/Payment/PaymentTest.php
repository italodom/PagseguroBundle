<?php

namespace Italodom\PagseguroBundle\Tests;

use \Italodom\PagseguroBundle\Pagseguro\Payment\Payment;
use \Italodom\PagseguroBundle\Tests\Pagseguro\Produto;
use \PHPUnit_Framework_TestCase;

class PaymentTest extends PHPUnit_Framework_TestCase
{
    private $payment;

    public function setUp()
    {
        $this->payment = new Payment();
    }

    public function testSetAndGetReferencePayment()
    {
        $this->payment->setReference('REF 1234');
        $this->assertEquals('REF 1234', $this->payment->getReference());
    }

    public function testGetCurrencyPayment()
    {
        $this->assertEquals('BRL', $this->payment->getCurrency());
    }

    public function testAddItemsInPayment()
    {
        $produto1 = new Produto();
        $produto1->setId(1);
        $produto1->setDescription('Descrição 1');
        $produto1->setWeight(1);
        $produto1->setAmount(35.67);

        $produto2 = new Produto();
        $produto2->setId(2);
        $produto2->setDescription('Descrição 2');
        $produto2->setWeight(2);
        $produto2->setAmount(55.44);

        $this->payment->addItem($produto1, 1, 34);
        $this->payment->addItem($produto2, 3, 56.78);
    }

    public function testItemsWithIdsEqualsAddQuantity()
    {
        $produto1 = new Produto();
        $produto1->setId(1);
        $produto1->setDescription('Descrição 1');
        $produto1->setWeight(1);
        $produto1->setAmount(35.67);

        $produto2 = new Produto();
        $produto2->setId(1);
        $produto2->setDescription('Descrição 2');
        $produto2->setWeight(2);
        $produto2->setAmount(55.44);

        $this->payment->addItem($produto1, 2, 34);
        $this->payment->addItem($produto2, 3, 56.78);

        $items = $this->payment->getPaymentItems();
        $item = $items[$produto1->getId()];
        $this->assertEquals(5, $item->getItemQuantity());
    }

    public function testAddItemQuantityZero()
    {
        $produto1 = new Produto();
        $produto1->setId(1);
        $produto1->setDescription('Descrição 1');
        $produto1->setWeight(1);
        $produto1->setAmount(35.67);

        $produto2 = new Produto();
        $produto2->setId(1);
        $produto2->setDescription('Descrição 2');
        $produto2->setWeight(2);
        $produto2->setAmount(55.44);

        $this->payment->addItem($produto1, -2, 34);
        $this->payment->addItem($produto2, 3, 56.78);

        $items = $this->payment->getPaymentItems();
        $item = $items[$produto1->getId()];
        $this->assertEquals(4, $item->getItemQuantity());
    }

    public function testGetPaymentItems()
    {
        $produto1 = new Produto();
        $produto1->setId(1);
        $produto1->setDescription('Descrição 1');
        $produto1->setWeight(1);
        $produto1->setAmount(35.67);

        $produto2 = new Produto();
        $produto2->setId(2);
        $produto2->setDescription('Descrição 2');
        $produto2->setWeight(2);
        $produto2->setAmount(55.44);

        $this->payment->addItem($produto1, 1, 34);
        $this->payment->addItem($produto2, 3, 56.78);

        $items = $this->payment->getPaymentItems();
        $this->assertEquals(2, count($items));
    }

}
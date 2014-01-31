<?php

namespace Italodom\PagseguroBundle\Tests;

use \Italodom\PagseguroBundle\Pagseguro\ShippingAddress;
use \PHPUnit_Framework_TestCase;

class ShippingAddressTest extends PHPUnit_Framework_TestCase
{
    private $shippingAddress;

    public function setUp()
    {
        $this->shippingAddress = new ShippingAddress();
    }

    public function testSetAndGetCountry()
    {
        $this->shippingAddress->setCountry('Brasil');
        $this->assertEquals('Brasil', $this->shippingAddress->getCountry());
    }

    public function testSetAndGetState()
    {
        $this->shippingAddress->setState('São Paulo');
        $this->assertEquals('São Paulo', $this->shippingAddress->getState());
    }

    public function testSetAndGetPostalCode()
    {
        $this->shippingAddress->setPostalCode('06870320');
        $this->assertEquals('06870320', $this->shippingAddress->getPostalCode());
    }

    public function testSetAndGetPostalCodeWithTrace()
    {
        $this->shippingAddress->setPostalCode('06870-320');
        $this->assertEquals('06870320', $this->shippingAddress->getPostalCode());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage O CEP deve possuir no mínimo 8 caracteres!
     */
    public function testSetAndGetPostalCodeWithTrace8Caracters()
    {
        $this->shippingAddress->setPostalCode('06870');
    }

    public function testSetAndGetDistrict()
    {
        $this->shippingAddress->setDistrict('SP');
        $this->assertEquals('SP', $this->shippingAddress->getDistrict());
    }

    public function testSetAndGetStreet()
    {
        $this->shippingAddress->setStreet('Av. Paulista');
        $this->assertEquals('Av. Paulista', $this->shippingAddress->getStreet());
    }

    public function testSetAndGetNumber()
    {
        $this->shippingAddress->setNumber('1780');
        $this->assertEquals('1780', $this->shippingAddress->getNumber());
    }

    public function testSetAndGetComplement()
    {
        $this->shippingAddress->setComplement('Rua sem saída');
        $this->assertEquals('Rua sem saída', $this->shippingAddress->getComplement());
    }
}
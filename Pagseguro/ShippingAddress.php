<?php

namespace Italodom\PagseguroBundle\Pagseguro;

class ShippingAddress
{
    /**
     * Pais
     * @var string
     */
    private $country;

    /**
     * Estado
     * @var string
     */
    private $state;

    /**
     * CEP
     * @var string
     */
    private $postalCode;

    /**
     * Distrito
     * @var string
     */
    private $district;

    /**
     * Endereço
     * @var string
     */
    private $street;

    /**
     * Número
     * @var string
     */
    private $number;

    /**
     * Complemento
     * @var string
     */
    private $complement;

    public function getCountry()
    {
        return $this->country;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setPostalCode($postalCode)
    {
        if (strlen($postalCode) < 8) {
            throw new \InvalidArgumentException('O CEP deve possuir no mínimo 8 caracteres!');
        }

        if (strpos($postalCode, '-') !== false) {
            $postalCode = str_replace('-', '', $postalCode);
        }

        $this->postalCode = $postalCode;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

}
<?php

namespace Italodom\PagseguroBundle\Tests\Pagseguro;

use \Italodom\PagseguroBundle\Pagseguro\ProductInterface;

class Produto implements ProductInterface
{
    private $id;
    private $amount;
    private $description;
    private $weight;

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}
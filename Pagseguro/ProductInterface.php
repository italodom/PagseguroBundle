<?php

namespace Italodom\PagseguroBundle\Pagseguro;

interface ProductInterface
{
    public function setId($id);
    public function getId();
    public function setDescription($description);
    public function getDescription();
    public function setAmount($amount);
    public function getAmount();
    public function setWeight($weight);
    public function getWeight();
}
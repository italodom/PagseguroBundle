<?php

namespace Italodom\PagseguroBundle\Pagseguro;

interface CustomerInterface
{
    public function setEmail($email);
    public function getEmail();
    public function setFullname($fullname);
    public function getFullname();
    public function setAreaCodePhone($code);
    public function getAreaCodePhone();
    public function setTelephoneNumber($telephone);
    public function getTelephoneNumber();
    public function setCPF($cpf);
    public function getCPF();
    public function setDateOfBirth(DateTime $date);
    public function getDateOfBirth();
}
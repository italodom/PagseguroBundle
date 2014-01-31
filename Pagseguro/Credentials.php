<?php

namespace Italodom\PagseguroBundle\Pagseguro;

class Credentials
{
    /**
     * E-mail
     * @var string
     */
    private $email;

    /**
     * Token Pagseguro
     * @var string
     */
    private $token;

    public function getEmail()
    {
        return $this->email;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

}
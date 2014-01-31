<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment\Request;

class Error
{
    /**
     * Código de error
     * @var string
     */
    private $code;

    /**
     * Mensagem do erro
     * @var string
     */
    private $message;

    public function getCode()
    {
        return $this->code;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

}
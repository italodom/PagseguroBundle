<?php

namespace Italodom\PagseguroBundle\Pagseguro\Notification;

class PaymentMethod
{
    /**
     * Tipo
     * @var string
     */
    private $type;

    /**
     * Código
     * @var string
     */
    private $code;

    public function getType()
    {
        return $this->type;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

}
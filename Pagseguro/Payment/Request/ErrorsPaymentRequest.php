<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment\Request;

class ErrorsPaymentRequest
{
    /**
     * Errors
     * @var Error
     */
    private $errors;

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors(Error $errors)
    {
        $this->errors[] = $errors;
    }

}
<?php

namespace Italodom\PagseguroBundle\Pagseguro\Payment\Request;

use \Italodom\PagseguroBundle\Pagseguro\Credentials;
use \Italodom\PagseguroBundle\Pagseguro\Payment\Payment;

class PaymentRequest
{
    /**
     * Charset
     * @var string
     */
    private $charset;

    /**
     * Credenciais
     * @var \Italodom\PagseguroBundle\Pagseguro\Credentials;
     */
    private $credentials;

    /**
     * Pagamento
     * @var Payment
     */
    private $payment;

    /**
     * URL de redirecionamento
     * @var string
     */
    private $redirectURL;

    /**
     * URL de notificação
     * @var string
     */
    private $notificationURL;

    public function getCharset()
    {
        return $this->charset;
    }

    public function getCredentials()
    {
        return $this->credentials;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    public function getNotificationURL()
    {
        return $this->notificationURL;
    }

    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function setRedirectURL($redirectURL)
    {
        $this->redirectURL = $redirectURL;
    }

    public function setNotificationURL($notificationURL)
    {
        $this->notificationURL = $notificationURL;
    }

}
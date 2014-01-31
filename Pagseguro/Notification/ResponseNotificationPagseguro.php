<?php

namespace Italodom\PagseguroBundle\Pagseguro\Notification;

class ResponseNotificationPagseguro
{
    /**
     * Código da notificação
     * @var string
     */
    private $notificationCode;

    /**
     * Tipo da notificação
     * @var string
     */
    private $notificationType;

    public function getNotificationCode()
    {
        return $this->notificationCode;
    }

    public function getNotificationType()
    {
        return $this->notificationType;
    }

    public function setNotificationCode($notificationCode)
    {
        $this->notificationCode = $notificationCode;
    }

    public function setNotificationType($notificationType)
    {
        $this->notificationType = $notificationType;
    }

}
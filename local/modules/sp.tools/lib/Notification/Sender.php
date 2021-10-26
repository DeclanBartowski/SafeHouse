<?php

namespace SP\Tools\Notification;

class Sender
{
    private $notificationProvider;

    public function __construct(NotificationProvider $notificationProvider, array $data)
    {
        $this->notificationProvider = $notificationProvider;
        $this->notification($data);
    }

    private function notification(array $data)
    {
        $this->notificationProvider->send($data);
    }

}
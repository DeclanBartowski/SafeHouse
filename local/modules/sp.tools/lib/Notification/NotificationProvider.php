<?php

namespace SP\Tools\Notification;

interface NotificationProvider
{
    public function send($params);
}
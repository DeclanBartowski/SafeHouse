<?php

namespace SP\Tools\Notification;

class Email implements NotificationProvider
{
    private $data;

    public function send($params)
    {
        $this->prepareData($params);
        $this->run();
    }

    private function prepareData($params)
    {
        $this->data = [
            'NAME' => $params['name'],
            'PHONE' => $params['phone'],
            'MSG' => $params['message'],
        ];
    }

    private function run()
    {
        \CEvent::Send('FEEDBACK_FORM', 's1', $this->data, 'Y', 7);
    }
}
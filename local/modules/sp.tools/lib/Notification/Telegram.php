<?php

namespace SP\Tools\Notification;

use Bitrix\Main\Web\HttpClient;

class Telegram implements NotificationProvider
{
    private $token = '2077329282:AAFHV-4ES_POsdPrp42Hr-l8Jy9Us09twWg';
    private $chatID = '-725416013';
    private $data;

    public function send($params)
    {
        $this->prepareData($params);
        $this->run();
    }

    private function prepareData($params)
    {
        $this->data['chat_id'] = $this->chatID;
        $this->data['parse_mode'] = 'HTML';
        $this->data['text'] = "<b>Вам было отправлено сообщение через форму обратной связи</b>\nИмя: %s\nТелефон: %s\nТекст сообщения:\n%s";
        $this->data['text'] = sprintf($this->data['text'], $params['name'], $params['phone'], $params['message']);
    }

    private function run()
    {
        $httpClient = new HttpClient();
        $httpClient->post($this->getUrl(), $this->data);

    }

    private function getUrl(): string
    {
        return sprintf('https://api.telegram.org/bot%s/sendMessage', $this->token);
    }
}
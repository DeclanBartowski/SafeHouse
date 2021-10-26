<?php

namespace SP\Tools\Controller;

use Bitrix\Main\Loader;
use SP\Tools\Notification\Email;
use SP\Tools\Notification\Sender;
use SP\Tools\Notification\Telegram;

class Forms extends \Bitrix\Main\Engine\Controller
{
    public function sendAction($params): bool
    {
        $this->saveForm($params);
        new Sender(new Email(), $params);
        new Sender(new Telegram(), $params);
        return true;
    }

    private function saveForm($params)
    {
        Loader::includeModule('iblock');
        $el = new \CIBlockElement;
        $arLoadProductArray = array(
            "IBLOCK_ID" => 7,
            "PROPERTY_VALUES" => [
                'NAME' => $params['name'],
                'PHONE' => $params['phone'],
                'MSG' => $params['message'],
            ],
            "NAME" => sprintf("Результат формы от %s", date('d.m.Y H:i:s')),
        );
        $el->Add($arLoadProductArray);

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Sidorenko Pavel
 * Date: 07.09.2021
 * Time: 10:05
 */

use Bitrix\Main\HttpApplication;

$server = HttpApplication::getInstance()->getContext()->getServer()->toArray();
Loc::loadMessages($server["DOCUMENT_ROOT"] . BX_ROOT . "/modules/main/options.php");
Loc::loadMessages(__FILE__);

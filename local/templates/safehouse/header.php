<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="' . SITE_TEMPLATE_PATH . 'favicon.ico">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/html5shiv.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/respond.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
    ?>
</head>
<body>
<div class="wrapper">
    <?php
    $APPLICATION->ShowPanel();
    ?>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="javascript:void(0);" class="logo__link">
                    <picture>
                        <source srcset="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" type="image/webp">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="Logo SAFEHOUSE" class="logo__img">
                    </picture>
                </a>
            </div>
            <div class="menu-burger"><span></span></div>
            <nav class="menu">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "menu_header", array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
                <div class="call call-mob-visible">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "PATH" => SITE_TEMPLATE_PATH . "/include/header/phone_and_modal.php",
                            'AREA_FILE_SHOW' => 'file'
                        )
                    ); ?>
                </div>
            </nav>
            <div class="call call-mob-hidden">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/phone_and_modal.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </div>
        </div>
    </header>

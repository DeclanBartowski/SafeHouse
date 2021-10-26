<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$params = ['SLIDER_MAIN_TITLE', 'SLIDER_MAIN_TEXT', 'SLIDER_MAIN_NAME_BTN', 'SLIDER_MAIN_HREF_BTN'];
foreach ($params as $item) {
    $arTemplateParameters[$item] = [
        "NAME" => GetMessage($item),
        "TYPE" => "STRING",
    ];
}
?>

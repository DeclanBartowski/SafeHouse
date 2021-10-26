<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="footer-contact">
    <a href="tel:<?= $arParams['PHONE_WRITE'] ?>" class="footer_phone-number"><?= $arParams['PHONE_READ'] ?></a>
    <a href="mailto:<?= $arParams['EMAIL_HEADER'] ?>" class="footer-email"><?= $arParams['EMAIL_HEADER'] ?></a>
</div>

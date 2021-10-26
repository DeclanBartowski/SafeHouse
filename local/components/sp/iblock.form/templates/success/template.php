<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

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
<div class="gallery-popup popup" id="modalSuccess">
    <div class="popup__body">
        <div class="popup__content">
            <a href="javascript:void(0);" class="popup__close close-popup">&times;</a>
            <h2 class="title"><?=Loc::getMessage('TEXT')?></h2>
        </div>
    </div>
</div>

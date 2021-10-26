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
<div class="order-advertisement_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title white-title"><?=$arParams['TITLE_BLOCK']?></div>
            </div>
            <div class="col-md-4 right-column">
                <a href="#<?=$arParams['MODAL']?>" data-toggle="modal" class="main-btn"><?=$arParams['MODAL_BUTTON']?></a>
            </div>
        </div>
    </div>
</div>
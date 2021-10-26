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

<main class="main">
    <div class="container">
        <div class="main-content">
            <h1 class="main__title"><?=$arParams['~SLIDER_MAIN_TITLE']?></h1>
            <p class="main__subtitle"><?=$arParams['~SLIDER_MAIN_TEXT']?></p>
            <a href="<?=$arParams['SLIDER_MAIN_HREF_BTN']?>" class="btn btn-orange-border form-animation"><?=$arParams['SLIDER_MAIN_NAME_BTN']?></a>
        </div>
        <div class="main-slider-wrapper main-slider_bg-orange-border">
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        if (empty($arItem['PREVIEW_PICTURE']['SRC'])) {
                            continue;
                        }
                        ?>
                        <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="main-slider-image">
                                <picture>
                                    <source srcset="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" type="image/webp">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>"
                                         class="main-slider__img">
                                </picture>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</main>
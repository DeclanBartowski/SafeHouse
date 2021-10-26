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
<section class="about">
    <div class="about_bg"></div>
    <div class="container">
        <div class="about-left">
            <h2 class="title"><?= $arResult['NAME'] ?></h2>
            <ul class="list-orange-bottom-line">
                <? foreach ($arResult['PROPERTIES']['ADV']['VALUE'] as $adv): ?>
                    <li><?= $adv ?></li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="about-right swiper-container">
            <div class="swiper-wrapper">
                <? foreach ($arResult['PROPERTIES']['INDICATORS']['VALUE'] as $indicator): ?>
                    <div class="about-circle swiper-slide">
                        <span><?= $indicator["TEXT_BEFORE"] ?></span>
                        <strong><?= $indicator["INDICATOR"] ?></strong>
                        <span><?= $indicator["TEXT_AFTER"] ?></span>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>
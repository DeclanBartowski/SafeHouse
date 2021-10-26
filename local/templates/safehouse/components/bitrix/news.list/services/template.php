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
<section id="service" class="service">
    <div class="container">
        <h2 class="title title_bottom-line"><?= $arResult['NAME'] ?></h2>
        <div class="service-tabs">
            <ul class="service-list">
                <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li class="service__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="service__item_bg"
                             style="background: url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>) center/cover no-repeat;"></div>
                        <i class="icon <?= $arItem['PROPERTIES']['ICON']['VALUE_XML_ID'] ?>"></i>
                        <span><?= $arItem['NAME'] ?></span>
                    </li>
                <? endforeach; ?>
            </ul>
            <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                <div class="service-content">
                    <h3><?= $arItem['NAME'] ?></h3>
                    <ul>
                        <? foreach ($arItem['PROPERTIES']['SERVICES']['VALUE'] as $prop): ?>
                            <li><?= $prop ?></li>
                        <? endforeach; ?>
                    </ul>
                </div>
            <? endforeach; ?>
        </div>
        <div class="service-subtitle"><?= $arResult['DESCRIPTION'] ?></div>
    </div>
</section>

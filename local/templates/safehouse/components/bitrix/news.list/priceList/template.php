<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
<section id="price" class="price">
    <div class="container">
        <h2 class="title"><?= $arResult['NAME'] ?></h2>
        <div class="price-tabs">
            <ul class="price-tabs-list">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li class="price-tabs__item"
                        id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['NAME'] ?></li>
                <? endforeach; ?>
            </ul>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <div class="price-tabs-content">
                    <table class="price-table">
                        <thead>
                        <tr>
                            <td><?=Loc::getMessage('PRICE_LIST_WORK_NAME')?></td>
                            <td><?=Loc::getMessage('PRICE_LIST_MEASURE')?></td>
                            <td><?=Loc::getMessage('PRICE_LIST_PRICE')?></td>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach ($arItem["PROPERTIES"]["SERVICES"]["VALUE"] as $prop): ?>
                            <tr>
                                <td><?= $prop['NAME_WORK'] ?></td>
                                <td><?= $prop['MEAUSRE'] ?><sup><?= $prop['SUP'] ?></sup></td>
                                <td><?= $prop['PRICE_RUB'] ?></td>
                            </tr>
                        <? endforeach; ?>

                        </tbody>
                    </table>
                </div>
            <? endforeach; ?>
            <a href="/price_list.pdf" target="_blank" class="btn btn-orange-border"><?=Loc::getMessage('PRICE_LIST_PRICE_DOWNLOAD')?></a>
        </div>
    </div>
</section>



<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<section id="gallery" class="gallery">
    <div class="container">
        <h2 class="title title_edge-line"><?=$arResult['NAME']?></h2>
        <div class="gallery-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	$photo = [];
	foreach ($arItem['PROPERTIES']['PHOTO']['VALUE'] as $value) {
        $photo[] = CFile::GetPath($value);
    }
	?>
    <div class="gallery-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a href="javascript:void(0)" class="gallery-image openGallery"
           data-id="<?=$arItem['ID']?>">
            <picture>
                <source srcset="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" type="image/webp">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Электрика"></picture>
            <div class="gallery-image__title"><?=$arItem['NAME']?></div>
        </a>
    </div>
<?endforeach;?>
        </div>
    </div>
</section>
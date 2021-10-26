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
<div aria-hidden="true" class="modal fade js-modal" id="<?= $arParams['MODAL_ID'] ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-price" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"></button>
            <? if (!empty($arParams['IMG_MODAL'])): ?>
                <div class="popup-icon">
                    <img src="<?= $arParams['IMG_MODAL'] ?>" alt="ok">
                </div>
            <? endif; ?>
            <div class="popup-title"><?= $arParams['TITLE_MODAL'] ?></div>
            <p class="text-center popup_top-text"><?= $arParams['TEXT_MODAL'] ?></p>
        </div>
    </div>
</div>
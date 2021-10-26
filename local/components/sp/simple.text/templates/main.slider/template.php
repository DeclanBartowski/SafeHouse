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
<div class="main-section section" id="add">
    <div class="container">
        <div class="row">
            <div class="col-6 left-column">
                <span class="action-text"><?= $arParams['TITLE_ACTION'] ?></span>
                <span class="sale-text"><?= $arParams['TEXT_ACTION'] ?>
                            <span class="large-text"><?= $arParams['LARGE_TEXT_ACTION'] ?></span>
                        </span>
                <a href="#<?= $arParams['MODAL_ID'] ?>" data-toggle="modal"
                   class="main-btn"><?= $arParams['MODAL_BTN_TEXT'] ?></a>
            </div>
            <div class="col-6 right-column">
                <div class="main-section_right-content">
                            <span class="top-text">
                                <?= $arParams['~RIGHT_TEXT'] ?>
                            </span>
                    <span class="price"><?= $arParams['RIGHT_PRICE'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
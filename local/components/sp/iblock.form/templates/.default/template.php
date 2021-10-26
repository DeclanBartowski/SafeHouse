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
<div class="form-block-one">
    <div class="form-block-one_bg"></div>
    <h2 class="title"><?=Loc::getMessage('TITLE_FORM_DEFAULT')?></h2>
    <div class="container">
        <div class="form-wrap">
            <form class="form sendFormComponent" action="#" method="POST">
                <h3 class="form__title"><?=Loc::getMessage('COMPLETE_FORM_DEFAULT')?></h3>
                <input type="text" name="name" class="form__input" placeholder="<?=Loc::getMessage('NAME_FORM_DEFAULT')?>" required>
                <input type="tel" name="phone" class="form__input" placeholder="<?=Loc::getMessage('NUMBER_FORM_DEFAULT')?>" required>
                <label class="form__label">
                    <span><?=Loc::getMessage('TEXT_FORM_DEFAULT')?></span>
                    <textarea name="message" class="form__textarea"></textarea>
                </label>
                <input type="submit" value="<?=Loc::getMessage('SEND_BTN_FORM_DEFAULT')?>" class="form__submit btn btn-orange-border">
                <div class="form-check">
                    <label class="form-check__btn">
                        <input type="checkbox" name="check" class="form__hidden" checked required>
                        <span class="form__checkbox"></span>
                    </label>
                    <div class="form-check__text"><?=Loc::getMessage('POLITIC_FORM_DEFAULT')?></div>
                </div>
            </form>
        </div>
        <div class="form-block-one-image">
            <picture>
                <source srcset="<?=SITE_TEMPLATE_PATH?>/img/people-block-form-one.webp" type="image/webp">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/people-block-form-one.png" alt="Картинка первой формы"></picture>
        </div>
    </div>
</div>
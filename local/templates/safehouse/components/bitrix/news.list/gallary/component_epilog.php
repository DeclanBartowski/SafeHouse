<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $templateData
 * @var string $templateFolder
 * @var CatalogSectionComponent $component
 */

global $APPLICATION;
if(!$this->__template) {
    $this->InitComponentTemplate();
}
$this->__template->SetViewTarget('galeryPopUp');


?>
    <div class="gallery-popup popup" id="galeryPopUp">
        <div class="popup__body">
            <div class="popup__content">
                <a href="javascript:void(0);" class="popup__close close-popup">&times;</a>
                <div id="ajaxGallery">
                </div>
            </div>
        </div>
    </div>

<?$this->__template->EndViewTarget();

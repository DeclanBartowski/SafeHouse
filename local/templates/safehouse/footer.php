<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-left">
            <p>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/phone.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </p>
            <p>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/email.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </p>
        </div>
        <div class="footer-center">
            <p class="bottom-text">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/copyright.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </p>
        </div>
        <div class="footer-right">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer/info.php",
                    'AREA_FILE_SHOW' => 'file'
                )
            ); ?>
        </div>
    </div>
</footer>
</div>
<? $APPLICATION->ShowViewContent('galeryPopUp'); ?>
<?$APPLICATION->IncludeComponent(
    "sp:iblock.form",
    "success",
    []
);?>

</body>
</html>
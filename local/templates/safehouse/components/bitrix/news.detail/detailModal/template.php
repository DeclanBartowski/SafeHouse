<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<h2 class="title"><?=$arResult['NAME']?></h2>
<div class="gallery-popup-content">
    <?foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo):?>
    <?
            $src = CFile::GetPath($photo);
        ?>
    <a href="javascript:void(0);" class="gallery-popup-content__item">
        <picture>
            <source srcset="<?=$src?>" type="image/webp">
            <img src="<?=$src?>" alt="<?=$arResult['NAME']?>">
        </picture>
    </a>
    <?endforeach;?>

</div>
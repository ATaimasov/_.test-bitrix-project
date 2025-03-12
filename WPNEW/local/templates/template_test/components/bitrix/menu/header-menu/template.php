<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<? $this->setFrameMode(true); ?>

<?
$listClass = $arParams["MENU_TYPE"] === "burger" ? "burger__list link" : "nav__list link";
$itemClass = $arParams["MENU_TYPE"] === "burger" ? "burger__item link" : "nav__item link";
$linkClass = $arParams["MENU_TYPE"] === "burger" ? "burger__link link" : "nav__link link";
?>

<ul class="<?= $listClass ?>">
    <?
    foreach ($arResult as $arItem):
        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        ?>
        <li class="<?= $itemClass ?>">
            <a class="link <?= $linkClass ?>" href="<?= $arItem["LINK"] ?>">
                <?= $arItem["TEXT"] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>
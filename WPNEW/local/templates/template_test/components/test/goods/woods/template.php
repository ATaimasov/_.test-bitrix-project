<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="section bg">
        <div class="section__container">
            <ul class="woods">
                <?php foreach ($arResult["ITEMS"] as $arItem) {
                    if ($arItem["NAME"] === "Деревянные") {
                        for ($i = 0; $i < 2; $i++):
                            ?>
                            <li class="wood">
                                <figure class="wood__img-container">
                                    <?php if (!empty($arItem["DETAIL_PICTURE"])): ?>
                                        <?php
                                        $resizedImage = CFile::ResizeImageGet(
                                            $arItem["DETAIL_PICTURE"],
                                            ["width" => 230, "height" => 300],
                                            BX_RESIZE_IMAGE_PROPORTIONAL,
                                            true
                                        );
                                        ?>
                                        <img src="<?= htmlspecialcharsEx($resizedImage["src"]) ?>"
                                            alt="<?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="wood__img img" width="230" height="300">
                                    <?php else: ?>
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/no-image.png"
                                            alt="<?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="wood__img img" width="230" height="300">
                                    <?php endif; ?>
                                    <figcaption class="wood__title"><?= htmlspecialcharsEx($arItem["NAME"]) ?> окна
                                    </figcaption>
                                </figure>
                                <? if ($arItem["PREVIEW_TEXT"] && $i == 0) { ?>
                                    <div class="wood__content">
                                        <?=
                                            $arItem["PREVIEW_TEXT"]

                                            ?>
                                    </div>
                                <? } elseif ($arItem["DETAIL_TEXT"] && $i == 1) { ?>
                                    <div class="wood__content">
                                        <?=
                                            $arItem["DETAIL_TEXT"]

                                            ?>
                                    </div>
                                <? } ?>
                                <a href="<?= htmlspecialcharsEx($arItem["DETAIL_PAGE_URL"]) ?>" class="link wood__link">Оформить
                                    заказ</a>
                            </li>
                            <?
                        endfor;
                    }
                }
                ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
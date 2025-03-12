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
            <h1 class="section__title">Виды окон</h1>
            <ul class="types">
                <?php


                CModule::IncludeModule('iblock');

                $iblockID = 5;
                $propertyCode = "WINDOW_TYPE";

                $property_enums = CIBlockPropertyEnum::GetList(
                    [],
                    [
                        "IBLOCK_ID" => $iblockID,
                        "CODE" => $propertyCode,
                    ]
                );

                $windowTypes = [];

                while ($enum_fields = $property_enums->GetNext()) {
                    $windowTypes[$enum_fields["ID"]] = $enum_fields["VALUE"];
                }

                foreach ($windowTypes as $typeID => $type) { ?>
                    <li class="type">
                        <p class="type__title"><?= htmlspecialcharsEx($type) ?></p>
                        <ul class="type__list">
                            <?php foreach ($arResult["ITEMS"] as $arItem) {
                                if (in_array($typeID, $arItem["PROPERTIES"]["WINDOW_TYPE"]["VALUE_ENUM_ID"])) {
                                    ?>
                                    <li class="subtype">
                                        <a href="<?= htmlspecialcharsEx($arItem["DETAIL_PAGE_URL"]) ?>" class="link subtype__link">
                                            <figure class="subtype__img-container">
                                                <?php if (!empty($arItem["PREVIEW_PICTURE"])): ?>
                                                    <?php
                                                    $resizedImage = CFile::ResizeImageGet(
                                                        $arItem["PREVIEW_PICTURE"],
                                                        ["width" => 80, "height" => 80],
                                                        BX_RESIZE_IMAGE_PROPORTIONAL,
                                                        true
                                                    );
                                                    ?>
                                                    <img src="<?= htmlspecialcharsEx($resizedImage["src"]) ?>"
                                                        alt="<?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="subtype__img" width="80"
                                                        height="80">
                                                <?php else: ?>
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/no-image.png"
                                                        alt="<?= htmlspecialcharsEx($arItem["NAME"]) ?>" class="subtype__img" width="80"
                                                        height="80">
                                                <?php endif; ?>
                                                <figcaption class="subtype__text"><?= htmlspecialcharsEx($arItem["NAME"]) ?>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                <? }
                            }
                            ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

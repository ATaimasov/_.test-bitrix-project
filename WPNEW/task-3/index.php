<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Задание 3");
?>


<? $APPLICATION->IncludeComponent(
    "test:goods",
    "woods",
    array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "IBLOCK_ID" => "5",
        "FIELD_CODE" => array("NAME", "DETAIL_PICTURE", "DETAIL_TEXT", "PREVIEW_TEXT"),
        "PROPERTY_CODE" => array("WINDOW_TYPE"),
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    )
); ?>

<?php
$APPLICATION->IncludeFile(
    SITE_TEMPLATE_PATH . "/include/materials.php",
    array(
        "MODE" => "php",
        "NAME" => "materials",
        "TEMPLATE" => "include_area.php"
    )
);
?>

<? $APPLICATION->IncludeComponent(
    "test:goods",
    "windows",
    array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "IBLOCK_ID" => "5",
        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE"),
        "PROPERTY_CODE" => array("WINDOW_TYPE"),
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    )
); ?>




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
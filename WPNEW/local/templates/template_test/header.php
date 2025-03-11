<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

global $USER;
global $APPLICATION;
global $_SESSION;
$NAME = "Alexander Taimasov";

?>
<!DOCTYPE html>
<html lang="ru" class="html">

<head>
    <?
    $APPLICATION->ShowHead();
    ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <?
    $APPLICATION->ShowMeta("description");
    $APPLICATION->ShowMeta("keywords");
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadScripts();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="<?= $NAME ?>">
    <meta name="apple-mobile-web-app-title" content="<?= $NAME ?>" />
    <meta name="theme-color" content="#ffffff">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="<?= $NAME ?>">
    <meta property="og:title" content="<?= $NAME ?>">
    <meta property="og:description" content="<?= $NAME ?>">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicons/favicon.svg" />
    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png" />
    <link rel="manifest" href="/favicons/site.webmanifest" />
    <link href="<?= SITE_TEMPLATE_PATH . '/common.css?v=' . time() ?>" type="text/css" rel="stylesheet" />

</head>

<body class="body smooth-mesh-background">
    <?
    $APPLICATION->ShowPanel();
    ?>
    <header class="header">
        <div class="header__container">
            <div class="header__copyrights copyrights">
                <a href="https://github.com/ATaimasov" target="_blank" class="link copyrights__link">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/copyrights.svg" class="logo copyrights__logo" />
                </a>
            </div>
            <nav class="nav header__nav" id="header-nav">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header-menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => ""
                    ),
                    false
                );
                ?>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
<?
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<h1 class="test__title"><?= $APPLICATION->ShowTitle(); ?></h1>
<p class="test__text">
    Извините, запрашиваемой страницы не существует или она перенесена в другой раздел.
</p>
<button class="btn page__404-btn">
    <a href="/" class="link page__404-link">Вернуться на главную</a>
</button>


<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
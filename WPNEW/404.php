<?
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<section class="section">
    <div class="section__container">
        <h1 class="section__title"><?= $APPLICATION->ShowTitle(); ?></h1>
        <p>
            Извините, запрашиваемой страницы не существует или она перенесена в другой раздел.
        </p>
        <button class="btn page__404-btn">
            <a href="/" class="link page__404-link">Вернуться на главную</a>
        </button>
    </div>
</section>


<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
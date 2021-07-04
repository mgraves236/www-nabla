<!DOCTYPE html>
<html lang="en">
<?php
require_once "php/head.php";
?>
<body class="parallax">
<?php
    $name = 'news';
    require_once "php/main_nav.php";
?>
<main>
    <div class="news-container">
    <?php require_once "php/get_news.php"; ?>
<!--        article class="news blur">-->
<!--            lorem ipsum bla bla-->
<!--        </article>-->
<!--        <article class="news blur">-->
<!--            lorem ipsum bla bla-->
<!--        </article>-->
<!--        <article class="news blur">-->
<!--            lorem ipsum bla bla-->
<!--        </article>-->
    </div>
</main>
<?php
require_once "php/footer.php";
?>
</body>
</html>

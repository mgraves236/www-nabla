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
    <?php require_once "php/get_news.php"; ?>
</main>
<?php
require_once "php/footer.php";
?>
</body>
</html>

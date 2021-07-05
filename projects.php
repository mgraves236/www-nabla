<!DOCTYPE html>
<html lang="en">
<?php
require_once "php/head.php";
?>
<body class="parallax">
<?php
$name = 'projects';
require_once "php/main_nav.php";
?>
<main>
    <article class="blur projects-container">
        <div class="img-container">
            <img/>
        </div>
        <div class="list-projects">
            <a id="FOKA">FOKA</a>
<!--            <br>-->
            <a id="workshops-icon">Workshops</a>
<!--            <br>-->
            <a id="lectures-icon" class="curr-proj">Lectures</a>
<!--            <br>-->
            <a id="clubj">Journal Club</a>
<!--            <br>-->
            <a id="stars-logo">VSR Team</a>
<!--            <br>-->
            <a id="tutorials-icon">Tutorials</a>
        </div>
    </article>
</main>
<?php
require_once "php/footer.php";
?>
<script src="js/projects-spinner.js"></script>
</body>
</html>

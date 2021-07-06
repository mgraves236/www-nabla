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
            <a href="#"><img/></a>
        </div>
        <div class="list-projects">
            <div class="indicator"></div>
            <a id="FOKA">FOKA</a>
            <a id="workshops-icon">Workshops</a>
            <a id="lectures-icon" class="curr-proj">Lectures</a>
            <a id="clubj">Journal Club</a>
            <a id="stars-logo">VSR Team</a>
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


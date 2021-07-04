<!--AKTUALIZACJA LISTY CZŁONKÓW-->
<!--Aby zmienic stan listy członków, należy edytować plik members.js, -->
<!--podmieniając elementy tablic management lub honorary. -->
<!--Dokument wygeneruje się dynamicznie.-->

<!DOCTYPE html>
<html lang="en">
<?php
require_once "php/head.php";
?>
<body class="parallax">
<?php
$name = 'members';
require_once "php/main_nav.php";
?>
<main id="members">
    <div class="news-container">
        <div class="news blur" id="management">
            <h1>Management</h1>
            <i class="fas fa-user"></i>
        </div>
        <div class="news blur" id="honorary">
            <h1>Honorary members</h1>
            <i class="fas fa-trophy"></i>
        </div>
    </div>
</main>
<?php
require_once "php/footer.php";
?>
<script src="js/add-blur.js"></script>
<script src="js/members.js"></script>
</body>
</html>
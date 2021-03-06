<!DOCTYPE html>
<html lang="en">
<?php
require_once "php/head.php";
?>
<body class="parallax">
<?php
    $name = 'index';
    require_once "php/main_nav.php";
?>
<main>
    <div id="space">
        <article id="about-us">
            <h1>About us</h1>
            We are a group of students from <a href="http://pwr.edu.pl/en/" target="_blank">Wroclaw University of
                Science and Technology</a> who are passionate about
            theoretical
            and experimental physics. We aim to promote knowledge about current research among students.
        </article>
    </div>
    <div class="center"><a href="#description"><i class="fas fa-arrow-circle-down"></i></a></div>
    <div class="blur">
        <div id = "description">
            <article>
                <h1>More</h1>
                As a student scientific association we organize regular meetings in the form of lectures or overviews,
                workshops and occasional visits to various research facilities. <br>To find out more about current events
                check 'news'.

                <br>We collaborate with <a href="http://www.nanoin.pwr.wroc.pl/" target="_blank"> Koło Naukowe NANOIN</a>
                and <a href="http://qubit.pwr.edu.pl/">Qubit</a>.
                    from <a href="http://pwr.edu.pl/en/" target="_blank">Wroclaw University of
                    Science and Technology</a> and
                Koło Naukowe Fizyków Migacz from <a href="https://uni.wroc.pl/en/">University of Wrocław</a>.
            </article>
            <article>
                <h1>Mentors</h1>
                <ul>
                    <li><a href="http://www.if.pwr.wroc.pl/~katarzynaweron/" target="_blank">Prof. dr hab. Katarzyna
                            Sznajd-Weron</a>, <a href="http://www.kft.pwr.edu.pl/">Department of Theoretical Physics</a></li>
                    <li><a href="https://herbrychjacek.bitbucket.io/" target="_blank">Dr Jacek Herbrych</a>,
                        <a href="http://www.kft.pwr.edu.pl/">Department of Theoretical Physics</a></li>
                </ul>
            </article>
        </div>
    </div>
</main>
<?php
require_once "php/footer.php";
?>
<script src="js/add-blur.js"></script>
<script src="js/arrow.js"></script>
</body>
</html>
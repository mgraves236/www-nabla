<?php
    require_once "SleekDB-master/src/Store.php";
    $databaseDirectory = "db/nabla";
    $newsStore = new \SleekDB\Store("news", $databaseDirectory);

    $news = $newsStore
    ->createQueryBuilder()
    ->where( [ "date", "=", "zimowy_2020-2021" ] )
    ->getQuery()
    ->fetch();
    foreach ($news as &$value) {
        echo '<article class="news blur">'. '<img src="' .
                $value['img'] . '">'
         .'</article>';
    }

?>
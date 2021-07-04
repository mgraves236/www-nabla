<?php
    require_once "SleekDB-master/src/Store.php";
    $databaseDirectory = "db/nabla";
    $newsStore = new \SleekDB\Store("news", $databaseDirectory);

    $dates_arr = array("letni_2020-2021", "zimowy_2020-2021");
    if (!isset ($_GET['page']) ) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    $news = $newsStore
    ->createQueryBuilder()
    ->where( [ "date", "=", $dates_arr[$page - 1] ] )
        ->orderBy(["_id"=>"desc"])
    ->getQuery()
    ->fetch();
    echo '<div class="news-container">';
    foreach ($news as &$value) {
        echo '<article class="news blur">'. '<img src="' .
                $value['img'] . '">' .
            '<p>'. $value['des'] . '</p>'
         .'</article>';
    }
    echo '</div>';
    // pagination
    echo '<div class="pagination">';

    // previous
    if ($page > 1) echo '<a href="news.php?page=' . ($page - 1) . '"> &lt; </a>';
    for ($i = 1; $i <= count($dates_arr); $i++) {
       // echo '<a href="news.php?page=' . $i .'">' . $i . '</a>';
        echo '<a href="news.php?page=' . $i .'" class="';
        echo $i == $page ? 'current blur' : ' ';
        echo '">' . $i . '</a>';
    }
    // next
    if ($page < count($dates_arr)) echo '<a href="news.php?page=' . ($page + 1) . '"> 	&gt; </a>';
    echo '</div>';
?>
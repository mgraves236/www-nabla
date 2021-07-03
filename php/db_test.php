<?php
    require_once "../SleekDB-master/src/Store.php";
    $databaseDirectory = "../db/nabla";
    $newsStore = new \SleekDB\Store("news", $databaseDirectory);
    $article = [
    "title" => "Google Pixel XL",
    "about" => "Google announced a new Pixel!",
    "author" => [
        "avatar" => "profile-12.jpg",
        "name" => "Foo Bar"
    ]
    ];
    $results = $newsStore->insert($article);
    $allNews = $newsStore->findAll();

    print_r($allNews);

?>
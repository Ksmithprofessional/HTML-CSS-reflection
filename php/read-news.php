<?php 

include 'news-db.php';
try {
    $sql = "SELECT * FROM news";
    $results = $pdo->prepare($sql);
    $results->execute();
    $news = $results->fetchAll(PDO::FETCH_ASSOC);
    $titles = array_column($news, 'title');
    $imgSrc = array_column($news, 'img');
    $type = array_column($news, 'type');
    $description = array_column($news, 'description');
    $user = array_column($news, 'user');
    $userImg = array_column($news, 'user_img');
    $date = array_column($news, 'date_posted');


} catch (Exception $e) {
    throw $e;
}